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
        $validation = \Config\Services::validation();

        // Add validation if needed

        $userModel = new UserModel();

        $userModel->save([
            'name'       => $this->request->getPost('name'),
            'username'   => $this->request->getPost('username'),
            'email'      => $this->request->getPost('email'),
            'password'   => $this->request->getPost('password'),
            'user_role'  => $this->request->getPost('user_role'),
        ]);

        return redirect()->to('/login')->with('message', 'User Registered Successfully!');
    }
}
