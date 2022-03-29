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
        ];
        $data['user'] = [
            'id' => '2',
            'name' => 'Akash Geethanjana',
            'email' => 'akash@flexguru.com',
            'avatar' => 'https://yt3.ggpht.com/yti/APfAmoGBtKZDZpAlybl5_JJAyfBLKNO4AXqj2ODq7K09rg=s108-c-k-c0x00ffffff-no-rj',
            'username' => 'akash',
            'telephone' => '0771232567',
            'role' => 'tu',
            'subscription' => 'yes',
        ];
        $this->view('users/profile', $data);
    }
}
