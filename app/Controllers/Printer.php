<?php

namespace App\Controllers;

class Printer extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Printer'
        ];
        return view('printer', $data);
    }
}
