<div class="card">
    <div class="card-header">
        <a href="<?= base_url('mahasiswa/create') ?>" class="btn btn-primary mb-3" style="background-color: #257180; color:#ffffff; border:none;">
            <i class="fas fa-plus"></i> Tambah Mahasiswa <!-- Ikon berada di kiri teks -->
        </a>
    </div>
    <!-- /.card-header -->


    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped ">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Kode</th>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Prodi</th>
                    <th>IPK</th>
                    <th>Masa Studi</th>
                    <th>Keaktifan Organisasi</th>
                    <th>Prestasi Akademik</th>
                    <th>Prestasi Non Akademik</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($mahasiswa as $mhs) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $mhs['kode']; ?></td>
                        <td><?= $mhs['nim']; ?></td>
                        <td><?= $mhs['nama_lengkap']; ?></td>
                        <td><?= $mhs['prodi']; ?></td>
                        <td><?= $mhs['ipk']; ?></td>
                        <td><?= $mhs['masa_studi']; ?></td>
                        <td><?= $mhs['keaktifan_organisasi']; ?></td>
                        <td><?= $mhs['prestasi_akademik']; ?></td>
                        <td><?= $mhs['prestasi_non_akademik']; ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="<?= base_url('mahasiswa/edit/' . $mhs['id_mahasiswa']) ?>"
                                    class="btn btn-warning btn-sm d-flex align-items-center justify-content-center"
                                    style="width: 100px; height: 30px; color: #495057; font-weight:450;">
                                    <i class="fas fa-edit me-2"></i> Edit
                                </a>
                                <a href="<?= base_url('mahasiswa/delete/' . $mhs['id_mahasiswa']) ?>"
                                    class="btn btn-danger btn-sm d-flex align-items-center justify-content-center"
                                    style="width: 100px; height: 30px;  color: #ffffff; font-weight:450;">
                                    <i class="fas fa-trash-alt me-2" style="color: #ffffff;"></i> Hapus
                                </a>
                            </div>
                        </td>



                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <!-- /.card-body -->
</div>
<!-- /.card -->