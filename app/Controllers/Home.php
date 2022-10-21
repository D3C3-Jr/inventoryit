<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'laptop' => $this->assetsModel->where('jenis', 'Laptop')->countAllResults(),
            'pc' => $this->assetsModel->where('jenis', 'PC')->countAllResults(),
            'title' => 'Home'
        ];
        return view('home', $data);
    }
}
