<div class="container mt-5">
    <h2 class="text-center mb-4">Laporan Hasil Perhitungan MOORA</h2>
    <div class="d-flex justify-content-between mb-3">
        <p><strong>Tanggal Cetak:</strong> <?= date('d-m-Y H:i:s') ?></p> <!-- Tanggal lengkap -->
        <div>
            <a href="<?= base_url('laporan/unduhPdf') ?>" class="btn" style="background-color: #257180; color:#ffffff; border:none;">Unduh Semua Laporan (PDF)</a>
        </div>
    </div>
    <table id=" laporanTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Peringkat</th>
                <th>NIM</th>
                <th>Nama Mahasiswa</th>
                <th>Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1; ?>
            <?php foreach ($laporan as $row): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['peringkat'] ?></td>
                    <td><?= $row['nim'] ?></td>
                    <td><?= $row['nama_lengkap'] ?></td>
                    <td><?= $row['hasil_akhir'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#laporanTable').DataTable(); // Mengaktifkan DataTables
    });
</script>