<?php

namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{
    protected $userModel;

    public function __construct()
    {
        $this->userModel = new UserModel();
        helper('form');
    }

    public function index()
    {
        if (is_login()) {
           return redirect()->to('dashboard');
            
        }
        echo view('auth/login', ['title' => 'User Login']);
       
    }

    public function proses()
    {
        // jika methodnya post lanjut proses 
        if ($this->request->getMethod() == 'post') {
            $rules = $this->validate([
                'username' => 'required|alpha_numeric',
                'password' => 'required'
            ]);
            if (!($rules)) {
                $respon = [
                    'validasi' => false,
                    'error'  => $this->validator->getErrors()
                ];
            } else {
                $user = $this->userModel->getUser($this->request->getPost('username', FILTER_UNSAFE_RAW));
                // jika username tidak terdaftar 
                if (empty($user)) {
                    $respon = [
                        'validasi' => true,
                        'error' => ['username' => 'Username tidak terdaftar!']
                    ];
                } else {
                    // jika password tidak sama
                    if (!verifikasi_password($this->request->getPost('password'), $user->password)) {
                        $respon = [
                            'validasi' => true,
                            'error' => ['password' => 'Password tidak sesuai!']
                        ];
                    } else {
                        // login sukses set session user
                        $data = [
                            'login' => true,
                            'id'    => $user->id,
                        ];
                        $this->session->set($data); // set session
                        $respon = [
                            'validasi' => true,
                            'sukses' => true,
                            'aksi' => 'login',
                            'pesan' => 'Login berhasil!'
                        ];
                    }
                }
            }
            return $this->response->setJSON($respon);
        }
    }

    

    public function logout()
    {
        session()->remove(['login', 'id']); // hapus session login dan id
        return redirect()->to(base_url());
    }
}
