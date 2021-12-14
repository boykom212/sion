<?php


namespace App\Controllers;

use App\Controllers\BaseController;

class Dataguru extends BaseController

{

    public function index()
    {
        $data = [
            'title' => 'INFO DATA GURU',
        ];
        return view('infodata/Dataguru', $data);
    }
}
