<?php

namespace App\Controllers\Backend\BackendPartials;

use App\Controllers\BaseController;
use App\Models\Auth\UserModel;
use CodeIgniter\HTTP\ResponseInterface;

class HeaderFooterController extends BaseController
{
    public function index()
    {
        // $userModel = new UserModel();

        // $userId = session()->get('id');

        // // If no user ID in session, redirect to login
        // if (!$userId) {
        //     return redirect()->to('/login')->with('error', 'Please log in first');
        // }

        // // Fetch that user's data
        // $profile = $userModel->find($userId);

        // // If user not found, redirect to login
        // if (!$profile) {
        //     return redirect()->to('/login')->with('error', 'User not found');
        // }

        // $data['user'] = $profile;
        // return view('Backend/backend_partials/header', $data);
    }
}
