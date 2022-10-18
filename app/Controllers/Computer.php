<?php

namespace App\Controllers;

use App\Models\computersModel;

class Computer extends BaseController
{
    public function index()
    {
        $computerModel = new computersModel();
        $data = [
            'computers' => $computerModel->findAll(),
            'title' => 'Computer',
        ];
        return view('computer/index', $data);
    }

    public function create()
    {
        $data = [
            'title' => "Tambah Computer",
            'validation' => \Config\Services::validation()
        ];

        return view('computer/create', $data);
    }

    public function save()
    {
        if ($this->request->getMethod() == 'post') {
            $rules = [
                'asset_number' => 'required|is_unique[computer.asset_number]',
                'id_computer' => 'required|is_unique[computer.id_computer]',
                'jenis' => 'required',
                'nama_produk' => 'required',
                'serial_number' => 'required',
                'user' => 'required',
            ];
            if (!$this->validate($rules)) {
                $session = session();
                $session->setFlashdata('error', 'Data gagal di tambah');
                return redirect()->to('/computer/create');
            } else {
                $computerModel = new computersModel();
                $data = [
                    'asset_number' => $this->request->getVar('asset_number'),
                    'id_computer' => $this->request->getVar('id_computer'),
                    'jenis' => $this->request->getVar('jenis'),
                    'nama_produk' => $this->request->getVar('nama_produk'),
                    'serial_number' => $this->request->getVar('serial_number'),
                    'user' => $this->request->getVar('user'),
                ];
                $computerModel->save($data);
                $session = session();
                $session->setFlashdata('success', 'Data berhasil di tambah');
                return redirect()->to('/computer');
            }
        }
    }


    public function detail($id)
    {
        $computerModel = new computersModel();
        $data = [
            'computer' => $computerModel->find($id),
            'title' => 'Detail Computer',
        ];
        return view('computer/detail', $data);
    }

    public function delete($id)
    {
        $computerModel = new computersModel();
        $computerModel->delete($id);
        return redirect()->to('/computer');
    }
}
