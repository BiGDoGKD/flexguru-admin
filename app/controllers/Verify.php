<?php

/**
 * admin controller
 * @package flexguru
 * AUTHORS: Kesara Karannagoda
 */



class Verify extends Controller
{
    public function __construct()
    {
        session_start();
    }

    public function index()
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
            'title' => 'Verify',
        ];
        $tutorverifications = $this->model('VerifyModel')->pendingtutors();
        $data['verify'] = $tutorverifications;

        $this->view('verify/index', $data);
    }

    public function accepttutor($tutor = [])
    {
        $response = $this->model('VerifyModel')->accepttutor($tutor);
        if ($response) {
            $_SESSION['toastmsg'] = [true, " Service Accepted Successfully !"];
            die(header('location:' . URLROOT . '/verify/'));
        } else {
            $_SESSION['toastmsg'] = [false, " Service Accept Unsuccessful !"];
            die(header('location:' . URLROOT . '/verify/'));
        }
    }

    public function declinetutor($tutor = [])
    {
        $response = $this->model('VerifyModel')->declinetutor($tutor);
        if ($response) {
            $_SESSION['toastmsg'] = [true, " Service Declined Successfully !"];
            die(header('location:' . URLROOT . '/verify/'));
        } else {
            $_SESSION['toastmsg'] = [false, " Service Decline Unsuccessful !"];
            die(header('location:' . URLROOT . '/verify/'));
        }
    }
}
