<?php

namespace App\Controllers;

use App\Models\LaporanModel;
use TCPDF;

class Laporan extends BaseController
{
    protected $laporanModel;

    public function __construct()
    {
        $this->laporanModel = new LaporanModel();
    }

    public function index()

    {
        $laporanModel = new LaporanModel();

        $data = [
            'title' => 'Data Kriteria',

        ];

        $data['laporan'] = $this->laporanModel->getLaporan();


        echo view('admin/template/header', $data);
        echo view('admin/template/sidebar', $data);
        echo view('admin/view_laporan', $data);
        echo view('admin/template/footer');
    }

    public function unduhPdf()
    {
        $laporan = $this->laporanModel->getLaporan();

        // Inisialisasi TCPDF
        $pdf = new TCPDF();
        $pdf->AddPage();
        $pdf->SetFont('helvetica', '', 12);

        // Header
        $pdf->Cell(0, 10, 'Laporan Hasil dan Riwayat Perhitungan MOORA', 0, 1, 'C');
        $pdf->Ln(5);

        // Tabel
        $html = '
        <table border="1" cellspacing="3" cellpadding="4">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama Mahasiswa</th>
                    <th>NIM</th>
                    <th>Skor Akhir</th>
                    <th>Ranking</th>
                </tr>
            </thead>
            <tbody>';

        $no = 1;
        foreach ($laporan as $row) {
            $html .= '
                <tr>
                    <td>' . $no++ . '</td>
                    <td>' . $row['nama_lengkap'] . '</td>
                    <td>' . $row['nim'] . '</td>
                    <td>' . $row['nilai_perhitungan'] . '</td>
                    <td>' . $row['peringkat'] . '</td>
                </tr>';
        }

        $html .= '</tbody></table>';

        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Output('laporan_moora.pdf', 'D'); // File akan otomatis terunduh
    }
}
