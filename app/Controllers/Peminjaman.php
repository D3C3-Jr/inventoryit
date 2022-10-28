<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Peminjaman extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Form Peminjaman',
            'validation' => \Config\Services::validation()
        ];
        return view('form/form_peminjaman/index', $data);
    }
}
