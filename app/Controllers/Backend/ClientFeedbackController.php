<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Models\Backend\ClientFeedbackModel;
use CodeIgniter\HTTP\ResponseInterface;

class ClientFeedbackController extends BaseController
{
    public function index()
    {
        $model = new ClientFeedbackModel();
        $data['feedbacks'] = $model->orderBy('feedback_id', 'DESC')->findAll();
        return view('Backend/client_feedbacks/index', $data);
    }

        public function create()
    {
        return view('Backend/client_feedbacks/add_new_client_feedback');
    }

    public function store()
    {
        $model = new ClientFeedbackModel();
        $client_name = trim($this->request->getPost('client_name'));
        $client_position = trim($this->request->getPost('client_position'));
        $client_feedback = trim($this->request->getPost('client_feedback'));

        if ($client_name === '' || $client_position === '' || $client_feedback === '') {
            return redirect()->back()->withInput()->with('message', 'Client Name, Position, and Feedback are required');
        }

        $imageName = null;
        $image = $this->request->getFile('client_profile_image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move(FCPATH . 'uploads/feedbacks', $imageName);
        }

        $model->save([
            'user_id'  => session()->get('user_id'),
            'client_name'    => $client_name,
            'client_position' => $client_position,
            'client_feedback'    => $client_feedback,
            'client_profile_image'    => $imageName,
        ]);

        return redirect()->to('/client_feedbacks_listing')->with('message', 'Client Feedback added successfully');
    }

    
    public function edit($id)
    {
        $model = new ClientFeedbackModel();
        $data['feedback'] = $model->find($id);
        return view('Backend/client_feedbacks/edit_client_feedback', $data);
    }

     public function update($id)
    {
        $model = new ClientFeedbackModel();
        $client_name = trim($this->request->getPost('client_name'));
        $client_position = trim($this->request->getPost('client_position'));
        $client_feedback = trim($this->request->getPost('client_feedback'));

        if ($client_name === '' || $client_position === '' || $client_feedback === '') {
            return redirect()->back()->withInput()->with('message', 'Client Name, Position, and Feedback are required');
        }

        $feedback = $model->find($id);
        $imageName = $feedback['client_profile_image'];

        $image = $this->request->getFile('client_profile_image');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            // Delete old image if exists
            if ($imageName && file_exists(FCPATH . 'uploads/feedbacks/' . $imageName)) {
                unlink(FCPATH . 'uploads/feedbacks/' . $imageName);
            }
            $imageName = $image->getRandomName();
            $image->move(FCPATH . 'uploads/feedbacks', $imageName);
        }

        $model->update($id, [
                    'client_name'    => $client_name,
            'client_position' => $client_position,
            'client_feedback'    => $client_feedback,
            'client_profile_image'    => $imageName,
        ]);

        return redirect()->to('/client_feedbacks_listing')->with('message', 'Client Feedback updated successfully');
    }

        public function delete($id)
    {
        $model = new ClientFeedbackModel();
        $feedback = $model->find($id);

        // Delete image file if exists
        if ($feedback && $feedback['client_profile_image'] && file_exists(FCPATH . 'uploads/feedbacks/' . $feedback['client_profile_image'])) {
            unlink(FCPATH . 'uploads/feedbacks/' . $feedback['client_profile_image']);
        }

        $model->delete($id);
        return redirect()->to('/client_feedbacks_listing')->with('message', 'Client Feedback deleted');
    }




}
