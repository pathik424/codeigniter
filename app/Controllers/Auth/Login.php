<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\Auth\UserModel;


class Login extends BaseController
{
    public function login_index()
    {
        return view('Auth/login');
    }
    public function login()
    {
        $usernameOrEmail = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Step 1: Check POST data
        if (empty($usernameOrEmail) || empty($password)) {
            return redirect()->back()->with('error', 'Username or Password is empty');
        }

        $userModel = new UserModel();

        // Step 2: Try to find the user
        $user = $userModel->where('username', $usernameOrEmail)
            ->orWhere('email', $usernameOrEmail)
            ->first();

        if (!$user) {
            return redirect()->back()->with('error', 'No user found with given Username or Email');
        }

        // Step 3: Password verify (MD5 used)
        if (!password_verify($password, $user['password'])) {
            return redirect()->back()->with('error', 'Invalid Username/Email or Password');
        }
        

        // Step 4: If all good, set session
        session()->set([
            'user_id'    => $user['id'],
            'username'   => $user['username'],
            'email'      => $user['email'],
            'user_role'  => $user['user_role'],
            'logged_in'  => true
        ]);

        // Step 5: Redirect based on role
        if ($user['user_role'] == '1') {
            return redirect()->to('/admin_dashboard')->with('message', 'Welcome Admin!');
        } else {
            return redirect()->to('/home')->with('message', 'Welcome User!');
        }
    }
    public function logout()
    {
        session()->destroy(); // Clear all session data
        return redirect()->to('/login')->with('message', 'Logged out successfully');
    }
}
