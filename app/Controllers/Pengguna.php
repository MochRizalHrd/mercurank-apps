<?php

namespace App\Controllers;

use App\Models\PenggunaModel;


class Pengguna extends BaseController
{
    public function index()
    {
        $userModel = new PenggunaModel();

        $data = [
            'title' => 'Pengguna',
            'pengguna' => $userModel->get_user()
        ];

        echo view('admin/template/header', $data);
        echo view('admin/template/sidebar', $data);
        echo view('admin/view_pengguna', $data);
        echo view('admin/template/footer');
    }

    // Fungsi untuk Menampilkan Form Tambah Pengguna
    public function create()
    {
        $userModel = new PenggunaModel();

        $data = [
            'title' => 'Pengguna',
            'pengguna' => $userModel->get_user()
        ];

        echo view('admin/template/header', $data);
        echo view('admin/template/sidebar', $data);
        echo view('admin/tambah_pengguna');
        echo view('admin/template/footer');
    }

    // Fungsi untuk Menyimpan Data Pengguna yang Baru
    public function store()
    {
        $model = new PenggunaModel();


        $data = [
            'nama_lengkap' => $this->request->getPost('nama_lengkap'),
            'username'     => $this->request->getPost('username'),
            'email'        => $this->request->getPost('email'),
            'password'     => password_hash($this->request->getPost('password'), PASSWORD_DEFAULT),
            'role'         => $this->request->getPost('role'),
        ];

        $model->save($data);
        return redirect()->to('/pengguna')->with('success', 'Data pengguna berhasil ditambahkan.');
    }


    // Fungsi untuk Menampilkan Form Edit Pengguna
    public function edit($id_pengguna)
    {
        $userModel = new PenggunaModel();

        $data = [
            'title' => 'Pengguna',
            'pengguna' => $userModel->get_user()
        ];

        $model = new PenggunaModel();
        $data['pengguna'] = $model->find($id_pengguna);

        echo view('admin/template/header', $data);
        echo view('admin/template/sidebar', $data);
        echo view('admin/edit_pengguna', $data);
        echo view('admin/template/footer');
    }

    // Fungsi untuk Memperbarui Data Pengguna
    public function update($id_pengguna)
    {
        $model = new PenggunaModel();

        // Validasi Input
        if ($this->validate([
            'nama_lengkap' => 'required|min_length[3]',
            'username'     => 'required|min_length[3]|is_unique[pengguna.username,id_pengguna,' . $id_pengguna . ']',
            'email'        => 'required|valid_email|is_unique[pengguna.email,id_pengguna,' . $id_pengguna . ']',
            'role'          => 'required',
        ])) {
            $data = [
                'id_pengguna'  => $id_pengguna,
                'nama_lengkap' => $this->request->getPost('nama_lengkap'),
                'username'     => $this->request->getPost('username'),
                'email'        => $this->request->getPost('email'),
                'role'          => $this->request->getPost('role'),
            ];

            // Update data pengguna
            $model->save($data);
            return redirect()->to('/pengguna');
        } else {
            $data['pengguna'] = $this->request->getPost();
            echo view('admin/template/header');
            echo view('admin/template/sidebar');
            echo view('admin/edit_pengguna', ['validation' => $this->validator] + $data);
            echo view('admin/template/footer');
        }
    }

    // Fungsi untuk Menghapus Pengguna
    public function delete($id_pengguna)
    {
        $model = new PenggunaModel();
        $model->delete($id_pengguna);

        return redirect()->to('/pengguna');
    }
}
