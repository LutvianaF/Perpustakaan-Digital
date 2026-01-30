<?php

namespace App\Controllers\Auth;

use App\Controllers\BaseController;
use App\Models\UserModel;

class LoginController extends BaseController
{
    public function index()
    {
        $accept = $this->request->getHeaderLine('Accept');

        if (str_contains($accept, 'application/json')) {
            return $this->response->setJSON([
                'status' => true,
                'message' => 'Login endpoint OK'
            ]);
        }

        return view('auth/login');
    }


    public function prosesLogin()
    {
        $userModel = new UserModel();
        $user = $userModel
            ->where('username', $this->request->getPost('username'))
            ->first();

        if (!$user || !password_verify($this->request->getPost('password'), $user['password'])) {
            return redirect()->back()->with('error', 'Invalid username or password.');
        }

        session()->set([
            'user_id' => $user['id'],
            'username' => $user['username'],
            'role' => $user['id_role'],
            'isLoggedIn' => true,
        ]);

        $redirect = [
            '2'   => '/admin/dashboard',
            '3' => '/petugas/dashboard',
            '4' => '/peminjam/dashboard',
        ];

        return redirect()->to($redirect[$user['id_role']] ?? '/login');
    }
}
