<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'laptop' => $this->assetsModel->where('jenis', 'Laptop')->countAllResults(),
            'pc' => $this->assetsModel->where('jenis', 'PC')->countAllResults(),
            'printer' => $this->assetsModel->where('jenis', 'Printer')->countAllResults(),
            'network' => $this->assetsModel->where('jenis', 'Network')->countAllResults(),
            'title' => 'Home'
        ];
        return view('home', $data);
    }
}
