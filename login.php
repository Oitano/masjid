<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login — Pesantren Hidayatullah Kudus</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">

<style>
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}

body {
    height: 100vh;

    background: url('assets/img/gedung.jpg') no-repeat center;
    background-size: cover;

    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
}
body::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;

    backdrop-filter: blur(8px);
    background: rgba(0,0,0,0.4);

    z-index: 0;
}

/* CONTAINER */
.container {
    width: 1000px;
    height: 550px;
    display: flex;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 20px 60px rgba(0,0,0,0.5);
    background: rgba(255,255,255,0.05);
    backdrop-filter: blur(10px);
   
    position: relative;
    z-index: 1;
}

/* LEFT SIDE */
.left {
    flex: 1;
    background: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.6)),
                url('assets/students-learning (2).JPG') center/cover;
    color: white;
    padding: 50px;
    display: flex;
    flex-direction: column;
    justify-content: center;
}

.left small {
    margin-bottom: 10px;
    opacity: 0.8;
    font-size: 20px;
}

.left h1 {
    font-size: 40px;
    margin-bottom: 15px;
}

.left span {
    color: #f4d03f;
}

.left p {
    opacity: 0.8;
}

/* RIGHT SIDE */
.right {
    flex: 1;
    background: rgba(0,0,0,0.4);
    padding: 50px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    color: white;
}

/* ICON BULAT */
.icon {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    border: 2px solid #2ecc71;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 15px;
    margin: 0 auto 15px auto;
}

/* TITLE */
.right h2 {
    margin-bottom: 20px;
    text-align: center;
    font-size: 30px;
}

/* ERROR */
.error {
    background: rgba(231, 76, 60, 0.2);
    padding: 10px;
    border-radius: 8px;
    margin-bottom: 15px;
    color: #ff6b6b;
    text-align: center;
}

/* INPUT */
.input-group {
    margin-bottom: 15px;
}

.input-group input {
    width: 100%;
    padding: 12px;
    border-radius: 8px;
    border: none;
    outline: none;
    background: rgba(255,255,255,0.1);
    color: white;
}

.input-group input::placeholder {
    color: #ccc;
}

/* BUTTON */
button {
    width: 100%;
    padding: 12px;
    border: none;
    border-radius: 10px;
    background: linear-gradient(45deg, #27ae60, #2ecc71);
    color: white;
    font-weight: bold;
    cursor: pointer;
    transition: 0.3s;
}

button:hover {
    transform: scale(1.05);
}
</style>
</head>

<body>

<div class="container">

    <!-- LEFT -->
    <div class="left">
        <small>PonPes Hidayatullah Kudus</small>
        <h1>Selamat Datang <br><span>Kembali</span></h1>
        <p>Silakan masuk dengan username dan password Anda untuk melanjutkan.</p>
    </div>

    <!-- RIGHT -->
    <div class="right">

        <div class="icon">👤</div>

        <h2>Login</h2>

        <?php if(isset($_GET['error'])) { ?>
            <div class="error">Username atau password salah!</div>
        <?php } ?>

        <form method="POST" action="php/proses.php">

            <div class="input-group">
                <input type="text" name="username" placeholder="Masukkan username" required>
            </div>

            <div class="input-group">
                <input type="password" name="password" placeholder="Masukkan password" required>
            </div>

            <button type="submit">Login</button>

        </form>
    </div>

</div>

</body>
</html>