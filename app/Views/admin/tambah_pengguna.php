<div class="back-section mb-3">
    <a href="<?= base_url('pengguna') ?>" class="btn btn-secondary" style="background-color: #257180; color:#ffffff;">
        <i class=" fas fa-arrow-left"></i> Kembali
    </a>
</div>
<div class="card">
    <div class="card-header">
        <h3>Tambah Pengguna</h3>
    </div>
    <div class="card-body">
        <form action="<?= base_url('pengguna/store') ?>" method="post">
            <?= csrf_field() ?>

            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= old('nama_lengkap') ?>" required>
                <?php if (isset($validation)) : ?>
                    <div class="invalid-feedback"><?= $validation->getError('nama_lengkap'); ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" value="<?= old('username') ?>" required>
                <?php if (isset($validation)) : ?>
                    <div class="invalid-feedback"><?= $validation->getError('username'); ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= old('email') ?>" required>
                <?php if (isset($validation)) : ?>
                    <div class="invalid-feedback"><?= $validation->getError('email'); ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
                <?php if (isset($validation)) : ?>
                    <div class="invalid-feedback"><?= $validation->getError('password'); ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="role">Role</label>
                <input type="text" class="form-control" id="role" name="role" value="<?= old('role') ?>" required>
            </div>

            <button type="submit" class="btn btn-primary" style="background-color: #257180; color:#ffffff; border:none;">Simpan</button>
        </form>
    </div>
</div>