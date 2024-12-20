<div class="back-section mb-3">
    <a href="<?= base_url('mahasiswa') ?>" class="btn btn-secondary" style="background-color: #257180; color:#ffffff; border:none;">
        <i class=" fas fa-arrow-left"></i> Kembali
    </a>
</div>
<div class="card">
    <div class="card-header">
        <h3>Tambah Mahasiswa</h3>
    </div>
    <div class="card-body">
        <form action="<?= base_url('mahasiswa/store') ?>" method="post">
            <?= csrf_field() ?>

            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" class="form-control" id="kode" name="kode" value="<?= old('kode') ?>" required>
                <?php if (isset($validation)) : ?>
                    <div class="invalid-feedback"><?= $validation->getError('kode'); ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="number" class="form-control" id="nim" name="nim" value="<?= old('nim') ?>" required>
                <?php if (isset($validation)) : ?>
                    <div class="invalid-feedback"><?= $validation->getError('nim'); ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= old('nama_lengkap') ?>" required>
                <?php if (isset($validation)) : ?>
                    <div class="invalid-feedback"><?= $validation->getError('nama_lengkap'); ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="prodi">Prodi</label>
                <input type="text" class="form-control" id="prodi" name="prodi" value="<?= old('prodi') ?>" required>
                <?php if (isset($validation)) : ?>
                    <div class="invalid-feedback"><?= $validation->getError('prodi'); ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="ipk">IPK</label>
                <input type="decimal" class="form-control" id="ipk" name="ipk" value="<?= old('ipk') ?>" required>
                <?php if (isset($validation)) : ?>
                    <div class="invalid-feedback"><?= $validation->getError('ipk'); ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="masa_studi">Masa Studi</label>
                <input type="decimal" class="form-control" id="masa_studi" name="masa_studi" value="<?= old('masa_studi') ?>" required>
                <?php if (isset($validation)) : ?>
                    <div class="invalid-feedback"><?= $validation->getError('masa_studi'); ?></div>
                <?php endif; ?>
            </div>
            <div class="form-group">
                <label for="keaktifan_organisasi">Keaktifan Organisasi</label>
                <input type="number" class="form-control" id="keaktifan_organisasi" name="keaktifan_organisasi" value="<?= old('keaktifan_organisasi') ?>" required>
                <?php if (isset($validation)) : ?>
                    <div class="invalid-feedback"><?= $validation->getError('keaktifan_organisasi'); ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="prestasi_akademik">Prestasi Akademik</label>
                <input type="number" class="form-control" id="prestasi_akademik" name="prestasi_akademik" value="<?= old('prestasi_akademik') ?>" required>
                <?php if (isset($validation)) : ?>
                    <div class="invalid-feedback"><?= $validation->getError('prestasi_akademik'); ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="prestasi_non_akademik">Prestasi Non Akademik</label>
                <input type="number" class="form-control" id="prestasi_non_akademik" name="prestasi_non_akademik" value="<?= old('prestasi_non_akademik') ?>" required>
                <?php if (isset($validation)) : ?>
                    <div class="invalid-feedback"><?= $validation->getError('prestasi_non_akademik'); ?></div>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary" style="background-color: #257180; color:#ffffff; border:none;">Simpan</button>
        </form>
    </div>
</div>