<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Login extends BaseController
{
    public function index()
    {
        return view('login_view');
    }

    public function login()
    {
        helper(['curl_helper']);
        $input = [
            'email' => $this->request->getPost('email'),
            'password' => $this->request->getPost('password'),
        ];
        $input = json_encode($input);
        $response = perform_curl('http://localhost:8080/login', 'POST', $input, ['Content-Type: application/json']);
        $response = json_decode($response);

        // dd($response);

        // $role = $response->user->role;
        // $token = $response->token;

        // setcookie('token', $token, time() + (170000 * 30), "/");
        // if ($role == "0") {
        //     return redirect()->to(base_url('/admin_page'));
        // } else if ($role == "1") {
        //     return redirect()->to(base_url('/user_page'));
        // } else {
        //     return redirect()->to(base_url('/login'));
        // }

        if ($response->status == 400 || $response->status == 404) {
            return redirect()->to(base_url('/error'));
        } else if ($response->user->role == '0') {
            $role = $response->user->role;
            $token = $response->token;
            setcookie('token', $token, time() + (170000 * 30), "/");
            return redirect()->to(base_url('/admin_page'));
        } else {
            $role = $response->user->role;
            $token = $response->token;
            setcookie('token', $token, time() + (170000 * 30), "/");
            return redirect()->to(base_url('/user_page'));
        }
    }

    public function logout()
    {
        unset($_COOKIE['token']);
        setcookie('token', '', time() - 3600, '/');
        session()->destroy();

        return redirect()->to(base_url('/login'));
    }

    public function error()
    {
        return view('error_page');
    }
}
