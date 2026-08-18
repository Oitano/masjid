<?php

$host     = "localhost";
$username = "root";
$password = "";
$database = "sekolah_db"; // ganti sesuai nama database kamu

$conn = mysqli_connect($host, $username, $password, $database);

// cek koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

?>