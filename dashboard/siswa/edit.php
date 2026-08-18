<?php
include '../config/database.php';

$id = $_GET['id'];

$data = mysqli_query($conn,
    "SELECT * FROM siswa WHERE id='$id'");

$row = mysqli_fetch_assoc($data);

if(isset($_POST['submit'])){

    $nama   = $_POST['nama'];
    $kelas  = $_POST['kelas'];
    $alamat = $_POST['alamat'];

    mysqli_query($conn,
        "UPDATE siswa SET
            nama='$nama',
            kelas='$kelas',
            alamat='$alamat'
        WHERE id='$id'");

    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Siswa</title>
    <link rel="stylesheet" href="../css/user.css">
</head>
<body>

<div class="container">

    <h1>Edit Siswa</h1>

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

</body>
</html>