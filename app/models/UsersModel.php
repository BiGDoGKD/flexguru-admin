<?php
class UsersModel
{
    public function __construct()
    {
        $this->api = new API;
    }

    public function allUsers()
    {
        $response = $this->api->call('GET', APIURL . 'admin/allusers', null);
        $status = json_decode($response)->response->status;
        $users = (array)json_decode($response)->response->result;
        $data = array();
        foreach ($users as $user) {
            array_push($data, (array)$user);
        }

        if ($status == 200) {
            return $data;
        } else {
            return false;
        }
    }
    public function tutors()
    {
        $response = $this->api->call('GET', APIURL . 'admin/tutors', null);
        $status = json_decode($response)->response->status;
        $users = (array)json_decode($response)->response->result;
        $data = array();
        foreach ($users as $user) {
            array_push($data, (array)$user);
        }

        if ($status == 200) {
            return $data;
        } else {
            return false;
        }
    }
    public function students()
    {
        $response = $this->api->call('GET', APIURL . 'admin/students', null);
        $status = json_decode($response)->response->status;
        $users = (array)json_decode($response)->response->result;
        $data = array();
        foreach ($users as $user) {
            array_push($data, (array)$user);
        }

        if ($status == 200) {
            return $data;
        } else {
            return false;
        }
    }
    public function affiliates()
    {
        $response = $this->api->call('GET', APIURL . 'admin/affiliates', null);
        $status = json_decode($response)->response->status;
        $users = (array)json_decode($response)->response->result;
        $data = array();
        foreach ($users as $user) {
            array_push($data, (array)$user);
        }

        if ($status == 200) {
            return $data;
        } else {
            return false;
        }
    }
    public function subon()
    {
        $response = $this->api->call('GET', APIURL . 'admin/subon', null);
        $status = json_decode($response)->response->status;
        $users = (array)json_decode($response)->response->result;
        $data = array();
        foreach ($users as $user) {
            array_push($data, (array)$user);
        }

        if ($status == 200) {
            return $data;
        } else {
            return false;
        }
    }

    public function suboff()
    {
        $response = $this->api->call('GET', APIURL . 'admin/suboff', null);
        $status = json_decode($response)->response->status;
        $users = (array)json_decode($response)->response->result;
        $data = array();
        foreach ($users as $user) {
            array_push($data, (array)$user);
        }

        if ($status == 200) {
            return $data;
        } else {
            return false;
        }
    }
}
