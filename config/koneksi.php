<?php
$host = "localhost";
$user = "root";
$pass = "";
$db   = "data_ppdb"; 

$connect = mysqli_connect($host, $user, $pass, $db);

// cek koneksi
if (!$connect) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>