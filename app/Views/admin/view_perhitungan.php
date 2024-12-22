<!-- Rating Kecocokan Nilai -->
<div class="card">
    <div class="card-body">
        <h5 class="mb-3">Rating Kecocokan Nilai</h5> <!-- Judul untuk tabel Rating Kecocokan Nilai -->
        <table id="ratingKN" class="table table-bordered table-striped ">
            <thead>
                <tr>
                    <th>Id Mahasiswa</th>
                    <th>Kode</th>
                    <th>K1</th>
                    <th>K2</th>
                    <th>K3</th>
                    <th>K4</th>
                    <th>K5</th>
                </tr>
            </thead>
            <tbody>
                <?php $i = 1;
                foreach ($mahasiswa as $mhsn) : ?>
                    <tr>
                        <td><?= $i++; ?></td>
                        <td><?= $mhsn['kode']; ?></td>
                        <td><?= $mhsn['ipk']; ?></td>
                        <td><?= $mhsn['masa_studi']; ?></td>
                        <td><?= $mhsn['keaktifan_organisasi']; ?></td>
                        <td><?= $mhsn['prestasi_akademik']; ?></td>
                        <td><?= $mhsn['prestasi_non_akademik']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Matriks Keputusan -->
<div class="card">
    <div class="card-body">
        <h5 class="mb-3">Matriks Keputusan</h5> <!-- Judul untuk tabel Matriks Keputusan -->
        <table id="matriksK" class="table table-bordered table-striped ">
            <thead>
                <tr>
                    <th>K1</th>
                    <th>K2</th>
                    <th>K3</th>
                    <th>K4</th>
                    <th>K5</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($mahasiswa as $mhsn) : ?>
                    <tr>
                        <td><?= $mhsn['ipk']; ?></td>
                        <td><?= $mhsn['masa_studi']; ?></td>
                        <td><?= $mhsn['keaktifan_organisasi']; ?></td>
                        <td><?= $mhsn['prestasi_akademik']; ?></td>
                        <td><?= $mhsn['prestasi_non_akademik']; ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Tabel Normalisasi -->
<div class="card">
    <div class="card-body">
        <h5 class="mb-3">Normalisasi Matriks</h5>
        <table id="normalisasi" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>K1</th>
                    <th>K2</th>
                    <th>K3</th>
                    <th>K4</th>
                    <th>K5</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($normalized as $norm) : ?>
                    <tr>
                        <td><?= $norm['kode']; ?></td>
                        <td><?= number_format($norm['ipk'], 4); ?></td>
                        <td><?= number_format($norm['masa_studi'], 4); ?></td>
                        <td><?= number_format($norm['keaktifan_organisasi'], 4); ?></td>
                        <td><?= number_format($norm['prestasi_akademik'], 4); ?></td>
                        <td><?= number_format($norm['prestasi_non_akademik'], 4); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Matriks Ternormalisasi -->
<div class="card">
    <div class="card-body">
        <h5 class="mb-3">Matriks Ternormalisasi</h5>
        <table id="matriksTernormalisasi" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>K1</th>
                    <th>K2</th>
                    <th>K3</th>
                    <th>K4</th>
                    <th>K5</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($normalized as $norm) : ?>
                    <tr>
                        <td><?= number_format($norm['ipk'], 4); ?></td>
                        <td><?= number_format($norm['masa_studi'], 4); ?></td>
                        <td><?= number_format($norm['keaktifan_organisasi'], 4); ?></td>
                        <td><?= number_format($norm['prestasi_akademik'], 4); ?></td>
                        <td><?= number_format($norm['prestasi_non_akademik'], 4); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Matriks Ternormalisasi x Bobot -->
<div class="card">
    <div class="card-body">
        <h5 class="mb-3">Optimalisasi (Matriks Ternormalisasi x Bobot)</h5>
        <table id="optimalisasi" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>K1</th>
                    <th>K2</th>
                    <th>K3</th>
                    <th>K4</th>
                    <th>K5</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($optimalisasi as $opt) : ?>
                    <tr>
                        <td><?= $opt['kode']; ?></td>
                        <td><?= number_format($opt['k1'], 4); ?></td>
                        <td><?= number_format($opt['k2'], 4); ?></td>
                        <td><?= number_format($opt['k3'], 4); ?></td>
                        <td><?= number_format($opt['k4'], 4); ?></td>
                        <td><?= number_format($opt['k5'], 4); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>


<!-- Hasil Optimalisasi Matriks Ternormalisasi x Bobot -->
<div class="card">
    <div class="card-body">
        <h5 class="mb-3">Hasil Optimalisasi</h5>
        <table id="optimalisasi" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>K1 (Max)</th>
                    <th>K2 (Max)</th>
                    <th>K3 (Max)</th>
                    <th>K4 (Max)</th>
                    <th>K5 (Max)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($optimalisasi as $opt) : ?>
                    <tr>
                        <td><?= number_format($opt['k1'], 4); ?></td>
                        <td><?= number_format($opt['k2'], 4); ?></td>
                        <td><?= number_format($opt['k3'], 4); ?></td>
                        <td><?= number_format($opt['k4'], 4); ?></td>
                        <td><?= number_format($opt['k5'], 4); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Perhitungan Akhir (Yi = Max - Min) -->
<div class="card">
    <div class="card-body">
        <h5 class="mb-3">Perhitungan Akhir (Yi = Max - Min)</h5>
        <table id="perhitunganYi" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Kode</th>
                    <th>Max (K1+K2+K3+K4+K5)</th>
                    <th>Min</th>
                    <th>Yi (Max - Min)</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($perhitungan_akhir as $hasil) : ?>
                    <tr>
                        <td><?= $hasil['kode']; ?></td>
                        <td><?= number_format($hasil['max'], 4); ?></td>
                        <td><?= number_format($hasil['min'], 4); ?></td>
                        <td><?= number_format($hasil['yi'], 4); ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>

<!-- Perankingan -->
<div class="card">
    <div class="card-body">
        <h5 class="mb-3">Perankingan</h5>
        <table id="perhitunganYi" class="table table-bordered table-striped">
            <thead>
                <tr>
                    <th>Peringkat</th> <!-- Kolom Peringkat -->
                    <th>Kode</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Hasil Akhir</th>

                </tr>
            </thead>
            <tbody>
                <?php
                // Mengurutkan data berdasarkan nilai Yi untuk mendapatkan peringkat
                usort($perankingan, function ($a, $b) {
                    return $b['yi'] <=> $a['yi']; // Urutkan dari yang terbesar
                });
                $rank = 1; // Variabel untuk menyimpan peringkat
                foreach ($perankingan as $hasil) : ?>
                    <tr>
                        <td><?= $rank++; ?></td> <!-- Menampilkan peringkat -->
                        <td><?= $hasil['kode']; ?></td>
                        <td><?= $hasil['nim']; ?></td>
                        <td><?= $hasil['nama_lengkap']; ?></td>
                        <td><?= number_format($hasil['yi'], 4); ?></td>

                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>