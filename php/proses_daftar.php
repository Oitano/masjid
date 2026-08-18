<?php
include "koneksi.php";

$nama     = $_POST['nama'];
$email    = $_POST['email'];
$wa       = $_POST['wa'];
$sekolah  = $_POST['sekolah'];
$jenjang  = $_POST['jenjang'];

$query = mysqli_query($connect, "INSERT INTO pendaftaran 
(nama, email, wa, sekolah, jenjang, pesan) 
VALUES 
('$nama','$email','$wa','$sekolah','$jenjang','$pesan')");

if ($query) {
    header("Location: ../pendaftaran.php?success=1");
    exit;
} else {
    echo "Gagal menyimpan data!";
}
?>