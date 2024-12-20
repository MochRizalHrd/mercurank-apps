<div class="back-section mb-3">
    <a href="<?= base_url('kriteria') ?>" class="btn btn-secondary" style="background-color: #257180; color:#ffffff;">
        <i class=" fas fa-arrow-left"></i> Kembali
    </a>
</div>
<div class="card">
    <div class="card-header">
        <h3>Tambah Kriteria</h3>
    </div>
    <div class="card-body">
        <form action="<?= base_url('kriteria/store') ?>" method="post">
            <?= csrf_field() ?>

            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" class="form-control" id="kode" name="kode" value="<?= old('kode') ?>" required>
                <?php if (isset($validation)) : ?>
                    <div class="invalid-feedback"><?= $validation->getError('kode'); ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="nama_kriteria">Nama Kriteria</label>
                <input type="text" class="form-control" id="nama_kriteria" name="nama_kriteria" value="<?= old('nama_kriteria') ?>" required>
                <?php if (isset($validation)) : ?>
                    <div class="invalid-feedback"><?= $validation->getError('nama_kriteria'); ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="bobot">Bobot</label>
                <input type="decimal" class="form-control" id="bobot" name="bobot" value="<?= old('bobot') ?>" required>
                <?php if (isset($validation)) : ?>
                    <div class="invalid-feedback"><?= $validation->getError('bobot'); ?></div>
                <?php endif; ?>
            </div>

            <div class="form-group">
                <label for="sifat">Sifat</label>
                <input type="text" class="form-control" id="sifat" name="sifat" value="<?= old('sifat') ?>" required>
                <?php if (isset($validation)) : ?>
                    <div class="invalid-feedback"><?= $validation->getError('sifat'); ?></div>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary" style="background-color: #257180; color:#ffffff; border:none;">Simpan</button>
        </form>
    </div>
</div>