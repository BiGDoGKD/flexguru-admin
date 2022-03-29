<?php
class ClassModel
{
    public function __construct()
    {
        $this->api = new API;
    }

    public function allclasses()
    {
        $response = $this->api->call('GET', APIURL . 'admin/allclasses', null);
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
    public function pendingclasses()
    {
        $response = $this->api->call('GET', APIURL . 'admin/pendingclasses', null);
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
    public function completedclasses()
    {
        $response = $this->api->call('GET', APIURL . 'admin/completedclasses', null);
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
    public function expiredclasses()
    {
        $response = $this->api->call('GET', APIURL . 'admin/expiredclasses', null);
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
    public function gigclasses()
    {
        $response = $this->api->call('GET', APIURL . 'admin/gigclasses', null);
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

    public function ssrclasses()
    {
        $response = $this->api->call('GET', APIURL . 'admin/ssrclasses', null);
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
