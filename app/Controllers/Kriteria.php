<?php

namespace App\Controllers;

use App\Models\KriteriaModel;


class Kriteria extends BaseController
{
    public function index()
    {
        $kriteriaModel = new KriteriaModel();

        $data = [
            'title' => 'Data Kriteria',
            'kriteria' => $kriteriaModel->get_user()
        ];

        echo view('admin/template/header', $data);
        echo view('admin/template/sidebar', $data);
        echo view('admin/view_kriteria', $data);
        echo view('admin/template/footer');
    }

    // Fungsi untuk Menampilkan Form Tambah Kriteria
    public function create()
    {
        $kriteriaModel = new KriteriaModel();

        $data = [
            'title' => 'Data Kriteria',
            'kriteria' => $kriteriaModel->get_user()
        ];

        echo view('admin/template/header', $data);
        echo view('admin/template/sidebar', $data);
        echo view('admin/tambah_kriteria');
        echo view('admin/template/footer');
    }

    // Fungsi untuk Menyimpan Data Kriteria yang Baru
    public function store()
    {
        $kriteria = new KriteriaModel();


        $data = [
            'kode'                      => $this->request->getPost('kode'),
            'nama_kriteria'             => $this->request->getPost('nama_kriteria'),
            'bobot'                     => $this->request->getPost('bobot'),
            'sifat'                     => $this->request->getPost('sifat'),
        ];

        $kriteria->save($data);
        return redirect()->to('/kriteria')->with('success', 'Data kriteria berhasil ditambahkan.');
    }


    // Fungsi untuk Menampilkan Form Edit Kriteria
    public function edit($id_kriteria)
    {
        $kriteriaModel = new KriteriaModel();

        $data = [
            'title' => 'Data Kriteria',
            'kriteria' => $kriteriaModel->get_user()
        ];

        $kriteriaModel = new KriteriaModel();
        $data['kriteria'] = $kriteriaModel->find($id_kriteria);

        echo view('admin/template/header', $data);
        echo view('admin/template/sidebar', $data);
        echo view('admin/edit_kriteria', $data);
        echo view('admin/template/footer');
    }

    // Fungsi untuk Memperbarui Data Kriteria
    public function update($id_kriteria)
    {
        $kriteriaModel = new KriteriaModel();


        $data = [
            'id_kriteria'               => $id_kriteria,
            'kode'                      => $this->request->getPost('kode'),
            'nama_kriteria'             => $this->request->getPost('nama_kriteria'),
            'bobot'                     => $this->request->getPost('bobot'),
            'sifat'                     => $this->request->getPost('sifat'),
        ];

        // Update data kriteria
        $kriteriaModel->save($data);
        return redirect()->to('/kriteria');
    }

    // Fungsi untuk Menghapus Kriteria
    public function delete($id_kriteria)
    {
        $kriteriaModel = new KriteriaModel();
        $kriteriaModel->delete($id_kriteria);

        return redirect()->to('/kriteria');
    }
}
