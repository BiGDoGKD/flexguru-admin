<?php

/**
 * admin controller
 * @package flexguru
 * AUTHORS: Kesara Karannagoda
 */



class Gigs extends Controller
{
    public function __construct()
    {
        session_start();
    }

    public function index($filter = [])
    {
        if (isset($_SESSION['toastmsg'])) {
            if ($_SESSION['toastmsg'][0]) {
                include APPROOT . "/views/includes/successtoast.php";
            } else {
                include APPROOT . "/views/includes/errortoast.php";
            }
            unset($_SESSION['toastmsg']);
        }

        $data = [
            'title' => 'Gigs',
        ];

        if ($filter == 'active') {
            $data['filter'] = 'active';
            $gigs = $this->model('GigsModel')->gigactive();
            $data['gigs'] = $gigs;
        } elseif ($filter == 'inactive') {
            $data['filter'] = 'inactive';
            $gigs = $this->model('GigsModel')->giginactive();
            $data['gigs'] = $gigs;
        } elseif ($filter == 'pending') {
            $data['filter'] = 'pending';
            $gigs = $this->model('GigsModel')->gigpending();
            $data['gigs'] = $gigs;
        } else {
            $data['filter'] = 'all';
            $gigs = $this->model('GigsModel')->allgigs();
            $data['gigs'] = $gigs;
        }
        $this->view('gigs/index', $data);
    }

    public function acceptgig($gigid = [])
    {
        $response = $this->model('GigsModel')->acceptgig($gigid);
        if ($response) {
            $_SESSION['toastmsg'] = [true, " Service Accepted Successfully !"];
            die(header('location:' . URLROOT . '/gigs/all'));
        } else {
            $_SESSION['toastmsg'] = [false, " Service Accept Unsuccessful !"];
            die(header('location:' . URLROOT . '/gigs/all'));
        }
    }

    public function declinegig($gigid = [])
    {
        $response = $this->model('GigsModel')->declinegig($gigid);
        if ($response) {
            $_SESSION['toastmsg'] = [true, " Service Declined Successfully !"];
            die(header('location:' . URLROOT . '/gigs/all'));
        } else {
            $_SESSION['toastmsg'] = [false, " Service Decline Unsuccessful !"];
            die(header('location:' . URLROOT . '/gigs/all'));
        }
    }
}
