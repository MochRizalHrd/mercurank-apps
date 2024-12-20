<div class="back-section mb-3">
    <a href="<?= base_url('pengguna') ?>" class="btn btn-secondary" style="background-color: #257180; color:#ffffff;">
        <i class=" fas fa-arrow-left"></i> Kembali
    </a>
</div>

<div class="card">
    <div class="card-header">
        <h3>Edit Pengguna</h3>
    </div>
    <div class="card-body">
        <form action="<?= base_url('pengguna/update/' . $pengguna['id_pengguna']) ?>" method="post">
            <?= csrf_field() ?>

            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= old('nama_lengkap', $pengguna['nama_lengkap']) ?>" required>
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= old('username', $pengguna['username']) ?>" required>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= old('email', $pengguna['email']) ?>" required>
            </div>

            <div class="form-group">
                <label for="role">Role</label>
                <input type="text" class="form-control" id="role" name="role" value="<?= old('role', $pengguna['role']) ?>" required>
            </div>

            <button type="submit" class="btn btn-warning" style="background-color: #257180; color:#ffffff; border:none;">Update</button>
        </form>
    </div>
</div>