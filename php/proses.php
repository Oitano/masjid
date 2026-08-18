<?php
session_start();
include "../config/koneksi.php"; // ✅ FIX DI SINI

$user = $_POST['username'] ?? '';
$pass = $_POST['password'] ?? '';

$query = mysqli_query($connect, "SELECT * FROM users WHERE username='$user' AND password='$pass'");
$data = mysqli_fetch_assoc($query);

if ($data) {
    $_SESSION['user'] = $data['username'];
    $_SESSION['nama'] = $data['name'];
    $_SESSION['role'] = $data['role'];

    // 🔥 CEK ROLE
    if ($data['role'] == 'admin') {
        header("Location: ../dashboard/index.php");
    } elseif ($data['role'] == 'siswa') {
        header("Location: ../siswa/dashboard.php");
    } else {
        header("Location: ../login.php");
    }

    exit;

} else {
    header("Location: ../login.php?error=1");
    exit;
}
?>