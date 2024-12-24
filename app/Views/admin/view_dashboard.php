<div class="content">
    <div class="container-fluid">
        <div class="welcome-message">
            <h2>Selamat datang kembali, <strong><?= esc($admin_name) ?></strong></h2>

        </div>
        <div class="row">
            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box" style="background-color: #257180; color:#fff;">
                    <div class="inner">
                        <h3><?= $total_mahasiswa ?></h3>
                        <p>Total Mahasiswa</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <a href="<?= base_url('mahasiswa') ?>" class="small-box-footer" style="color: #fff;">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box" style="background-color: #257180; color:#fff;">
                    <div class="inner">
                        <h3><?= $total_kriteria ?></h3>
                        <p>Total Kriteria</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-list-alt"></i>
                    </div>
                    <a href="<?= base_url('kriteria') ?>" class="small-box-footer" style="color: #fff;">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box" style="background-color: #257180; color:#fff;">
                    <div class="inner">
                        <h3><?= $total_pengguna ?></h3>
                        <p>Total Pengguna</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-user"></i>
                    </div>
                    <a href="<?= base_url('pengguna') ?>" class="small-box-footer" style="color: #fff;">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-3 col-6">
                <!-- small box -->
                <div class="small-box " style="background-color: #257180; color:#fff; ">
                    <div class="inner">
                        <h3><?= $total_perhitungan ?></h3>
                        <p>Total Perhitungan Moora</p>
                    </div>
                    <div class="icon">
                        <i class=" nav-icon fas fa-calculator"></i>
                    </div>
                    <a href="<?= base_url('perhitungan') ?>" class="small-box-footer" style="color: #fff;">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!-- ./col -->

            <div class="col-lg-12 col-6">
                <!-- Small box for Top 3 Mahasiswa -->
                <div class="small-box top-mahasiswa" style="background-color: #fff; padding: 15px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); position: relative; min-height: 300px;">

                    <!-- Gambar logo dengan transparansi -->
                    <div class="logo-background" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-image: url('<?= base_url('assets/img/logo-umby-tab.png') ?>'); background-size: contain; background-position: center; background-repeat: no-repeat; opacity: 0.1;"></div>

                    <div class="inner">
                        <h3 class="text-center font-weight-bold mb-2" style="color: #257180; font-size: 18px;">Top 3 Mahasiswa</h3>
                        <!-- Elemen Canvas untuk Chart.js -->
                        <canvas id="topMahasiswaChart" width="300" height="120"></canvas> <!-- Ukuran canvas diperbesar -->
                    </div>

                    <a href="<?= base_url('perhitungan') ?>" class="small-box-footer" style="color: #fff; background-color: #257180; text-decoration: none; border-top: 1px solid #ddd; padding-top: 8px; display: block; text-align: center; font-weight: bold;">
                        More info <i class="fas fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-lg-6 col-md-8 col-sm-12 mt-4 mx-auto">
                <!-- Statistik Tambahan -->
                <div class="statistik-box" style="background-color: #f9f9f9; padding: 15px; border-radius: 10px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1); position: relative;">
                    <div class="inner">
                        <h4 class="text-center font-weight-bold mb-3" style="color: #257180;">Distribusi Peringkat Mahasiswa</h4>
                        <!-- Elemen Canvas untuk Grafik Pie Chart -->
                        <canvas id="distributionChart" width="300" height="150"></canvas>
                    </div>
                </div>
            </div>



            <style>
                /* Efek bayangan untuk box */
                .small-box {
                    background: #fff;
                    padding: 15px;
                    border-radius: 10px;
                    box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1), 0 4px 6px rgba(0, 0, 0, 0.1);
                    position: relative;
                }

                /* Khusus untuk Top 3 Mahasiswa: Membatasi tinggi box */
                .top-mahasiswa {
                    min-height: 300px;
                }

                .small-box .inner {
                    position: relative;
                }

                .small-box-footer {
                    background-color: #fff;
                    color: #000;
                    text-decoration: none;
                    padding: 8px;
                    text-align: center;
                    font-weight: bold;
                    transition: background-color 0.3s ease;
                }

                .small-box-footer:hover {
                    background-color: #f8f9fa;
                }

                /* Styling untuk elemen logo dengan transparansi */
                .logo-background {
                    position: absolute;
                    top: 0;
                    left: 0;
                    width: 100%;
                    height: 100%;
                    background-image: url('<?= base_url('assets/img/logo-umby-tab.png') ?>');
                    background-size: contain;
                    background-position: center;
                    background-repeat: no-repeat;
                    opacity: 0.1;
                }

                /* Grafik Canvas styling */
                canvas {
                    width: 100% !important;
                    height: auto !important;
                    max-width: 600px;
                    margin: 0 auto;
                }


                /* Styling khusus untuk box statistik tambahan */
                .statistik-box {
                    max-width: 600px;
                    /* Membatasi lebar box */
                    margin: 0 auto;
                    /* Memusatkan box */
                    padding: 15px;
                    /* Mengurangi padding agar lebih ringkas */
                    border-radius: 10px;
                    box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
                    background-color: #f9f9f9;
                }

                .statistik-box .inner {
                    text-align: center;
                }

                .statistik-box h4 {
                    font-size: 16px;
                    /* Ukuran teks lebih proporsional */
                    margin-bottom: 10px;
                }

                .statistik-box canvas {
                    max-width: 100%;
                    /* Grafik mengikuti ukuran box */
                    height: auto;
                    margin: 0 auto;
                }
            </style>


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

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Ambil data dari PHP (pastikan data PHP telah diproses dalam format yang dapat digunakan oleh JavaScript)
    var mahasiswaNames = <?= json_encode(array_column($top_mahasiswa, 'nama_lengkap')); ?>;
    var mahasiswaScores = <?= json_encode(array_column($top_mahasiswa, 'hasil_akhir')); ?>;

    // Menambahkan peringkat di atas grafik untuk Top 3 Mahasiswa
    var top3Text = mahasiswaNames.map((name, index) => {
        if (index === 0) return "1st: " + name + " (" + mahasiswaScores[index] + ")";
        if (index === 1) return "2nd: " + name + " (" + mahasiswaScores[index] + ")";
        if (index === 2) return "3rd: " + name + " (" + mahasiswaScores[index] + ")";
        return name + " (" + mahasiswaScores[index] + ")";
    });

    // Grafik Chart.js
    var ctx = document.getElementById('topMahasiswaChart').getContext('2d');
    var topMahasiswaChart = new Chart(ctx, {
        type: 'bar', // Jenis grafik bar
        data: {
            labels: top3Text, // Menambahkan teks peringkat
            datasets: [{
                label: 'Hasil Akhir', // Label untuk grafik
                data: mahasiswaScores, // Nilai hasil akhir mahasiswa
                backgroundColor: '#257180', // Warna latar belakang batang grafik
                borderColor: '#FFD700', // Warna border batang grafik
                borderWidth: 1 // Lebar border grafik
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    ticks: {
                        precision: 0, // Membulatkan angka di sumbu Y
                    }
                },
                x: {
                    title: {
                        display: true,
                        text: 'Peringkat Mahasiswa',
                        font: {
                            size: 14
                        }
                    }
                }
            },
            plugins: {
                legend: {
                    display: false, // Menyembunyikan legend agar lebih rapi
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return 'Hasil Akhir: ' + tooltipItem.raw; // Menampilkan label lebih informatif
                        }
                    }
                }
            }
        }
    });

    // Data untuk Pie Chart
    var ctxPie = document.getElementById('distributionChart').getContext('2d');
    var distributionChart = new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: ['Peringkat 1-3', 'Peringkat 4-10', 'Lainnya'], // Label kategori
            datasets: [{
                data: [15, 25, 60], // Contoh data, sesuaikan dengan data Anda
                backgroundColor: ['#257180', '#FFD700', '#D3D3D3'], // Warna-warna
                hoverOffset: 4
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'bottom', // Letak legenda
                },
                tooltip: {
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.label + ': ' + tooltipItem.raw + '%'; // Menampilkan persentase
                        }
                    }
                }
            }
        }
    });
</script>