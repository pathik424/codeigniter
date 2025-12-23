<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\Auth\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class Register extends BaseController
{
    public function index()
    {
        return view('Auth/register'); 
    }

    public function save()
    {
        // Step 1: Set validation rules
        $rules = [
            'name'     => 'required|min_length[3]|max_length[50]',
            'username' => 'required|min_length[3]|max_length[50]|is_unique[users.username]',
            'email'    => 'required|max_length[255]|valid_email|is_unique[users.email]',
            'password' => 'required|min_length[8]|max_length[255]',
            'confirm_password' => 'required|matches[password]',
            'user_role' => 'required',
            'profile_picture'    => [
                'label' => 'Image File',
                'rules' => 'uploaded[profile_picture]'
                    . '|is_image[profile_picture]'
                    . '|mime_in[profile_picture,image/jpg,image/jpeg,image/gif,image/png,image/webp]'
                    . '|max_size[profile_picture,1024]'
            ],
        ];

        // Step 2: Validate the request
        if (!$this->validate($rules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        $userModel = new UserModel();

        // Step 3: Handle the image upload
        $imageName = null;
        $image = $this->request->getFile('profile_picture');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            $imageName = $image->getRandomName();
            $image->move(FCPATH . 'uploads/profile_img', $imageName);
        } else {
            return redirect()->back()->withInput()->with('error', 'Image upload failed. Please try again with a valid image file.');
        }
        
        // Step 4: Prepare data and hash password
        $data = [
            'name'       => $this->request->getPost('name'),
            'username'   => $this->request->getPost('username'),
            'email'      => $this->request->getPost('email'),
            'password'   => $this->request->getPost('password'), // Let the model handle hashing
            'user_role'  => $this->request->getPost('user_role'),
            'profile_picture' => $imageName,
        ];

        // Step 5: Save the user and handle potential errors
        if ($userModel->save($data)) {
            return redirect()->to('/login')->with('message', 'User Registered Successfully!');
        } else {
            // Get errors from the model for debugging
            $modelErrors = $userModel->errors();
            // Combine controller and model errors
            $allErrors = array_merge($this->validator->getErrors(), $modelErrors);

            return redirect()->back()->withInput()->with('errors', $allErrors);
        }
    }
}
