<?php


namespace App\Controllers;

use App\Controllers\BaseController;

class Ruangkelas extends BaseController

{

    public function index()
    {
        $data = [
            'title' => 'INFO DATA GURU',
        ];
        return view('infodata/Ruangkelas', $data);
    }
}
