<div class="card">
    <div class="card-header">
        <a href="<?= base_url('pengguna/create') ?>" class="btn btn-primary mb-3" style="background-color: #257180; color:#ffffff; border:none;">
            <i class="fas fa-plus"></i> Tambah Pengguna <!-- Ikon berada di kiri teks -->
        </a>
    </div>
    <!-- /.card-header -->


    <div class="card-body">
        <table id="example1" class="table table-bordered table-striped ">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nama</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($pengguna as $us) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $us['nama_lengkap']; ?></td>
                        <td><?= $us['username']; ?></td>
                        <td><?= $us['email']; ?></td>
                        <td><?= $us['role']; ?></td>
                        <td class="text-center">
                            <div class="btn-group">
                                <a href="<?= base_url('pengguna/edit/' . $us['id_pengguna']) ?>"
                                    class="btn btn-warning btn-sm d-flex align-items-center justify-content-center"
                                    style="width: 100px; height: 30px; color: #495057; font-weight:450;">
                                    <i class="fas fa-edit me-2"></i> Edit
                                </a>
                                <a href="<?= base_url('pengguna/delete/' . $us['id_pengguna']) ?>"
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