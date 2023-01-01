<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\I18n\Time;

class AdminPage extends BaseController
{
    public function admin_page()
    {
        helper(['curl_helper']);
        $token = $_COOKIE['token'];
        $response = perform_curl('http://localhost:8080/thread/', 'GET', null, ['Authorization: Bearer ' . $token]);
        $data = json_decode($response, true);
        return view('admin_page', $data);
    }

    public function account_page()
    {
        helper(['curl_helper']);
        $token = $_COOKIE['token'];
        $response = perform_curl('http://localhost:8080/user/', 'GET', null, ['Authorization: Bearer ' . $token]);
        $data = json_decode($response, true);
        return view('account_page', $data);
    }

    public function create_thread()
    {
        helper(['curl_helper']);
        $token = $_COOKIE['token'];
        $input = [
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'tanggal' => Time::now('Asia/Jakarta', 'id_ID'),
        ];
        $response = perform_curl('http://localhost:8080/thread', 'POST', $input, ['Authorization: Bearer ' . $token]);
        $data = json_decode($response, true);
        return redirect()->to(base_url('/admin_page'));
    }

    public function create_thread_page()
    {
        return view('create_thread_page');
    }

    public function update_thread($id)
    {
        helper(['curl_helper']);
        $token = $_COOKIE['token'];
        $input = [
            'judul' => $this->request->getPost('judul'),
            'isi' => $this->request->getPost('isi'),
            'tanggal' => Time::now('Asia/Jakarta', 'id_ID'),
        ];
        $input = json_encode($input);
        $response = perform_curl('http://localhost:8080/thread/' . $id, 'PUT', $input, ['Authorization: Bearer ' . $token, 'Content-Type: application/json']);
        return redirect()->to(base_url('/admin_page'));
    }

    public function update_thread_page($id)
    {
        helper(['curl_helper']);
        $token = $_COOKIE['token'];
        $response = perform_curl('http://localhost:8080/thread/' . $id, 'GET', null, ['Authorization: Bearer ' . $token]);
        $data = json_decode($response, true);
        return view('update_thread_page', $data);
    }

    public function delete_thread($id)
    {
        helper(['curl_helper']);
        $token = $_COOKIE['token'];
        $response = perform_curl('http://localhost:8080/thread/' . $id, 'DELETE', null, ['Authorization: Bearer ' . $token]);
        $data = json_decode($response, true);
        return redirect()->to(base_url('/admin_page'));
    }

    public function delete_account($id)
    {
        helper(['curl_helper']);
        $token = $_COOKIE['token'];
        $response = perform_curl('http://localhost:8080/user/' . $id, 'DELETE', null, ['Authorization: Bearer ' . $token]);
        $data = json_decode($response, true);
        return redirect()->to(base_url('/account_page'));
    }
}
