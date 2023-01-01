<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\UserModel;


class Register extends ResourceController
{
    use ResponseTrait;
    public function index()
    {
        if (!$this->validate([
            'username' => [
                'rules' => 'required|min_length[5]|max_length[30]|is_unique[user.username]',
                'errors' => [
                    'required' => 'Username harus diisi',
                    'min_length' => 'Username minimal 5 Karakter',
                    'max_length' => 'Username maksimal 30 Karakter',
                    'is_unique' => 'Username telah terdaftar'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[5]|max_length[50]',
                'errors' => [
                    'required' => 'Password harus diisi',
                    'min_length' => 'Password minimal 5 Karakter',
                    'max_length' => 'Password maksimal 50 Karakter',
                ]
            ],
            'password_conf' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan Password',
                ]
            ],
            'name' => [
                'rules' => 'required|min_length[5]|max_length[100]',
                'errors' => [
                    'required' => 'Nama harus diisi',
                    'min_length' => 'Nama minimal 5 Karakter',
                    'max_length' => 'Nama maksimal 100 Karakter',
                ]
            ],
            'email' => [
                'rules' => 'required|min_length[5]|max_length[50]|is_unique[user.email]',
                'errors' => [
                    'required' => 'Email harus diisi',
                    'min_length' => 'Email minimal 5 Karakter',
                    'max_length' => 'Email maksimal 50 Karakter',
                    'is_unique' => 'Email telah terdaftar'
                ]
            ],
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $users = new UserModel();
        $users->insert([
            'username' => $this->request->getVar('username'),
            'password' => md5($this->request->getVar('password')),
            'nama' => $this->request->getVar('name'),
            'email' => $this->request->getVar('email')
        ]);
        return redirect()->to(base_url('/login'));
    }
    public function register()
    {
        return view('register');
    }
}
