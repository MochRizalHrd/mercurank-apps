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
        // Panggil simpanKeLaporan untuk menyimpan data otomatis
        $this->simpanKeLaporan();

        $data = [
            'title' => 'Laporan dan Hasil',
            'laporan' => $this->laporanModel->getLaporan()
        ];

        echo view('admin/template/header', $data);
        echo view('admin/template/sidebar', $data);
        echo view('admin/view_laporan', $data);
        echo view('admin/template/footer');
    }

    public function unduhPdf()
    {
        $laporan = $this->laporanModel->getLaporan();
        $tanggalCetak = date('d-m-Y H:i:s'); // Format tanggal dan waktu

        // Inisialisasi TCPDF
        $pdf = new TCPDF();
        $pdf->AddPage();
        $pdf->SetFont('helvetica', '', 12);

        // Header PDF
        $pdf->Cell(0, 10, 'Laporan Hasil dan Riwayat Perhitungan MOORA', 0, 1, 'C');
        $pdf->SetFont('helvetica', '', 10);
        $pdf->Cell(0, 10, 'Tanggal Cetak: ' . $tanggalCetak, 0, 1, 'R'); // Tanggal di header
        $pdf->Ln(5);

        // Tabel PDF
        $html = '
        <table border="1" cellspacing="3" cellpadding="4">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Peringkat</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Nilai Akhir</th>
                </tr>
            </thead>
            <tbody>';

        $no = 1;
        foreach ($laporan as $row) {
            $html .= '
                <tr>
                    <td>' . $no++ . '</td>
                    <td>' . $row['peringkat'] . '</td>
                    <td>' . $row['nim'] . '</td>
                    <td>' . $row['nama_lengkap'] . '</td>
                    <td>' . $row['hasil_akhir'] . '</td>
                </tr>';
        }

        $html .= '</tbody></table>';

        $pdf->writeHTML($html, true, false, true, false, '');
        $pdf->Output('laporan_moora_' . date('Ymd_His') . '.pdf', 'D'); // Nama file dengan tanggal
    }

    public function simpanKeLaporan()
    {
        // Ambil data dari tabel perhitungan_moora
        $laporanData = $this->laporanModel->getLaporan();

        // Hapus data lama jika perlu untuk menghindari duplikasi
        $this->laporanModel->truncate(); // Hapus semua data lama di tabel laporan (opsional)

        // Looping untuk menyimpan setiap data ke tabel laporan
        foreach ($laporanData as $data) {
            $this->laporanModel->insert([
                'peringkat' => $data['peringkat'], // Sesuaikan dengan kolom yang ada di perhitungan_moora
                'nim' => $data['nim'],
                'nama_lengkap' => $data['nama_lengkap'],
                'hasil_akhir' => $data['hasil_akhir'],
            ]);
        }
    }
}
