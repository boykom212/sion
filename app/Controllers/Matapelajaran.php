<?php


namespace App\Controllers;

use App\Controllers\BaseController;

class Matapelajaran extends BaseController

{

    public function index()
    {
        $data = [
            'title' => 'INFO DATA GURU',
        ];
        return view('infodata/Matapelajaran', $data);
    }
}
