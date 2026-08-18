<?php
include('../config/database.php');

if (isset($_POST['submit'])) {

    $nama  = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    $query = mysqli_query($conn, "INSERT INTO siswa VALUES(
        NULL,
        '$nama',
        '$kelas',
        '$alamat'
    )");

    if ($query) {
        header("Location: index.php");
        exit;
    } else {
        echo "Gagal tambah data: " . mysqli_error($conn);
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Santri</title>
    <link rel="stylesheet" href="../css/user.css">
</head>
<body>

<div class="container">

    <h1>Tambah Santri</h1>

    <form method="POST">

        <input 
            type="text"
            name="nama"
            value="<?= isset($row['nama']) ? $row['nama'] : ''; ?>"
            placeholder="Masukkan nama santri"
            required
        >

        <input 
            type="text"
            name="kelas"
             value="<?= isset($row['kelas']) ? $row['kelas'] : ''; ?>"
            placeholder="Masukkan kelas"
            required
        >

        <textarea 
            name="alamat"
            placeholder="Masukkan alamat santri"
            required
        ><?= isset($row['alamat']) ? $row['alamat'] : ''; ?></textarea>

        <button type="submit" class="btn-submit" name="submit">
            Update Data
        </button>

    </form>

</div>

</div>

</body>
</html>