<?php


namespace App\Controllers;

use App\Controllers\BaseController;

class Walikelas extends BaseController

{

    public function index()
    {
        $data = [
            'title' => 'INFO DATA GURU',
        ];
        return view('infodata/Walikelas', $data);
    }
}
