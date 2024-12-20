<?php

namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $table      = 'pengguna';
    protected $primaryKey = 'id_pengguna';
    protected $useAutoIncrement = true;
    protected $returnType     = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['nama_lengkap', 'username', 'email', 'password', 'role'];
    protected $useTimestamps = true;
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';

    // Method untuk mendapatkan pengguna berdasarkan username
    public function get_user_by_username($username)
    {
        return $this->where('username', $username)->first();
    }

    public function get_user()
    {
        return $this->findAll();
    }
}
