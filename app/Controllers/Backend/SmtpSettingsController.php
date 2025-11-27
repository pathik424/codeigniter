<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Models\Backend\SmtpSettingsModel;

class SmtpSettingsController extends BaseController
{
    public function index()
    {
        $model = new SmtpSettingsModel();
        $data['settings'] = $model->first();
        return view('Backend/smtp_settings', $data);
    }

    public function save()
    {
        $model = new SmtpSettingsModel();
        $existing = $model->first();

        $data = [
            'smtp_host'    => $this->request->getPost('smtp_host'),
            'smtp_user'    => $this->request->getPost('smtp_user'),
            'smtp_pass'    => $this->request->getPost('smtp_pass'),
            'smtp_port'    => $this->request->getPost('smtp_port'),
            'smtp_crypto'  => $this->request->getPost('smtp_crypto'),
            'from_email'   => $this->request->getPost('from_email'),
            'from_name'    => $this->request->getPost('from_name'),
            'admin_emails' => $this->request->getPost('admin_emails'),
            'is_active'    => 1,
        ];

        if ($existing) {
            $model->update($existing['id'], $data);
        } else {
            $model->insert($data);
        }

        return redirect()->to('/smtp_settings')->with('message', 'SMTP Settings saved successfully!');
    }

    public function test()
    {
        $model = new SmtpSettingsModel();
        $settings = $model->getActiveSettings();

        if (!$settings) {
            return redirect()->to('/smtp_settings')->with('error', 'Please configure SMTP settings first.');
        }

        $email = \Config\Services::email();

        $config = [
            'protocol'   => 'smtp',
            'SMTPHost'   => $settings['smtp_host'],
            'SMTPUser'   => $settings['smtp_user'],
            'SMTPPass'   => $settings['smtp_pass'],
            'SMTPPort'   => (int)$settings['smtp_port'],
            'SMTPCrypto' => $settings['smtp_crypto'],
            'mailType'   => 'html',
        ];

        $email->initialize($config);
        $email->setFrom($settings['from_email'], $settings['from_name']);
        
        $adminEmails = array_map('trim', explode(',', $settings['admin_emails']));
        $email->setTo($adminEmails[0]);
        
        $email->setSubject('Test Email - SMTP Configuration');
        $email->setMessage('<h2>SMTP Test Email</h2><p>If you received this email, your SMTP configuration is working correctly!</p>');

        if ($email->send()) {
            return redirect()->to('/smtp_settings')->with('message', 'Test email sent successfully!');
        } else {
            return redirect()->to('/smtp_settings')->with('error', 'Failed to send test email: ' . $email->printDebugger(['headers']));
        }
    }
}

