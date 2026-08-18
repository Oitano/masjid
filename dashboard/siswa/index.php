<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - PonPes Hidayatullah Kudus</title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- CSS -->
   <link rel="stylesheet" href="../css/dashboard.css">
</head>
<body>

<div class="dashboard">

    <!-- SIDEBAR -->
    <aside id="sidebar">

        <div class="logo-section">
            <div class="logo-icon">
                <i class="bi bi-mortarboard-fill"></i>
            </div>

            <div>
                <h4>Admin</h4>
                <small>Hidayatullah Kudus</small>
            </div>
        </div>

        <ul class="menu">

            <li>
                <a href="index.php" class="active">
                    <i class="bi bi-grid-fill"></i>
                    Dashboard
                </a>
            </li>

            <li>
                <a href="siswa/index.php">
                    <i class="bi bi-people-fill"></i>
                    Santri
                </a>
            </li>

            <li>
                <a href="ustadz/index.php">
                    <i class="bi bi-person-workspace"></i>
                    Ustadz
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="bi bi-book-fill"></i>
                    Subjects
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="bi bi-calendar-check-fill"></i>
                    Attendance
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="bi bi-cash-stack"></i>
                    Finance
                </a>
            </li>

            <li>
                <a href="#">
                    <i class="bi bi-gear-fill"></i>
                    Settings
                </a>
            </li>

        </ul>

    </aside>

    <!-- MAIN -->
    <main class="main-content">

        <!-- TOPBAR -->
        <div class="topbar">

            <button id="toggleSidebar">
                <i class="bi bi-list"></i>
            </button>

            <div class="topbar-right">

                <div class="search-box">
                    <i class="bi bi-search"></i>
                    <input type="text" placeholder="Search here...">
                </div>

                <div class="admin-profile">
                    <img src="https://i.pravatar.cc/45?img=12">

                    <div>
                        <h6>Principal</h6>
                        <small>Administrator</small>
                    </div>
                </div>

            </div>

        </div>

       <div class="container">

    <h1>Data Santri</h1>

    <a href="tambah.php" class="btn btn-add">
        Tambah Santri
    </a>

    <table>

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
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
            <td><?= $row['kelas'] ?></td>
            <td><?= $row['alamat'] ?></td>

            <td>

                <a href="edit.php?id=<?= $row['id'] ?>"
                    class="btn btn-edit">
                    Edit
                </a>

                <a href="hapus.php?id=<?= $row['id'] ?>"
                    class="btn btn-delete"
                    onclick="return confirm('Yakin hapus data?')">
                    Hapus
                </a>

            </td>

        </tr>

        <?php } ?>

    </table>

</div>

<!-- JS -->
<script src="js/dashboard.js"></script>

</body>
</html>