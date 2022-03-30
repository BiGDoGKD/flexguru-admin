<?php
class UserModel
{
    public function __construct()
    {
        $this->api = new API;
    }

    public function getuser($userid)
    {
        $response = $this->api->call('POST', APIURL . 'admin/getuser', $userid);
        $status = json_decode($response)->response->status;
        $user = (array)json_decode($response)->response->result;

        if ($status == 200) {
            return $user;
        } else {
            return false;
        }
    }
}
