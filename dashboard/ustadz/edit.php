<?php
include '../config/database.php';

$id = $_GET['id'];

$data = mysqli_query($conn,
    "SELECT * FROM guru WHERE id='$id'");

$row = mysqli_fetch_assoc($data);

if(isset($_POST['submit'])){

    $nama   = $_POST['nama'];
    $mapel  = $_POST['mapel'];
    $alamat = $_POST['alamat'];

    mysqli_query($conn,
        "UPDATE guru SET
            nama='$nama',
            mapel='$mapel',
            alamat='$alamat'
        WHERE id='$id'");

    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Ustadz</title>
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

</body>
</html>