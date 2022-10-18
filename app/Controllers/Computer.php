<?php

namespace App\Controllers;

use App\Models\computersModel;

class Computer extends BaseController
{
    public function index()
    {
        $data = [
            'computers' => $this->computerModel->findAll(),
            'title' => 'Computer',
        ];
        return view('computer/index', $data);
    }

    public function create()
    {
        session();
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
                'asset_number' => [
                    'rules' => 'required|is_unique[computer.asset_number]|alpha_numeric',
                    'errors' => [
                        'required' => 'Nomor Asset harus diisi',
                        'is_unique' => 'Nomor Asset sudah ada',
                        'alpha_numeric' => 'Jangan gunakan Karakter ataupun Spasi'
                    ]
                ],
                'id_computer' => [
                    'rules' => 'required|is_unique[computer.id_computer]|alpha_numeric',
                    'errors' => [
                        'required' => 'ID Computer harus diisi',
                        'is_unique' => 'ID Computer sudah ada',
                        'alpha_numeric' => 'Jangan gunakan Karakter ataupun Spasi'
                    ]
                ],
                'jenis' => [
                    'rules' => 'required',
                    'errors' => [
                        'required' => 'Pilih salah satu jenis device',
                        'alpha_numeric' => 'Jangan gunakan Karakter ataupun Spasi'
                    ]
                ],
                'nama_produk' => [
                    'rules' => 'required|alpha_numeric_space',
                    'errors' => [
                        'required' => 'Nama Produk harus diisi',
                        'alpha_numeric_space' => 'Jangan gunakan Karakter apapun'
                    ]
                ],
                'serial_number' => [
                    'rules' => 'required|alpha_numeric',
                    'errors' => [
                        'required' => 'Serial Number harus diisi',
                        'alpha_numeric_space' => 'Jangan gunakan Karakter ataupun Spasi'
                    ]
                ],
                'user' => [
                    'rules' => 'required|alpha_numeric_space',
                    'errors' => [
                        'required' => 'Nama user harus diisi',
                        'alpha_numeric' => 'Jangan gunakan Karakter apapun'
                    ]
                ],
            ];
            if (!$this->validate($rules)) {
                $session = session();
                $validation = \Config\Services::validation();
                $session->setFlashdata('error', 'Data gagal di tambah');
                return redirect()->to('/computer/create')->withInput()->with('validation', $validation);
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
        $data = [
            'computer' => $this->computerModel->find($id),
            'title' => 'Detail Computer',
        ];
        return view('computer/detail', $data);
    }


    public function edit($id)
    {
        $data = [
            'computer' => $this->computerModel->find($id),
            'title' => 'Detail Computer',
            'validation' => \Config\Services::validation()
        ];
        return view('computer/edit', $data);
    }


    public function delete($id)
    {
        $this->computerModel->delete($id);
        return redirect()->to('/computer');
    }
}
