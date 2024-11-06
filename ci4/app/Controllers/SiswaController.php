<?php

namespace App\Controllers;

use App\Models\SiswaModel;

class SiswaController extends BaseController
{
    public function index()
    {
        $model = new SiswaModel();
        $data['siswa'] = $model->findAll();

        return view('siswa/index', $data);
    }

    public function create()
    {
        return view('siswa/create');
    }

    public function store()
    {
        $model = new SiswaModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'no_hp' => $this->request->getPost('no_hp')
        ];

        $model->save($data);
        return redirect()->to('/siswa');
    }

    public function edit($id)
    {
        $model = new SiswaModel();
        $data['siswa'] = $model->find($id);

        return view('siswa/edit', $data);
    }

    public function update($id)
    {
        $model = new SiswaModel();

        $data = [
            'nama' => $this->request->getPost('nama'),
            'email' => $this->request->getPost('email'),
            'no_hp' => $this->request->getPost('no_hp')
        ];

        $model->update($id, $data);
        return redirect()->to('/siswa');
    }

    public function delete($id)
    {
        $model = new SiswaModel();
        $model->delete($id);

        return redirect()->to('/siswa');
    }
}
