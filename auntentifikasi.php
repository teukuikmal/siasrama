<?php
include ('config.php');

$username = $_POST['username'];
$password = $_POST['password'];

$username = mysqli_real_escape_string($koneksi, $username);
$password = mysqli_real_escape_string($koneksi, $password);

$query = mysqli_prepare($koneksi, "SELECT * FROM tb_user WHERE username=? AND password=?");
mysqli_stmt_bind_param($query, 'ss', $username, $password);
mysqli_stmt_execute($query);
mysqli_stmt_store_result($query);


if(mysqli_stmt_num_rows($query) == 1){

    header('Location: ../siasrama/app');
} else {

    header('Location: ../siasrama/app');
}

mysqli_stmt_close($query);

mysqli_close($koneksi);
?>
