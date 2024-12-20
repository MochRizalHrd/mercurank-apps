<div class="content">
    <div class="container-fluid">
        <div class="welcome-message">
            <h2>Selamat datang kembali, <strong><?= esc($admin_name) ?></strong></h2>

        </div>
        <div class="row">
            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3><?= $total_mahasiswa ?></h3>
                        <p>Total Mahasiswa</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="<?= base_url('mahasiswa') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-success">
                    <div class="inner">
                        <h3><?= $total_kriteria ?></h3>
                        <p>Total Kriteria</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-list-alt"></i>
                    </div>
                    <a href="<?= base_url('kriteria') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-4 col-6">
                <!-- small box -->
                <div class="small-box bg-warning">
                    <div class="inner">
                        <h3><?= $total_pengguna ?></h3>
                        <p>Total Pengguna</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <a href="<?= base_url('pengguna') ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>

<style>
    .welcome-message {
        background-color: #fff;
        /* Warna latar belakang */
        border-radius: 8px;
        /* Sudut membulat */
        padding: 20px;
        /* Ruang dalam */
        margin-bottom: 20px;
        /* Jarak bawah */
        text-align: left;
        /* Pindahkan teks ke kiri */
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        /* Bayangan */
    }

    .welcome-message h2 {
        font-size: 16px;
        /* Ukuran font untuk judul */
        margin: 0;
        /* Menghapus margin */
        color: #257180;
        /* Warna teks untuk judul */
    }
</style>