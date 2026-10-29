<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    
    $nama      = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $no_sip    = mysqli_real_escape_string($koneksi, $_POST['no_sip']);
    $spesialis = mysqli_real_escape_string($koneksi, $_POST['spesialis']);
    $ruangan   = mysqli_real_escape_string($koneksi, $_POST['ruangan']);
    $kontak    = mysqli_real_escape_string($koneksi, $_POST['kontak']);

    $query = "INSERT INTO data_dokter (nama, no_sip, spesialis, ruangan, kontak) 
              VALUES ('$nama', '$no_sip', '$spesialis', '$ruangan', '$kontak')";

    if (mysqli_query($koneksi, $query)) {
        header("Location: daftar-dokter.php");
        exit();
    } else {
        echo "<h3 style='color:red;'>Gagal Menyimpan Data ke Database!</h3>";
        echo "<b>Pesan Error MySQL:</b> " . mysqli_error($koneksi);
    }
} else {
    echo "Halaman ini hanya untuk memproses form.";
}

?>