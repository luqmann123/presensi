<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use App\Models\PegawaiModel;
use App\Models\UserModel;
use App\Models\LokasiPresensiModel;
use App\Models\JabatanModel;

class DataPegawai extends BaseController
{
    public function index()
    {
        $pegawaiModel = new PegawaiModel();
        $data = [
            'title'   => 'Data Pegawai',
            'pegawai' => $pegawaiModel->findAll()
        ];

        return view('Admin/data_pegawai/data_pegawai', $data);
    }

    public function detail($id)
    {
        $pegawaiModel = new PegawaiModel();
        $pegawai = $pegawaiModel->detailPegawai($id);

        // Check if the employee exists
        if (!$pegawai) {
            session()->setFlashdata('error', 'Data Pegawai Tidak Ditemukan');
            return redirect()->to(base_url('admin/pegawai'));
        }

        $data = [
            'title'   => 'Detail Pegawai',
            'pegawai' => $pegawai
        ];
        return view('Admin/data_pegawai/detail', $data);
    }

    public function create()
    {
        $lokasi_presensi = new LokasiPresensiModel();
        $jabatan = new JabatanModel();
        $data = [
            'title'            => 'Tambah Pegawai',
            'lokasi_presensi'  => $lokasi_presensi->findAll(),
            'jabatan'          => $jabatan->findAll(),
            'validation'       => \Config\Services::validation()
        ];
        return view('Admin/data_pegawai/create', $data);
    }
    
    

    public function store()
    {
        $rules = [
            'nama_pegawai' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Pegawai Wajib Diisi',
                ],
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Wajib Diisi',
                ],
            ],
            'jabatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jabatan Wajib Diisi',
                ],
            ],
            // Add other necessary fields here
        ];

        if (!$this->validate($rules)) {
            // Return form with errors
            $data = [
                'title'      => 'Tambah Pegawai',
                'validation' => \Config\Services::validation()
            ];
            return view('Admin/data_pegawai/create', $data);
        }

        // Store the data
        $pegawaiModel = new PegawaiModel();
        $pegawaiModel->insert([
            'nama_pegawai' => $this->request->getPost('nama_pegawai'),
            'alamat' => $this->request->getPost('alamat'),
            'jabatan' => $this->request->getPost('jabatan'),
            // Add other necessary fields here
        ]);

        session()->setFlashdata('berhasil', 'Data Pegawai Berhasil Tersimpan');

        return redirect()->to(base_url('admin/pegawai'));
    }

    public function edit($id)
    {
        $pegawaiModel = new PegawaiModel();
        $data = [
            'title'   => 'Edit Pegawai',
            'pegawai' => $pegawaiModel->find($id),
            'validation' => \Config\Services::validation()
        ];
        return view('Admin/data_pegawai/edit', $data);
    }

    public function update($id)
    {
        $rules = [
            'nama_pegawai' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Nama Pegawai Wajib Diisi',
                ],
            ],
            'alamat' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Alamat Wajib Diisi',
                ],
            ],
            'jabatan' => [
                'rules' => 'required',
                'errors' => [
                    'required' => 'Jabatan Wajib Diisi',
                ],
            ],
            // Add other necessary fields here
        ];

        if (!$this->validate($rules)) {
            // Return form with errors
            $pegawaiModel = new PegawaiModel();
            $data = [
                'title'   => 'Edit Pegawai',
                'pegawai' => $pegawaiModel->find($id),
                'validation' => \Config\Services::validation()
            ];
            return view('Admin/data_pegawai/edit', $data);
        }

        // Update the data
        $pegawaiModel = new PegawaiModel();
        $pegawaiModel->update($id, [
            'nama_pegawai' => $this->request->getPost('nama_pegawai'),
            'alamat' => $this->request->getPost('alamat'),
            'jabatan' => $this->request->getPost('jabatan'),
            // Add other necessary fields here
        ]);

        session()->setFlashdata('berhasil', 'Data Pegawai Berhasil Diperbarui');

        return redirect()->to(base_url('admin/pegawai'));
    }

    public function delete($id)
    {
        $pegawaiModel = new PegawaiModel();
        $pegawaiModel->delete($id);
        session()->setFlashdata('berhasil', 'Data Pegawai Berhasil Dihapus');
        return redirect()->to(base_url('admin/pegawai'));
    }
}
