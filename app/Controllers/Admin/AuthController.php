<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;

class AuthController extends BaseController
{
    public function login()
    {
        // Se já está logado, vai direto pro admin
        if (session()->get('is_logged_in')) {
            return redirect()->to(base_url('admin'));
        }

        return view('admin/login');
    }

    public function authenticate()
    {
        $session = session();
        $model = new UserModel();

        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $user = $model->where('email', $email)->first();

        if ($user) {
            if (password_verify($password, $user['password_hash'])) {
                $sessionData = [
                    'id'           => $user['id'],
                    'name'         => $user['name'],
                    'email'        => $user['email'],
                    'is_logged_in' => true
                ];
                $session->set($sessionData);
                return redirect()->to(base_url('admin'));
            } else {
                $session->setFlashdata('msg', 'Senha incorreta.');
                return redirect()->to(base_url('admin/login'));
            }
        } else {
            $session->setFlashdata('msg', 'Email não encontrado.');
            return redirect()->to(base_url('admin/login'));
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy();
        return redirect()->to(base_url('admin/login'));
    }
}
