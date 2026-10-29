<?php
include 'koneksi.php';

$id = $_GET['id'] ?? null;

if ($id) {
    $id = mysqli_real_escape_string($koneksi, $id);
    $query = "DELETE FROM data_dokter WHERE id = '$id'";

    if (mysqli_query($koneksi, $query)) {
        header("Location: daftar-dokter.php");
        exit();
    }
}
header("Location: daftar-dokter.php");
?>