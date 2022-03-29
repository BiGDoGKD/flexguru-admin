<?php
class GigsModel
{
    public function __construct()
    {
        $this->api = new API;
    }

    public function allgigs()
    {
        $response = $this->api->call('GET', APIURL . 'admin/allgigs', null);
        $status = json_decode($response)->response->status;
        $gigs = (array)json_decode($response)->response->result;
        $data = array();
        foreach ($gigs as $gig) {
            array_push($data, (array)$gig);
        }

        if ($status == 200) {
            return $data;
        } else {
            return false;
        }
    }

    public function gigactive()
    {
        $response = $this->api->call('GET', APIURL . 'admin/gigactive', null);
        $status = json_decode($response)->response->status;
        $gigs = (array)json_decode($response)->response->result;
        $data = array();
        foreach ($gigs as $gig) {
            array_push($data, (array)$gig);
        }

        if ($status == 200) {
            return $data;
        } else {
            return false;
        }
    }

    public function giginactive()
    {
        $response = $this->api->call('GET', APIURL . 'admin/giginactive', null);
        $status = json_decode($response)->response->status;
        $gigs = (array)json_decode($response)->response->result;
        $data = array();
        foreach ($gigs as $gig) {
            array_push($data, (array)$gig);
        }

        if ($status == 200) {
            return $data;
        } else {
            return false;
        }
    }

    public function gigpending()
    {
        $response = $this->api->call('GET', APIURL . 'admin/gigpending', null);
        $status = json_decode($response)->response->status;
        $gigs = (array)json_decode($response)->response->result;
        $data = array();
        foreach ($gigs as $gig) {
            array_push($data, (array)$gig);
        }

        if ($status == 200) {
            return $data;
        } else {
            return false;
        }
    }

    public function acceptgig($gigid)
    {
        if ($response = $this->api->call('POST', APIURL . 'admin/acceptgig', json_encode($gigid))) {
            $status = json_decode($response)->response->status;
            if ($status == 200) {
                return true;
            } else {
                return false;
            }
        }
    }

    public function declinegig($gigid)
    {
        if ($response = $this->api->call('POST', APIURL . 'admin/declinegig', json_encode($gigid))) {
            $status = json_decode($response)->response->status;
            if ($status == 200) {
                return true;
            } else {
                return false;
            }
        }
    }
}
