<?php

namespace App\Models;

use CodeIgniter\Model;

class LaporanModel extends Model
{
    protected $table = 'laporan'; // Nama tabel laporan
    protected $primaryKey = 'id_laporan';
    protected $allowedFields = ['peringkat', 'nim', 'nama_lengkap', 'hasil_akhir']; // Kolom tabel laporan
    // Menambahkan properti untuk menggunakan timestamp otomatis
    protected $useTimestamps = true; // Menandakan bahwa kita ingin menggunakan fitur timestamp otomatis
    protected $createdField  = 'created_at'; // Nama kolom untuk created_at
    protected $updatedField  = 'updated_at'; // Nama kolom untuk updated_at

    public function getLaporan()
    {
        return $this->db->table('perhitungan_moora')->get()->getResultArray(); // Mengambil data dari tabel perhitungan_moora
    }
}
