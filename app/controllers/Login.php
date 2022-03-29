<?php

class Login extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [
            'title' => 'Login',
        ];

        $this->view('users/login', $data);
    }
}
