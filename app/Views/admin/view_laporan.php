<div class="container mt-5">
    <h2 class="text-center mb-4">Laporan Hasil dan Riwayat Perhitungan MOORA</h2>
    <div class="d-flex justify-content-between mb-3">
        <p><strong>Tanggal:</strong> <?= date('d-m-Y') ?></p>
        <a href="<?= base_url('laporan/unduhPdf') ?>" class="btn btn-primary">Unduh Semua Laporan (PDF)</a>
    </div>
    <table id="laporanTable" class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama Mahasiswa</th>
                <th>NIM</th>
                <th>Nilai Akhir</th>
                <th>Peringkat</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            foreach ($laporan as $row): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama_mahasiswa'] ?></td>
                    <td><?= $row['nim'] ?></td>
                    <td><?= $row['skor_akhir'] ?></td>
                    <td><?= $row['ranking'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function() {
        $('#laporanTable').DataTable(); // Inisialisasi DataTables
    });
</script>