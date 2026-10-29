<?php
echo "TEST";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'koneksi.php';

$query  = "SELECT * FROM data_dokter ORDER BY id DESC";
$result = mysqli_query($koneksi, $query);
var_dump($result);
echo "TEST";
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Dokter - KlinikHub</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">KlinikHub</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Tambah Dokter</a></li>
                    <li class="nav-item"><a class="nav-link active" href="daftar-dokter.php">Daftar Dokter</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <main class="py-5">
        <div class="container">
            <h1 class="h3 fw-bold mb-4">Rekapitulasi Data Dokter Aktif</h1>
            <div class="table-responsive bg-white p-3 border rounded-1">
                <table class="table table-bordered table-striped align-middle mb-0">
                    <thead class="table-light">
                        <tr>
                            <th class="text-center" width="5%">No</th>
                            <th width="20%">Nama Dokter</th>
                            <th width="15%">No SIP</th>
                            <th width="15%">Spesialis</th>
                            <th width="15%">Ruangan</th>
                            <th width="15%">Kontak</th>
                            <th class="text-center" width="15%">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $no = 1;
                        
                        if ($result && mysqli_num_rows($result) > 0) :
                            while ($row = mysqli_fetch_assoc($result)) : 
                        ?>
                        <tr>
                            <td class="text-center"><?= $no++; ?></td>
                            <td><?= htmlspecialchars($row['nama']); ?></td>
                            <td><?= htmlspecialchars($row['no_sip']); ?></td>
                            <td><?= htmlspecialchars($row['spesialis']); ?></td>
                            <td><?= htmlspecialchars($row['ruangan']); ?></td>
                            <td><?= htmlspecialchars($row['kontak']); ?></td>
                            <td class="text-center">
                                <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-warning">Edit</a>
                                <a href="hapus.php?id=<?= $row['id']; ?>" class="btn btn-sm btn-danger" onclick="return confirm('Hapus dokter ini?')">Hapus</a>
                            </td>
                        </tr>
                        <?php endwhile; else : ?>
                        <tr>
                            <td colspan="7" class="text-center py-4">Belum ada data dokter yang diinput.</td>
                        </tr>
                        <?php 
                        
                        if (!$result) {
                            echo "<tr><td colspan='7' class='text-center text-danger fw-bold'>Error Database: " . mysqli_error($koneksi) . "</td></tr>";
                        }
                        endif; 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </main>

</body>
</html>