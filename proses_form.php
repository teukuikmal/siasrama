<?php
include_once("koneksi.php");

$id = $_POST['id'];
$nama = $_POST['nama'];
$tanggal = $_POST['tanggal'];
$hp = $_POST['hp'];

$qry = "UPDATE pendaftar SET nama='$nama', tanggal='$tanggal',  hp='$hp', alamat='$alamat' WHERE id='$id'";

$simpan = mysqli_query($con, $qry);

if (!$simpan) {
    // Check for SQL errors
    echo "Error: " . mysqli_error($con);
} else {
    // Redirect on success
    header("Location: pendaftaran.php");
    exit();
}
