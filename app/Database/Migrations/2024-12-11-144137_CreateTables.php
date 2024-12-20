<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class CreateTables extends Migration
{
    public function up()
    {
        // Tabel Pengguna
        $this->forge->addField([
            'id_pengguna' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'username' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' => true,
            ],
            'email' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
                'unique' => true,
            ],
            'password' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'role' => [
                'type' => 'ENUM',
                'constraint' => ['super_admin', 'admin'],
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id_pengguna');
        $this->forge->createTable('pengguna');

        // Tabel Mahasiswa
        $this->forge->addField([
            'id_mahasiswa' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'kode' => [
                'type'           => 'VARCHAR',
                'constraint'     => '11',
            ],
            'nim' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'unique' => true,
            ],
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'prodi' => [
                'type' => 'VARCHAR',
                'constraint' => '100',
            ],
            'ipk' => [
                'type' => 'DECIMAL',
                'constraint' => '3,2',
            ],
            'masa_studi' => [
                'type' => 'DECIMAL',
                'constraint' => '3,1',
            ],
            'keaktifan_organisasi' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'prestasi_akademik' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'prestasi_non_akademik' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id_mahasiswa');
        $this->forge->createTable('mahasiswa');

        // Tabel Kriteria
        $this->forge->addField([
            'id_kriteria' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'kode' => [
                'type'           => 'VARCHAR',
                'constraint'     => '11',
            ],
            'nama_kriteria' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'bobot' => [
                'type' => 'DECIMAL',
                'constraint' => '5,2',
            ],
            'sifat' => [
                'type' => 'ENUM',
                'constraint' => ['Benefit', 'Cost'],
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id_kriteria');
        $this->forge->createTable('kriteria');

        // Tabel Perhitungan MOORA
        $this->forge->addField([
            'id_perhitungan' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'id_mahasiswa' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'nim' => [
                'type' => 'VARCHAR',
                'constraint' => '20',
                'unique' => true,
            ],
            'nama_lengkap' => [
                'type' => 'VARCHAR',
                'constraint' => '255',
            ],
            'nilai_perhitungan' => [
                'type' => 'DECIMAL',
                'constraint' => '5,2',
            ],
            'peringkat' => [
                'type' => 'INT',
                'constraint' => 11,
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id_perhitungan');
        $this->forge->addForeignKey('id_mahasiswa', 'mahasiswa', 'id_mahasiswa');
        $this->forge->createTable('perhitungan_moora');

        // Tabel Laporan
        $this->forge->addField([
            'id_laporan' => [
                'type'           => 'INT',
                'constraint'     => 11,
                'auto_increment' => true,
            ],
            'laporan' => [
                'type' => 'TEXT',
            ],
            'tanggal' => [
                'type' => 'DATETIME',
            ],
            'created_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
            'updated_at' => [
                'type' => 'DATETIME',
                'null' => true,
            ],
        ]);
        $this->forge->addPrimaryKey('id_laporan');
        $this->forge->createTable('laporan');
    }

    public function down()
    {
        // Drop tables if rollback is required
        $this->forge->dropTable('pengguna');
        $this->forge->dropTable('mahasiswa');
        $this->forge->dropTable('kriteria');
        $this->forge->dropTable('perhitungan_moora');
        $this->forge->dropTable('laporan');
    }
}
