<?php

namespace App\Controllers;

use App\Models\PerhitunganModel;

class Perhitungan extends BaseController
{
    protected $perhitunganModel;

    public function __construct()
    {
        $this->perhitunganModel = new PerhitunganModel(); // Inisialisasi model
    }

    public function ratingNilai()
    {
        // Ambil data dari model
        $mahasiswa = $this->perhitunganModel->get_user1(); // Data mahasiswa
        $normalizedMatrix = $this->perhitunganModel->getNormalizedMatrix(); // Matriks normalisasi
        $optimalisasiMatrix = $this->perhitunganModel->getOptimalisasiMatrix(); // Matriks optimalisasi
        $perhitunganAkhir = $this->perhitunganModel->calculateYi(); // Perhitungan akhir (Yi)
        $peringkat = $this->perhitunganModel->peringkat();

        // Menambahkan peringkat pada perhitungan akhir
        // Urutkan berdasarkan nilai Yi
        usort($peringkat, function ($a, $b) {
            return $b['yi'] <=> $a['yi']; // Urutkan secara menurun berdasarkan Yi
        });

        // Menambahkan peringkat ke dalam data
        foreach ($peringkat as $index => &$row) {
            $row['perankingan'] = $index + 1; // Menambahkan peringkat
        }



        // Data yang akan dikirim ke view
        $data = [
            'title' => 'Perhitungan MOORA',
            'mahasiswa' => $mahasiswa,
            'normalized' => $normalizedMatrix,
            'optimalisasi' => $optimalisasiMatrix,
            'perhitungan_akhir' => $perhitunganAkhir, // Hasil perhitungan Yi
            'perankingan' => $peringkat,

        ];

        // Menyusun tampilan
        echo view('admin/template/header', $data);
        echo view('admin/template/sidebar', $data);
        echo view('admin/view_perhitungan', $data);
        echo view('admin/template/footer');
    }
}
