<?php
include('../config/database.php');

if (isset($_POST['submit'])) {

    $nama  = $_POST['nama'];
    $kelas = $_POST['mapel'];
    $alamat = $_POST['alamat'];

    $query = mysqli_query($conn, "INSERT INTO guru VALUES(
        NULL,
        '$nama',
        '$mapel',
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
    <title>Tambah Ustadz</title>
    <link rel="stylesheet" href="../css/user.css">
</head>
<body>

<div class="container">

    <h1>Edit Ustadz</h1>

    <form method="POST">

        <input 
            type="text"
            name="nama"
            value="<?= isset($row['nama']) ? $row['nama'] : ''; ?>"
            placeholder="Masukkan nama ustadz"
            required
        >

        <input 
            type="text"
            name="mapel"
             value="<?= isset($row['mapel']) ? $row['mapel'] : ''; ?>"
            placeholder="Masukkan Mata pelajaran"
            required
        >

        <textarea 
            name="alamat"
            placeholder="Masukkan alamat ustadz"
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