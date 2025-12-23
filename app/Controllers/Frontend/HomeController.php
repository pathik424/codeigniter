<?php

namespace App\Controllers\Frontend;

use App\Controllers\BaseController;
use App\Models\Backend\DogFoodProductModel;
use App\Models\Backend\HeaderModel;
use App\Models\Backend\PostModel;
use App\Models\Auth\UserModel;
use App\Models\Backend\ClientFeedbackModel;
use App\Models\Frontend\ConsultationModel;
use App\Models\Backend\SmtpSettingsModel;
use App\Models\Backend\GalleryModel;
use App\Models\Backend\PackageModel;
use CodeIgniter\HTTP\ResponseInterface;

class HomeController extends BaseController
{
    public function home_index()
    {
        $productModel = new DogFoodProductModel();
        $headerModel = new HeaderModel();
        $postModel = new PostModel();
        $clientFeedbackModel = new ClientFeedbackModel();
        $packageModel = new PackageModel();

        // Fetch only active products
        $data['products'] = $productModel
            ->where('product_is_active', 1)
            ->findAll();

        // Fetch active headers for navigation
        $data['headers'] = $headerModel
            ->where('is_active', 1)
            ->orderBy('id', 'ASC')
            ->findAll();

        // Fetch latest 3 posts for blog section with user names
        $userModel = new UserModel();
        $posts = $postModel
            ->orderBy('created_at', 'ASC')
            ->limit(3)
            ->findAll();
        
        foreach ($posts as &$post) {
            $user = $userModel->find($post['user_id']);
            $post['author_name'] = $user ? $user['name'] : 'Admin';
        }
        $data['posts'] = $posts;

        // Fetch gallery images
        $galleryModel = new GalleryModel();
        $data['gallery'] = $galleryModel->orderBy('gallery_id', 'DESC')->findAll();
        $data['client_feedbacks'] = $clientFeedbackModel->orderBy('feedback_id', 'DESC')->findAll();
        $data['package'] = $packageModel->orderBy('id', 'DESC')->findAll();

        return view('Frontend/home', $data);
    }

    public function post_single($id)
    {
        $postModel = new PostModel();
        $headerModel = new HeaderModel();
        $userModel = new UserModel();

        $post = $postModel->find($id);
        if (!$post) {
            throw \CodeIgniter\Exceptions\PageNotFoundException::forPageNotFound();
        }

        // Get author name
        $user = $userModel->find($post['user_id']);
        $post['author_name'] = $user ? $user['name'] : 'Admin';

        // Fetch active headers for navigation
        $data['headers'] = $headerModel
            ->where('is_active', 1)
            ->orderBy('id', 'ASC')
            ->findAll();

        // Fetch recent posts for sidebar (excluding current)
        $recentPosts = $postModel
            ->where('post_id !=', $id)
            ->orderBy('created_at', 'DESC')
            ->limit(3)
            ->findAll();
        
        foreach ($recentPosts as &$rp) {
            $u = $userModel->find($rp['user_id']);
            $rp['author_name'] = $u ? $u['name'] : 'Admin';
        }

        $data['post'] = $post;
        $data['recent_posts'] = $recentPosts;

        return view('Frontend/blog_single', $data);
    }

    public function store_consultation()
    {
        $model = new ConsultationModel();

        $formData = [
            'service'          => $this->request->getPost('service'),
            'name'             => $this->request->getPost('name'),
            'vehicle_number'   => $this->request->getPost('vehicle_number'),
            'appointment_date' => $this->request->getPost('appointment_date'),
            'appointment_time' => $this->request->getPost('appointment_time'),
            'message'          => $this->request->getPost('message'),
        ];

        $model->save($formData);

        // Send email to admin
        $this->sendConsultationEmail($formData);

        return redirect()->to('/home')->with('consultation_message', 'Your consultation request has been submitted successfully!');
    }

    private function sendConsultationEmail($formData)
    {
        $smtpModel = new SmtpSettingsModel();
        $settings = $smtpModel->getActiveSettings();

        if (!$settings) {
            return false;
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

        // Send to all admin emails
        $adminEmails = array_map('trim', explode(',', $settings['admin_emails']));
        $email->setTo($adminEmails);

        $email->setSubject('New Consultation Request - ' . $formData['service']);

        $message = "
        <h2>New Consultation Request</h2>
        <table style='border-collapse: collapse; width: 100%;'>
            <tr><td style='padding: 10px; border: 1px solid #ddd;'><strong>Service:</strong></td><td style='padding: 10px; border: 1px solid #ddd;'>{$formData['service']}</td></tr>
            <tr><td style='padding: 10px; border: 1px solid #ddd;'><strong>Name:</strong></td><td style='padding: 10px; border: 1px solid #ddd;'>{$formData['name']}</td></tr>
            <tr><td style='padding: 10px; border: 1px solid #ddd;'><strong>Vehicle Number:</strong></td><td style='padding: 10px; border: 1px solid #ddd;'>{$formData['vehicle_number']}</td></tr>
            <tr><td style='padding: 10px; border: 1px solid #ddd;'><strong>Appointment Date:</strong></td><td style='padding: 10px; border: 1px solid #ddd;'>{$formData['appointment_date']}</td></tr>
            <tr><td style='padding: 10px; border: 1px solid #ddd;'><strong>Appointment Time:</strong></td><td style='padding: 10px; border: 1px solid #ddd;'>{$formData['appointment_time']}</td></tr>
            <tr><td style='padding: 10px; border: 1px solid #ddd;'><strong>Message:</strong></td><td style='padding: 10px; border: 1px solid #ddd;'>{$formData['message']}</td></tr>
        </table>
        ";

        $email->setMessage($message);
        $email->send();

        return true;
    }
    public function image_galary_listing()
    {
        $model = new GalleryModel();
        $data['gallery'] = $model->orderBy('gallery_id', 'DESC')->findAll();
        return view('Frontend/home', $data);
    }
}
