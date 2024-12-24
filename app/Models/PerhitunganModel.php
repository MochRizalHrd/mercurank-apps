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

    public function getOptimalisasiMatrix()
    {
        $normalized = $this->getNormalizedMatrix();

        // Ambil bobot dari tabel kriteria
        $db = \Config\Database::connect();
        $query = $db->query("SELECT * FROM kriteria");
        $kriteria = $query->getResultArray();

        $bobot = array_column($kriteria, 'bobot', 'kode');

        $optimalisasi = [];
        foreach ($normalized as $norm) {
            $optimalisasi[] = [
                'kode' => $norm['kode'],
                'k1' => $norm['ipk'] * $bobot['K1'],
                'k2' => $norm['masa_studi'] * $bobot['K2'],
                'k3' => $norm['keaktifan_organisasi'] * $bobot['K3'],
                'k4' => $norm['prestasi_akademik'] * $bobot['K4'],
                'k5' => $norm['prestasi_non_akademik'] * $bobot['K5'],
            ];
        }

        return $optimalisasi;
    }

    public function calculateYi()
    {
        $optimalisasi = $this->getOptimalisasiMatrix();

        $data = [];
        foreach ($optimalisasi as $row) {
            $max = $row['k1'] + $row['k2'] + $row['k3'] + $row['k4'] + $row['k5'];
            $min = 0; // Karena semua kategori Max
            $yi = $max - $min;

            $data[] = [
                'kode' => $row['kode'],
                'max' => $max,
                'min' => $min,
                'yi' => $yi,
            ];
        }

        return $data;
    }

    public function peringkat()
    {
        $optimalisasi = $this->getOptimalisasiMatrix();

        $data = [];
        foreach ($optimalisasi as $row) {

            $mahasiswa = $this->db->query("SELECT nim, nama_lengkap FROM mahasiswa WHERE kode = ?", [$row['kode']])->getRowArray();

            $nim = isset($mahasiswa['nim']) ? $mahasiswa['nim'] : null; // Ambil nim atau null jika tidak ada
            $nama_lengkap = isset($mahasiswa['nama_lengkap']) ? $mahasiswa['nama_lengkap'] : null; // Ambil nim atau null jika tidak ada

            $max = $row['k1'] + $row['k2'] + $row['k3'] + $row['k4'] + $row['k5'];
            $min = 0; // Karena semua kategori Max
            $yi = $max - $min;

            $data[] = [
                'kode' => $row['kode'],
                'nim' => $nim,
                'nama_lengkap' => $nama_lengkap,
                'yi' => $yi,
            ];
        }

        // Menambahkan peringkat berdasarkan nilai yi
        usort($data, function ($a, $b) {
            return $b['yi'] <=> $a['yi']; // Urutkan secara menurun berdasarkan Yi
        });

        // Menambahkan peringkat
        foreach ($data as $index => &$row) {
            $row['perankingan'] = $index + 1; // Peringkat dimulai dari 1
        }

        return $data;
    }

    public function savePerhitungan($data)
    {
        $db = \Config\Database::connect();
        $builder = $db->table('perhitungan_moora');

        // Hapus semua data sebelumnya (opsional, jika data lama tidak diperlukan)
        $builder->truncate();

        // Simpan data baru
        $builder->insertBatch($data);
    }

    public function getTopMahasiswa()
    {
        $builder = $this->db->table('perhitungan_moora');
        $builder->select('nim, nama_lengkap, hasil_akhir');
        $builder->orderBy('hasil_akhir', 'desc');
        $builder->limit(3);

        return $builder->get()->getResult();
    }
}
