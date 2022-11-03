<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\I18n\Time;

class Stock extends BaseController
{
    public function tinta()
    {
        $data = [
            'title' => 'Tinta',
            'tintas' => $this->stocksModel->findAll(),
            'time' => new Time()
        ];
        return view('stock/tinta/index', $data);
    }
}
