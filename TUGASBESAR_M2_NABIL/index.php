<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Informasi Dokter</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">KlinikHub</a>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link active" href="index.php">Tambah Dokter</a></li>
                    <li class="nav-item"><a class="nav-link" href="daftar-dokter.php">Daftar Dokter</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section class="hero-section text-center">
        <div class="container">
            <h1 class="h2 fw-bold mb-1">Manajemen Data Dokter</h1>
            <p class="text-muted mb-0">Sistem pendataan tenaga medis terpadu</p>
        </div>
    </section>

    <section class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="form-card">
                        <h2 class="h4 fw-bold mb-3 border-bottom pb-2">Formulir Data Dokter Baru</h2>
                        <form action="proses-tambah.php" method="POST">

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Nama Lengkap</label>
                                <input type="text" class="form-control" name="nama" placeholder="Masukkan nama dokter..." required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Nomor Surat Izin Praktik (SIP)</label>
                                <input type="text" class="form-control" name="no_sip" placeholder="Hanya angka..." required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Spesialis</label>
                                <select class="form-select" name="spesialis" required>
                                    <option value="" selected disabled>-- Pilih Spesialis --</option>
                                    <option value="Spesialis Gigi">Spesialis Gigi</option>
                                    <option value="Spesialis THT">Spesialis THT</option>
                                    <option value="Spesialis Kandungan">Spesialis Kandungan</option>
                                    <option value="Spesialis Jantung">Spesialis Jantung</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label class="form-label fw-semibold">Ruangan</label>
                                <input type="text" class="form-control" name="ruangan" placeholder="Contoh: Poli Gigi 01" required>
                            </div>

                            <div class="mb-4">
                                <label class="form-label fw-semibold">Kontak</label>
                                <input type="text" class="form-control" name="kontak" placeholder="Nomor telepon aktif..." required>
                            </div>

                            <button type="submit" class="btn btn-primary-custom w-100 py-2">Simpan Data Dokter</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="footer-custom text-center">
        <div class="container">
            <p class="mb-0">&copy; 2026 Klinik Harapan - Bandung</p>
        </div>
    </footer>

</body>
</html>