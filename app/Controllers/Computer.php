<?php

namespace App\Controllers;

use App\Models\computersModel;
use App\Models\assetsModel;

class Computer extends BaseController
{
    public function index()
    {
        $data = [
            'computers' => $this->assetsModel->like('jenis', 'Laptop')->orLike('jenis', 'PC')->findAll(),
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
                    'rules' => 'required|is_unique[assets.asset_number]|alpha_numeric',
                    'errors' => [
                        'required' => 'Nomor Asset harus diisi',
                        'is_unique' => 'Nomor Asset sudah ada',
                        'alpha_numeric' => 'Jangan gunakan Karakter ataupun Spasi'
                    ]
                ],
                'id_asset' => [
                    'rules' => 'required|is_unique[assets.id_asset]|alpha_numeric',
                    'errors' => [
                        'required' => 'ID asset harus diisi',
                        'is_unique' => 'ID asset sudah ada',
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
                'lokasi' => [
                    'rules' => 'required|alpha_numeric_space',
                    'errors' => [
                        'required' => 'Lokasi harus diisi',
                        'alpha_numeric' => 'Jangan gunakan Karakter apapun'
                    ]
                ],
                'host_name' => [
                    'rules' => 'required|is_unique[assets.host_name]|alpha_numeric',
                    'errors' => [
                        'required' => 'Hostname harus diisi',
                        'is_unique' => 'Hostname sudah ada',
                        'alpha_numeric' => 'Jangan gunakan Karakter ataupun Spasi'
                    ]
                ],
                // 'ip_address' => [
                //     'rules' => 'is_unique[assets.ip_address]|alpha_numeric',
                //     'errors' => [
                //         'is_unique' => 'Hostname sudah ada',
                //         'alpha_numeric' => 'Jangan gunakan Karakter ataupun Spasi'
                //     ]
                // ],
                // 'mac_address' => [
                //     'rules' => 'is_unique[assets.mac_address]|alpha_numeric',
                //     'errors' => [
                //         'is_unique' => 'Hostname sudah ada',
                //         'alpha_numeric' => 'Jangan gunakan Karakter ataupun Spasi'
                //     ]
                // ],
            ];
            if (!$this->validate($rules)) {
                $session = session();
                $validation = \Config\Services::validation();
                $session->setFlashdata('error', 'Data gagal di tambah');
                return redirect()->to('/computer/create')->withInput()->with('validation', $validation);
            } else {
                $data = [
                    'asset_number' => strtoupper($this->request->getVar('asset_number')),
                    'id_asset' => strtoupper($this->request->getVar('id_asset')),
                    'jenis' => $this->request->getVar('jenis'),
                    'nama_produk' => $this->request->getVar('nama_produk'),
                    'serial_number' => strtoupper($this->request->getVar('serial_number')),
                    'user' => strtoupper($this->request->getVar('user')),
                    'lokasi' => strtoupper($this->request->getVar('lokasi')),
                    'mac_address' => strtoupper($this->request->getVar('mac_address')),
                    'ip_address' => strtoupper($this->request->getVar('ip_address')),
                    'host_name' => strtoupper($this->request->getVar('host_name')),
                ];
                $this->assetsModel->save($data);
                $session = session();

                $session->setFlashdata('success', 'Data berhasil di tambah');
                return redirect()->to('/computer');
            }
        }
    }


    public function detail($id)
    {
        $data = [
            'computer' => $this->assetsModel->find($id),
            'title' => 'Detail Computer',
        ];
        return view('computer/detail', $data);
    }


    private function edit($id)
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
        $this->assetsModel->delete($id);
        return redirect()->to('/computer');
    }
}
