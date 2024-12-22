<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'perhitungan_moora'; // Ganti sesuai nama tabel Anda
    protected $primaryKey = 'id';
    protected $allowedFields = ['nama_mahasiswa', 'nim', 'nilai_perhitungan', 'peringkat'];

    public function getLaporan()
    {
        return $this->orderBy('peringkat', 'ASC')->findAll(); // Ranking diurutkan ASC
    }
}
