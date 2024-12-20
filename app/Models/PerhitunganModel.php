<?php

namespace App\Models;

use CodeIgniter\Model;

class PerhitunganModel extends Model
{
    protected $table = 'mahasiswa';
    protected $primaryKey = 'id_mahasiswa';
    protected $useAutoIncrement = true;
    protected $returnType = 'array';
    protected $useSoftDeletes = false;
    protected $allowedFields = ['id_mahasiswa', 'kode', 'ipk', 'masa_studi', 'keaktifan_organisasi', 'prestasi_akademik', 'prestasi_non_akademik'];
    protected $useTimestamps = true;
    protected $createdField = 'created_at';
    protected $updatedField = 'updated_at';

    public function get_user1()
    {
        // Pilih kolom tertentu dan urutkan berdasarkan 'id_mahasiswa'
        return $this->select('id_mahasiswa, kode, ipk, masa_studi, keaktifan_organisasi, prestasi_akademik, prestasi_non_akademik')
            ->orderBy('id_mahasiswa', 'ASC')
            ->findAll();
    }

    public function getNormalizedMatrix()
    {
        $data = $this->get_user1();

        // Hitung akar kuadrat dari jumlah kuadrat setiap kriteria
        $roots = [
            'ipk' => sqrt(array_sum(array_map(fn($x) => $x ** 2, array_column($data, 'ipk')))),
            'masa_studi' => sqrt(array_sum(array_map(fn($x) => $x ** 2, array_column($data, 'masa_studi')))),
            'keaktifan_organisasi' => sqrt(array_sum(array_map(fn($x) => $x ** 2, array_column($data, 'keaktifan_organisasi')))),
            'prestasi_akademik' => sqrt(array_sum(array_map(fn($x) => $x ** 2, array_column($data, 'prestasi_akademik')))),
            'prestasi_non_akademik' => sqrt(array_sum(array_map(fn($x) => $x ** 2, array_column($data, 'prestasi_non_akademik')))),
        ];

        $normalizedData = [];

        // Lakukan normalisasi hanya jika nilai root tidak nol
        foreach ($data as $row) {
            $normalizedData[] = [
                'kode' => $row['kode'],
                'ipk' => $roots['ipk'] != 0 ? $row['ipk'] / $roots['ipk'] : 0,
                'masa_studi' => $roots['masa_studi'] != 0 ? $row['masa_studi'] / $roots['masa_studi'] : 0,
                'keaktifan_organisasi' => $roots['keaktifan_organisasi'] != 0 ? $row['keaktifan_organisasi'] / $roots['keaktifan_organisasi'] : 0,
                'prestasi_akademik' => $roots['prestasi_akademik'] != 0 ? $row['prestasi_akademik'] / $roots['prestasi_akademik'] : 0,
                'prestasi_non_akademik' => $roots['prestasi_non_akademik'] != 0 ? $row['prestasi_non_akademik'] / $roots['prestasi_non_akademik'] : 0,
            ];
        }

        return $normalizedData;
    }
}
