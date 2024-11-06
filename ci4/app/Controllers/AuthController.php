<?php

namespace App\Controllers;

use App\Models\UserModel;
use CodeIgniter\Controller;

class AuthController extends Controller
{
    public function index()
    {
        // Tampilkan form login
        return view('auth/login');
    }

    public function login()
    {
        $session = session();
        $model = new UserModel();

        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Cari pengguna berdasarkan username
        $user = $model->where('username', $username)->first();

        // Cek apakah pengguna ditemukan
        if ($user) {
            // Verifikasi password
            if (password_verify($password, $user['password'])) {
                // Simpan data pengguna di session
                $session->set([
                    'username' => $user['username'],
                    'logged_in' => true,
                ]);

                return redirect()->to('/dashboard');
            } else {
                // Jika password salah
                $session->setFlashdata('error', 'Password salah.');
                return redirect()->back();
            }
        } else {
            // Jika pengguna tidak ditemukan
            $session->setFlashdata('error', 'Username tidak ditemukan.');
            return redirect()->back();
        }
    }

    public function logout()
    {
        $session = session();
        $session->destroy(); // Menghapus session pengguna
        return redirect()->to('/login');
    }
}
