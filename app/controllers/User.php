<?php

class User extends Controller
{
    public function __construct()
    {
    }

    public function index($id)
    {
        $data = [
            'title' => 'User',
            'user' => $this->model('UserModel')->getuser($id),
        ];

        $this->view('users/profile', $data);
    }
}
