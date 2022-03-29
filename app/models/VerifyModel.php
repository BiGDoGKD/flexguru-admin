<?php
class VerifyModel
{
    public function __construct()
    {
        $this->api = new API;
    }

    public function pendingtutors()
    {
        $response = $this->api->call('GET', APIURL . 'admin/pendingtutors', null);
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

    public function accepttutor($tutor)
    {
        if ($response = $this->api->call('POST', APIURL . 'admin/accepttutor', json_encode($tutor))) {
            $status = json_decode($response)->response->status;
            if ($status == 200) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function declinetutor($tutor)
    {
        if ($response = $this->api->call('POST', APIURL . 'admin/declinetutor', json_encode($tutor))) {
            $status = json_decode($response)->response->status;
            if ($status == 200) {
                return true;
            } else {
                return false;
            }
        }
    }
}
