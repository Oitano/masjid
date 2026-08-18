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
    <link rel="stylesheet" href="css/dashboard.css">
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
                <a href="../dashboard/siswa/index.php">
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

        <!-- HERO -->
        <div class="hero-section">

            <div>
                <h1>Welcome Back Admin 👋</h1>

                <p>
                    Manage students, teachers, attendance,
                    and school activities easily.
                </p>

                <button class="btn btn-light btn-lg mt-3">
                    School Report
                </button>
            </div>

            <div class="hero-image">
                <i class="bi bi-building"></i>
            </div>

        </div>

        <!-- STATS -->
        <div class="row g-4 mt-1">

            <div class="col-lg-3 col-md-6">

                <div class="stat-card blue">

                    <div>
                        <h3>1,245</h3>
                        <p>Total Students</p>
                    </div>

                    <i class="bi bi-people-fill"></i>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="stat-card green">

                    <div>
                        <h3>85</h3>
                        <p>Total Teachers</p>
                    </div>

                    <i class="bi bi-person-workspace"></i>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="stat-card orange">

                    <div>
                        <h3>32</h3>
                        <p>Subjects</p>
                    </div>

                    <i class="bi bi-book-fill"></i>

                </div>

            </div>

            <div class="col-lg-3 col-md-6">

                <div class="stat-card purple">

                    <div>
                        <h3>96%</h3>
                        <p>Attendance</p>
                    </div>

                    <i class="bi bi-bar-chart-fill"></i>

                </div>

            </div>

        </div>

        <!-- TABLE -->
        <div class="table-section mt-4">

            <div class="table-header">

                <div>
                    <h4>Recent Students</h4>
                    <small>Latest registered students</small>
                </div>

                <button class="btn btn-primary">
                    Add Student
                </button>

            </div>

            <div class="table-responsive mt-4">

                <table class="table align-middle">

                    <thead>

                        <tr>
                            <th>Student</th>
                            <th>Class</th>
                            <th>Status</th>
                            <th>Attendance</th>
                        </tr>

                    </thead>

                    <tbody>

                        <tr>

                            <td>
                                <div class="student-info">
                                    <img src="https://i.pravatar.cc/45?img=5">
                                    <span>Ahmad Fauzi</span>
                                </div>
                            </td>

                            <td>XII IPA 1</td>

                            <td>
                                <span class="badge bg-success">
                                    Active
                                </span>
                            </td>

                            <td>98%</td>

                        </tr>

                        <tr>

                            <td>
                                <div class="student-info">
                                    <img src="https://i.pravatar.cc/45?img=6">
                                    <span>Siti Nurhaliza</span>
                                </div>
                            </td>

                            <td>XI IPS 2</td>

                            <td>
                                <span class="badge bg-warning text-dark">
                                    Pending
                                </span>
                            </td>

                            <td>89%</td>

                        </tr>

                        <tr>

                            <td>
                                <div class="student-info">
                                    <img src="https://i.pravatar.cc/45?img=7">
                                    <span>Rizky Maulana</span>
                                </div>
                            </td>

                            <td>X IPA 3</td>

                            <td>
                                <span class="badge bg-danger">
                                    Inactive
                                </span>
                            </td>

                            <td>76%</td>

                        </tr>

                    </tbody>

                </table>

            </div>

        </div>

    </main>

</div>

<!-- JS -->
<script src="js/dashboard.js"></script>

</body>
</html>