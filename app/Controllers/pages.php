<?php

namespace App\Controllers;

class pages extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Home | SION',

        ];

        return view('pages/home', $data);
    }

    public function about()
    {
        $data = [

            'title' => 'About'
        ];


        return view('pages/about', $data);
    }
}
