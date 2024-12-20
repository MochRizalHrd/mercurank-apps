<?php

namespace App\Controllers;

use App\Models\PenggunaModel;

class Auth extends BaseController
{
    protected $session;

    public function __construct()
    {
        // Memuat layanan session
        $this->session = \Config\Services::session();
    }

    public function login()
    {
        // Periksa apakah pengguna sudah login dan sesi masih aktif
        if ($this->session->get('isLoggedIn')) {
            $lastActivity = $this->session->get('lastActivity');
            $timeout = 1800; // 30 menit (1800 detik)

            if ($lastActivity && (time() - $lastActivity > $timeout)) {
                // Sesi habis, hancurkan dan redirect ke login
                $this->session->destroy();
                return redirect()->to('/login')->with('error', 'Sesi Anda telah habis. Silakan login kembali.');
            }

            // Perbarui waktu aktivitas terakhir
            $this->session->set('lastActivity', time());

            // Redirect ke dashboard jika masih login
            return redirect()->to('/dashboard');
        }

        return view('/login');
    }

    public function loginProcess()
    {
        $username = $this->request->getPost('username');
        $email = $this->request->getPost('email');
        $password = $this->request->getPost('password');

        $userModel = new PenggunaModel();
        $adminData = $userModel->get_user_by_username($username);

        // Verifikasi email dan password
        if ($adminData && $adminData['email'] === $email && password_verify($password, $adminData['password'])) {
            // Jika login berhasil, simpan data ke sesi
            $this->session->set([
                'isLoggedIn' => true,
                'admin_name' => $adminData['nama_lengkap'],
                'lastActivity' => time(), // Catat waktu login
            ]);

            return redirect()->to('/dashboard');
        } else {
            // Jika login gagal, tampilkan pesan error
            return redirect()->back()->with('error', 'Username, email, atau password salah.');
        }
    }

    public function logout()
    {
        $this->session->destroy();
        return redirect()->to('/login');
    }
}
