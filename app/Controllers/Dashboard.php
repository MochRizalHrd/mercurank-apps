<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;
use App\Models\KriteriaModel;
use App\Models\PenggunaModel;

class Dashboard extends BaseController
{
    protected $session;

    public function __construct()
    {
        // Memuat layanan session
        $this->session = \Config\Services::session();
    }

    public function index()
    {
        // Periksa apakah pengguna sudah login dan sesi masih aktif
        if (!$this->session->get('isLoggedIn')) {
            // Redirect ke halaman login jika belum login
            return redirect()->to('/login')->with('error', 'Silakan login terlebih dahulu.');
        }

        // Periksa timeout sesi
        $lastActivity = $this->session->get('lastActivity');
        $timeout = 1800; // 30 menit (1800 detik)

        if ($lastActivity && (time() - $lastActivity > $timeout)) {
            // Sesi habis, hancurkan dan redirect ke login
            $this->session->destroy();
            return redirect()->to('/login')->with('error', 'Sesi Anda telah habis. Silakan login kembali.');
        }

        // Perbarui waktu aktivitas terakhir
        $this->session->set('lastActivity', time());

        // Memuat model dan data
        $mahasiswaModel = new MahasiswaModel();
        $kriteriaModel = new KriteriaModel();
        $penggunaModel = new PenggunaModel();

        $data = [
            'title' => 'Dashboard',
            'total_mahasiswa' => $mahasiswaModel->countAll(),
            'total_kriteria' => $kriteriaModel->countAll(),
            'total_pengguna' => $penggunaModel->countAll(),
            'admin_name' => $this->session->get('admin_name'), // Mengambil nama admin dari session
        ];

        echo view('admin/template/header', $data);
        echo view('admin/template/sidebar', $data);
        echo view('admin/view_dashboard', $data);
        echo view('admin/template/footer');
    }
}
