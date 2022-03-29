<?php

/**
 * admin controller
 * @package flexguru
 * AUTHORS: Kesara Karannagoda
 */


class Admin extends Controller
{
    public function __construct()
    {
    }

    public function index()
    {
        $data = [
            'title' => 'Dashboard',
            'pageTitle' => 'Dashboard',
            'page' => 'dashboard',
            'cards' => [
                'User' => [
                    'title' => 'Users',
                    'icon' => 'fas fa-users',
                    'filters' => [
                        [
                            'title' => 'All',
                            'count' => '1305',
                        ],
                        [
                            'title' => 'Students',
                            'count' => '302',
                        ],
                        [
                            'title' => 'Tutors',
                            'count' => '1003',
                        ],
                        [
                            'title' => 'Affiliates',
                            'count' => '103',
                        ]
                    ]
                ],
                'Gigs' => [
                    'title' => 'Gigs',
                    'icon' => 'fas fa-briefcase',
                    'filters' => [
                        [
                            'title' => 'All',
                            'count' => '328',
                        ],
                        [
                            'title' => 'Active',
                            'count' => '312',
                        ],
                        [
                            'title' => 'Inactive',
                            'count' => '16',
                        ],
                    ]
                ],
                'Classes' => [
                    'title' => 'Classes',
                    'icon' => 'fas fa-users-class',
                    'filters' => [
                        [
                            'title' => 'All',
                            'count' => '140K',
                        ],
                        [
                            'title' => 'Completed',
                            'count' => '120K',
                        ],
                        [
                            'title' => 'Pending',
                            'count' => '20K',
                        ],
                        [
                            'title' => 'Expired',
                            'count' => '10K',
                        ]
                    ]
                ],
            ]
        ];
        $this->view('index', $data);
    }
}
