<?php

/**
 * admin controller
 * @package flexguru
 * AUTHORS: Kesara Karannagoda
 */



class Users extends Controller
{
    public function __construct()
    {
    }

    public function index($optional = [])
    {
        $data = [
            'title' => 'Users',
        ];

        if ($optional == 'tutor') {
            $data['filter'] = 'tu';
            $users = $this->model('UsersModel')->tutors();
            $data['users'] = $users;
        } elseif ($optional == 'student') {
            $data['filter'] = 'st';
            $users = $this->model('UsersModel')->students();
            $data['users'] = $users;
        } elseif ($optional == 'affiliate') {
            $data['filter'] = 'af';
            $users = $this->model('UsersModel')->affiliates();
            $data['users'] = $users;
        } elseif ($optional == 'sub-yes') {
            $data['filter'] = 'sub-yes';
            $users = $this->model('UsersModel')->subon();
            $data['users'] = $users;
        } elseif ($optional == 'sub-no') {
            $data['filter'] = 'sub-no';
            $users = $this->model('UsersModel')->suboff();
            $data['users'] = $users;
        } else {
            $data['filter'] = 'all';
            $users = $this->model('UsersModel')->allusers();
            $data['users'] = $users;
        }
        $this->view('users/index', $data);
    }
}
