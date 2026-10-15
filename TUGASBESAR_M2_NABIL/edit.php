<?php
include 'koneksi.php';
$id = $_GET['id'] ?? null;
if (!$id) { header("Location: daftar-dokter.php"); exit(); }

$query  = "SELECT * FROM data_dokter WHERE id = '$id'";
$result = mysqli_query($koneksi, $query);
$data   = mysqli_fetch_assoc($result);
if (!$data) { echo "Data tidak ditemukan!"; exit(); }

?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body class="bg-light">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow-sm p-4">
                    <h3 class="fw-bold mb-3 border-bottom pb-2">Edit Data Dokter</h3>
                    <form action="proses-edit.php" method="POST">
                        <input type="hidden" name="id" value="<?= $data['id']; ?>">

                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" value="<?= htmlspecialchars($data['nama']); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Nomor SIP</label>
                            <input type="text" class="form-control" name="no_sip" value="<?= htmlspecialchars($data['no_sip']); ?>" required>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Spesialis</label>
                            <select class="form-select" name="spesialis" required>
                                <option value="Spesialis Gigi" <?= ($data['spesialis'] == 'Spesialis Gigi') ? 'selected' : ''; ?>>Spesialis Gigi</option>
                                <option value="Spesialis THT" <?= ($data['spesialis'] == 'Spesialis THT') ? 'selected' : ''; ?>>Spesialis THT</option>
                                <option value="Spesialis Kandungan" <?= ($data['spesialis'] == 'Spesialis Kandungan') ? 'selected' : ''; ?>>Spesialis Kandungan</option>
                                <option value="Spesialis Jantung" <?= ($data['spesialis'] == 'Spesialis Jantung') ? 'selected' : ''; ?>>Spesialis Jantung</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Ruangan</label>
                            <input type="text" class="form-control" name="ruangan" value="<?= htmlspecialchars($data['ruangan']); ?>" required>
                        </div>
                        <div class="mb-4">
                            <label class="form-label fw-semibold">Kontak</label>
                            <input type="text" class="form-control" name="kontak" value="<?= htmlspecialchars($data['kontak']); ?>" required>
                        </div>

                        <div class="d-flex justify-content-between">
                            <a href="daftar-dokter.php" class="btn btn-secondary">Batal</a>
                            <button type="submit" class="btn btn-primary-custom">Update Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>