<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\Backend\SmtpSettingsModel;
use App\Models\Frontend\ContactUsModel;
use Config\Services;

class ContactUsController extends BaseController
{
    protected ContactUsModel $contactModel;
    protected SmtpSettingsModel $smtpModel;
    protected array $smtpSettings;

    public function __construct()
    {
        $this->contactModel = new ContactUsModel();
        $this->smtpModel    = new SmtpSettingsModel();
        $this->smtpSettings = $this->smtpModel->getActiveSettings() ?? [];
    }

    public function index()
    {
        return view('Frontend/contact_us');
    }

    public function store()
    {
        helper(['form']);

        $rules = [
            'name'    => 'required|min_length[3]|max_length[150]',
            'email'   => 'required|valid_email|max_length[150]',
            'subject' => 'required|min_length[3]|max_length[200]',
            'message' => 'required|min_length[5]',
        ];

        if (! $this->validate($rules)) {
            return redirect()
                ->back()
                ->withInput()
                ->with('errors', $this->validator->getErrors());
        }

        $payload = [
            'full_name' => $this->request->getPost('name'),
            'email'     => $this->request->getPost('email'),
            'subject'   => $this->request->getPost('subject'),
            'message'   => $this->request->getPost('message'),
        ];

        $this->contactModel->insert($payload);

        $this->sendCustomerMail($payload);
        $this->sendAdminMail($payload);

        return redirect()
            ->back()
            ->with('success', 'Thank you! We will reach you within 24 hours.');
    }

    protected function sendCustomerMail(array $payload): void
    {
        if (empty($this->smtpSettings)) {
            log_message('error', 'SMTP settings are not configured.');

            return;
        }

        $email = Services::email();
        $this->initializeEmail($email);

        $email->setTo($payload['email']);
        $email->setSubject('Contact request received');
        $email->setMessage('You submit the Contact Us form. We will reach you within 24 hours.');

        if (! $email->send(false)) {
            log_message('error', 'Failed to send customer contact email: {error}', [
                'error' => $email->printDebugger(['headers']),
            ]);
        }
    }

    protected function sendAdminMail(array $payload): void
    {
        if (empty($this->smtpSettings)) {
            log_message('error', 'SMTP settings are not configured.');

            return;
        }

        $email = Services::email();
        $this->initializeEmail($email);

        $adminEmails = array_map('trim', explode(',', $this->smtpSettings['admin_emails']));
        $email->setTo($adminEmails);
        $email->setSubject('New contact request received');
        $email->setMessage(
            "A new contact request has been submitted:\n\n" .
            "Name: {$payload['full_name']}\n" .
            "Email: {$payload['email']}\n" .
            "Subject: {$payload['subject']}\n\n" .
            "{$payload['message']}"
        );

        if (! $email->send(false)) {
            log_message('error', 'Failed to send admin contact email: {error}', [
                'error' => $email->printDebugger(['headers']),
            ]);
        }
    }

    protected function initializeEmail($email): void
    {
        $config = [
            'protocol'   => 'smtp',
            'SMTPHost'   => $this->smtpSettings['smtp_host'],
            'SMTPUser'   => $this->smtpSettings['smtp_user'],
            'SMTPPass'   => $this->smtpSettings['smtp_pass'],
            'SMTPPort'   => (int) $this->smtpSettings['smtp_port'],
            'SMTPCrypto' => $this->smtpSettings['smtp_crypto'],
            'mailType'   => 'html',
            'charset'    => 'utf-8',
            'newline'    => "\r\n",
        ];

        $email->initialize($config);
        $email->setFrom($this->smtpSettings['from_email'], $this->smtpSettings['from_name']);
    }

    public function contact_us_forms_listing()
    {
        $data['contact_forms'] = $this->contactModel->orderBy('created_at', 'DESC')->findAll();

        return view('Backend/contact_us_forms_listing', $data);
    }
}
