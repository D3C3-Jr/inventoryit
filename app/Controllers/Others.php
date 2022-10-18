<?php

namespace App\Controllers;

class Others extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Others'
        ];
        return view('others', $data);
    }
}
