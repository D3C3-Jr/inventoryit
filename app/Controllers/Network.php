<?php

namespace App\Controllers;

class Network extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Network'
        ];
        return view('network', $data);
    }
}
