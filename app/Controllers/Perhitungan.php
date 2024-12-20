<?php

namespace App\Controllers;

use App\Models\PerhitunganModel;

class Perhitungan extends BaseController
{
    public function ratingNilai()
    {
        $nilaiModel = new PerhitunganModel();

        $data = [
            'title' => 'Perhitungan MOORA',
            'mahasiswa' => $nilaiModel->get_user1(),
            'normalized' => $nilaiModel->getNormalizedMatrix(), // Data normalisasi
        ];

        echo view('admin/template/header', $data);
        echo view('admin/template/sidebar', $data);
        echo view('admin/view_perhitungan', $data);
        echo view('admin/template/footer');
    }
}
