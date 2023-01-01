<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class UserPage extends BaseController
{
    public function index()
    {
        return view('user_page');
    }

    public function user_page()
    {
        helper(['curl_helper']);
        $token = $_COOKIE['token'];
        $response = perform_curl('http://localhost:8080/thread', 'GET', null, ['Authorization: Bearer ' . $token]);
        $data = json_decode($response, true);
        return view('user_page', $data);
    }

    public function user_profil()
    {
        helper(['curl_helper']);
        $token = $_COOKIE['token'];
        $response = perform_curl('http://localhost:8080/me', 'GET', null, ['Authorization: Bearer ' . $token]);
        $data = json_decode($response, true);
        $response = perform_curl('http://localhost:8080/user/' . $data['id'], 'GET', null, ['Authorization: Bearer ' . $token]);
        $data = json_decode($response, true);
        return view('user_profil', $data);
    }

    public function update_account_page($id)
    {
        helper(['curl_helper']);
        $token = $_COOKIE['token'];
        $response = perform_curl('http://localhost:8080/user/' . $id, 'GET', null, ['Authorization: Bearer ' . $token]);
        $data = json_decode($response, true);
        return view('update_account_page', $data);
    }

    public function get_id_user()
    {
        helper(['curl_helper']);
        $token = $_COOKIE['token'];
        $response = perform_curl('http://localhost:8080/me', 'GET', null, ['Authorization: Bearer ' . $token]);
        $data = json_decode($response, true);
        $response = perform_curl('http://localhost:8080/user/' . $data['id'], 'GET', null, ['Authorization: Bearer ' . $token]);
        $data = json_decode($response, true);
        return view('update_account_page', $data);
    }

    public function update_account($id)
    {
        helper(['curl_helper']);
        $token = $_COOKIE['token'];
        $input = [
            'username' => $this->request->getPost('username'),
            'password' => $this->request->getPost('password'),
            'password_confirm' => $this->request->getPost('password_confirm'),
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
        ];
        $input = json_encode($input);
        $response = perform_curl('http://localhost:8080/user/' . $id, 'PUT', $input, ['Authorization: Bearer ' . $token, 'Content-Type: application/json']);
        return redirect()->to(base_url('/profil'));
    }

    public function about()
    {
        return view('about_page');
    }
}
