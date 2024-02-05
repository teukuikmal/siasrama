<?php
$koneksi = mysqli_connect('localhost', 'root', '', 'siasrama');

if (!$koneksi) {
    die("Koneksi Gagal: " . mysqli_connect_error());
} else {
    echo "Koneksi Berhasil";
}
?>
