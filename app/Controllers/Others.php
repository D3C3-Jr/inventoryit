<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class Others extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Others',
            'others' => $this->assetsModel->like('jenis', 'Others')->findAll()
        ];
        return view('others/index', $data);
    }

    public function create()
    {
        session();
        $data = [
            'title' => "Tambah Others",
            'validation' => \Config\Services::validation()
        ];

        return view('others/create', $data);
    }

    public function delete($id)
    {
        $this->assetsModel->delete($id);
        return redirect()->to('/others');
    }

    public function detail($id)
    {
        $data = [
            'others' => $this->assetsModel->find($id),
            'title' => 'Detail Others',
        ];
        return view('others/detail', $data);
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
                'lokasi' => [
                    'rules' => 'required|alpha_numeric_space',
                    'errors' => [
                        'required' => 'Pilih salah satu Lokasi',
                        'alpha_numeric' => 'Jangan gunakan Karakter apapun'
                    ]
                ],
                'ip_address' => [
                    'rules' => 'required|is_unique[assets.ip_address]|alpha_numeric_punct',
                    'errors' => [
                        'required' => 'IP Address harus di isi',
                        'is_unique' => 'IP Address sudah ada',
                        'alpha_numeric_punct' => 'Jangan gunakan Karakter ataupun Spasi'
                    ]
                ],
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
                return redirect()->to('/create-others')->withInput()->with('validation', $validation);
            } else {
                $data = [
                    'asset_number' => strtoupper($this->request->getVar('asset_number')),
                    'id_asset' => strtoupper($this->request->getVar('id_asset')),
                    'jenis' => $this->request->getVar('jenis'),
                    'nama_produk' => $this->request->getVar('nama_produk'),
                    'serial_number' => strtoupper($this->request->getVar('serial_number')),
                    'lokasi' => strtoupper($this->request->getVar('lokasi')),
                    'mac_address' => strtoupper($this->request->getVar('mac_address')),
                    'ip_address' => strtoupper($this->request->getVar('ip_address')),
                ];
                $this->assetsModel->save($data);
                $session = session();

                $session->setFlashdata('success', 'Data berhasil di tambah');
                return redirect()->to('/others');
            }
        }
    }
}
