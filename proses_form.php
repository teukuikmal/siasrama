<?php
// Koneksi ke database
$koneksi = mysqli_connect("localhost", "username", "", "db_siasrama");

// Periksa koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Tangkap data dari formulir
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$telepon = $_POST['telepon'];

// Query untuk menyimpan data ke database
$query = "INSERT INTO pendaftaran (nama, jurusan, alamat, telepon) VALUES ('$nama', '$jurusan', '$alamat', '$telepon')";

// Jalankan query
$result = mysqli_query($koneksi, $query);

// Periksa keberhasilan query
if (!$result) {
    die("Query gagal: " . mysqli_error($koneksi));
}

// Tutup koneksi database
mysqli_close($koneksi);

// Redirect ke halaman lain (sesuai kebutuhan)
header("Location: index.php");
exit();
