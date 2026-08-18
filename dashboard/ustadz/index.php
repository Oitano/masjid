<?php
include '../config/database.php';

$data = mysqli_query($conn, "SELECT * FROM guru");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Ustadz</title>
    <link rel="stylesheet" href="../css/user.css">
</head>
<body>

<div class="container">

    <h1>Data Ustadz</h1>

    <a href="tambah.php" class="btn btn-add">
        Tambah Ustadz
    </a>

    <table>

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Mapel</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>

        <?php
        $no = 1;
        while($row = mysqli_fetch_assoc($data)){
        ?>

        <tr>

            <td><?= $no++ ?></td>
            <td><?= $row['nama'] ?></td>
            <td><?= $row['mapel'] ?></td>
            <td><?= $row['alamat'] ?></td>

            <td>

                <a href="edit.php?id=<?= $row['id'] ?>"
                    class="btn btn-edit">
                    Edit
                </a>

                <a href="hapus.php?id=<?= $row['id'] ?>"
                    class="btn btn-delete">
                    Hapus
                </a>

            </td>

        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>