<?php
include 'koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id        = mysqli_real_escape_string($koneksi, $_POST['id']);
    $nama      = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $no_sip    = mysqli_real_escape_string($koneksi, $_POST['no_sip']);
    $spesialis = mysqli_real_escape_string($koneksi, $_POST['spesialis']);
    $ruangan   = mysqli_real_escape_string($koneksi, $_POST['ruangan']);
    $kontak    = mysqli_real_escape_string($koneksi, $_POST['kontak']);

    $query = "UPDATE data_dokter SET 
                nama = '$nama', 
                no_sip = '$no_sip', 
                spesialis = '$spesialis', 
                ruangan = '$ruangan', 
                kontak = '$kontak' 
              WHERE id = '$id'";

    if (mysqli_query($koneksi, $query)) {
        header("Location: daftar-dokter.php");
        exit();
    }
}
?>