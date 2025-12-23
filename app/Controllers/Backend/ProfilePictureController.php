<?php

namespace App\Controllers\Backend;

use App\Controllers\BaseController;
use App\Models\Auth\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class ProfilePictureController extends BaseController
{
    public function index()
    {
        $userModel = new UserModel();

        $userId = session()->get('user_id');
        
        // If no user ID in session, redirect to login
        if (!$userId) {
            return redirect()->to('/login')->with('error', 'Please log in first');
        }
        
        // Fetch that user's data
        $profile = $userModel->find($userId);
        
        // If user not found, redirect to login
        if (!$profile) {
            return redirect()->to('/login')->with('error', 'User not found');
        }
        
        $data['profile'] = $profile;
        return view('Backend/profile/my_profile', $data);
    }

    public function update($id = null)
    {
        $userModel = new UserModel();
        
        // If no ID provided, use logged-in user ID
        if ($id === null) {
            $id = session()->get('user_id');
        }
        
        // Validate user ID exists
        if (!$id) {
            return redirect()->back()->with('error', 'User not authenticated');
        }
        
        $user = $userModel->find($id);
        if (!$user) {
            return redirect()->back()->with('error', 'User not found');
        }
        
        $imageName = $user['profile_picture'] ?? null;
        $uploadDir = FCPATH . 'uploads/my_profile/';
        
        // Create upload directory if it doesn't exist
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0755, true);
        }

        $image = $this->request->getFile('profile_picture');
        if ($image && $image->isValid() && !$image->hasMoved()) {
            // Delete old image if it exists
            if ($imageName && is_file($uploadDir . $imageName)) {
                unlink($uploadDir . $imageName);
            }
            $imageName = $image->getRandomName();
            $image->move($uploadDir, $imageName);
        }

        $updateData = [];
        
        // Only add fields that were submitted and are not empty
        if ($this->request->getPost('name')) {
            $updateData['name'] = $this->request->getPost('name');
        }
        if ($this->request->getPost('username')) {
            $updateData['username'] = $this->request->getPost('username');
        }
        if ($this->request->getPost('email')) {
            $updateData['email'] = $this->request->getPost('email');
        }
        
        // Only update password if provided
        $password = $this->request->getPost('password');
        if (!empty($password)) {
            $updateData['password'] = password_hash($password, PASSWORD_DEFAULT);
        }
        
        if ($imageName) {
            $updateData['profile_picture'] = $imageName;
        }

        // If no data to update, return early
        if (empty($updateData)) {
            return redirect()->to('/my_profile')->with('message', 'No changes made');
        }

        // Perform the update - skip validation since we handle it manually
        $userModel->skipValidation(true);
        $updated = $userModel->update($id, $updateData);
        
        if ($updated === false) {
            return redirect()->back()->with('error', 'Failed to update profile. Please try again.');
        }

        // Update session with new data
        foreach ($updateData as $key => $value) {
            if ($key !== 'password') { // Don't store password in session
                session()->set($key, $value);
            }
        }

        return redirect()->to('/my_profile')->with('message', 'Profile updated successfully');
    }
}
