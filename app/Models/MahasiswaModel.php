<?php

namespace App\Models;

use CodeIgniter\Model;

class MahasiswaModel extends Model
{
    protected $table      = 'mahasiswa';
    protected $primaryKey = 'id_mahasiswa';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['kode', 'nim', 'nama_lengkap', 'prodi', 'ipk', 'masa_studi', 'keaktifan_organisasi', 'prestasi_akademik', 'prestasi_non_akademik'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';


    public function get_user()
    {
        return $this->findAll();
    }
}
