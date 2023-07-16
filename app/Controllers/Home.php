<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = array(
            'tittle' => 'Home',
            'isi'   => 'home'
        );
        return view('layout/wrapper', $data);
    }

}
