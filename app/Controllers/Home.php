<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'computer' => $this->computerModel->countAll(),
            'title' => 'Home'
        ];
        return view('home', $data);
    }
}
