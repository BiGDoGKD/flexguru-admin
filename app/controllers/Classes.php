<?php

/**
 * admin controller
 * @package flexguru
 * AUTHORS: Kesara Karannagoda
 */


class Classes extends Controller
{
    public function __construct()
    {
    }

    public function index($filter = '')
    {
        $data = [
            'title' => 'Classes',
        ];

        if ($filter == 'completed') {
            $data['filter'] = 'completed';
            $completed = $this->model('ClassModel')->completedclasses();
            $data['classes'] = $completed;
        } elseif ($filter == 'expired') {
            $data['filter'] = 'expired';
            $expired = $this->model('ClassModel')->expiredclasses();
            $data['classes'] = $expired;
        } elseif ($filter == 'pending') {
            $data['filter'] = 'pending';
            $pending = $this->model('ClassModel')->pendingclasses();
            $data['classes'] = $pending;
        } elseif ($filter == 'gig') {
            $data['filter'] = 'gig';
            $gig = $this->model('ClassModel')->gigclasses();
            $data['classes'] = $gig;
        } elseif ($filter == 'ssr') {

            $data['filter'] = 'ssr';
            // add classes here
            $ssr = $this->model('ClassModel')->ssrclasses();
            $data['classes'] = $ssr;
        } else {
            $data['filter'] = 'all';
            $all = $this->model('ClassModel')->allclasses();
            $data['classes'] = $all;
        }


        $this->view('classes/index', $data);
    }

    public function id()
    {
        print('Class ID');
    }
}
