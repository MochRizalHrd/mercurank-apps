<div class="back-section mb-3">
    <a href="<?= base_url('mahasiswa') ?>" class="btn btn-secondary" style="background-color: #257180; color:#ffffff; border:none;">
        <i class=" fas fa-arrow-left"></i> Kembali
    </a>
</div>

<div class="card">
    <div class="card-header">
        <h3>Edit Mahasiswa</h3>
    </div>
    <div class="card-body">
        <form action="<?= base_url('mahasiswa/update/' . $mahasiswa['id_mahasiswa']) ?>" method="post">
            <?= csrf_field() ?>

            <div class="form-group">
                <label for="kode">Kode</label>
                <input type="text" class="form-control" id="kode" name="kode" value="<?= old('kode', $mahasiswa['kode']) ?>" required>
            </div>

            <div class="form-group">
                <label for="nim">NIM</label>
                <input type="number" class="form-control" id="nim" name="nim" value="<?= old('nim', $mahasiswa['nim']) ?>" required>
            </div>

            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" value="<?= old('nama_lengkap', $mahasiswa['nama_lengkap']) ?>" required>
            </div>

            <div class="form-group">
                <label for="prodi">Prodi</label>
                <input type="text" class="form-control" id="prodi" name="prodi" value="<?= old('prodi', $mahasiswa['prodi']) ?>" required>
            </div>

            <div class="form-group">
                <label for="ipk">IPK</label>
                <input type="decimal" class="form-control" id="ipk" name="ipk" value="<?= old('ipk', $mahasiswa['ipk']) ?>" required>
            </div>

            <div class="form-group">
                <label for="masa_studi">Masa Studi</label>
                <input type="decimal" class="form-control" id="masa_studi" name="masa_studi" value="<?= old('masa_studi', $mahasiswa['masa_studi']) ?>" required>
            </div>

            <div class="form-group">
                <label for="keaktifan_organisasi">Keaktifan Organisasi</label>
                <input type="number" class="form-control" id="keaktifan_organisasi" name="keaktifan_organisasi" value="<?= old('keaktifan_organisasi', $mahasiswa['keaktifan_organisasi']) ?>" required>
            </div>

            <div class="form-group">
                <label for="prestasi_akademik">Prestasi Akademik</label>
                <input type="number" class="form-control" id="prestasi_akademik" name="prestasi_akademik" value="<?= old('prestasi_akademik', $mahasiswa['prestasi_akademik']) ?>" required>
            </div>

            <div class="form-group">
                <label for="prestasi_non_akademik">Prestasi Non Akademik</label>
                <input type="number" class="form-control" id="prestasi_non_akademik" name="prestasi_non_akademik" value="<?= old('prestasi_non_akademik', $mahasiswa['prestasi_non_akademik']) ?>" required>
            </div>

            <button type="submit" class="btn btn-warning" style="background-color: #257180; color:#ffffff; border:none;">Update</button>
        </form>
    </div>
</div>