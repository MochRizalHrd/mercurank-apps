<?php

namespace App\Controllers;

use App\Models\MahasiswaModel;


class Mahasiswa extends BaseController
{
    public function index()
    {
        $mahasiswaModel = new MahasiswaModel();

        $data = [
            'title' => 'Data Mahasiswa',
            'mahasiswa' => $mahasiswaModel->get_user()
        ];

        echo view('admin/template/header', $data);
        echo view('admin/template/sidebar', $data);
        echo view('admin/view_mahasiswa', $data);
        echo view('admin/template/footer');
    }

    // Fungsi untuk Menampilkan Form Tambah Mahasiswa
    public function create()
    {
        $mahasiswaModel = new MahasiswaModel();

        $data = [
            'title' => 'Data Mahasiswa',
            'mahasiswa' => $mahasiswaModel->get_user()
        ];

        echo view('admin/template/header', $data);
        echo view('admin/template/sidebar', $data);
        echo view('admin/tambah_mahasiswa');
        echo view('admin/template/footer');
    }

    // Fungsi untuk Menyimpan Data Mahasiswa yang Baru
    public function store()
    {
        $mahasiswa = new MahasiswaModel();


        $data = [
            'kode'                      => $this->request->getPost('kode'),
            'nim'                       => $this->request->getPost('nim'),
            'nama_lengkap'              => $this->request->getPost('nama_lengkap'),
            'prodi'                     => $this->request->getPost('prodi'),
            'ipk'                       => $this->request->getPost('ipk'),
            'masa_studi'                => $this->request->getPost('masa_studi'),
            'keaktifan_organisasi'      => $this->request->getPost('keaktifan_organisasi'),
            'prestasi_akademik'         => $this->request->getPost('prestasi_akademik'),
            'prestasi_non_akademik'     => $this->request->getPost('prestasi_non_akademik'),

        ];

        $mahasiswa->save($data);
        return redirect()->to('/mahasiswa')->with('success', 'Data pengguna berhasil ditambahkan.');
    }


    // Fungsi untuk Menampilkan Form Edit Mahasiswa
    public function edit($id_mahasiswa)
    {
        $mahasiswaModel = new MahasiswaModel();

        $data = [
            'title' => 'Data Mahasiswa',
            'mahasiswa' => $mahasiswaModel->get_user()
        ];

        $mahasiswaModel = new MahasiswaModel();
        $data['mahasiswa'] = $mahasiswaModel->find($id_mahasiswa);

        echo view('admin/template/header', $data);
        echo view('admin/template/sidebar', $data);
        echo view('admin/edit_mahasiswa', $data);
        echo view('admin/template/footer');
    }

    // Fungsi untuk Memperbarui Data Mahasiswa
    public function update($id_mahasiswa)
    {
        $mahasiswaModel = new MahasiswaModel();


        $data = [
            'id_mahasiswa'              => $id_mahasiswa,
            'kode'                      => $this->request->getPost('kode'),
            'nim'                       => $this->request->getPost('nim'),
            'nama_lengkap'              => $this->request->getPost('nama_lengkap'),
            'prodi'                     => $this->request->getPost('prodi'),
            'ipk'                       => $this->request->getPost('ipk'),
            'masa_studi'                => $this->request->getPost('masa_studi'),
            'keaktifan_organisasi'      => $this->request->getPost('keaktifan_organisasi'),
            'prestasi_akademik'         => $this->request->getPost('prestasi_akademik'),
            'prestasi_non_akademik'     => $this->request->getPost('prestasi_non_akademik'),

        ];

        // Update Data Mahasiswa
        $mahasiswaModel->save($data);
        return redirect()->to('/mahasiswa');
    }

    // Fungsi untuk Menghapus Mahasiswa
    public function delete($id_mahasiswa)
    {
        $mahasiswaModel = new MahasiswaModel();
        $mahasiswaModel->delete($id_mahasiswa);

        return redirect()->to('/mahasiswa');
    }
}
