<!-- Rating Kecocokan Nilai -->
<div class="card">
    <div class="card-body">
        <h5 class="mb-3">Rating Kecocokan Nilai</h5> <!-- Judul untuk tabel Rating Kecocokan Nilai -->
        <table id="ratingKN" class="table table-bordered table-striped ">
            <thead>
                <tr>
                    <th>Id Mahasiswa</th>
                    <th>Kode</th>
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
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
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
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
                    <th>C1</th>
                    <th>C2</th>
                    <th>C3</th>
                    <th>C4</th>
                    <th>C5</th>
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