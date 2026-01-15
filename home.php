<?php
session_start();
if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("Location: index.php?pesan=belum_login");
    exit();
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar bg-body-tertiary">
    <form class="container-fluid">
        <div class="justify-content-start">
            <a href="home.php"><button class="btn btn-success me-2" type="button">HOME</button></a>
        </div>
        <div class="justify-content-end">
            <a href="list_mahasiswa.php"><button class="btn btn-outline-success me-2" type="button" >Data Mahasiswa</button></a>
            <a href="list_prodi.php"><button class="btn btn-outline-success me-2" type="button">Data Prodi</button></a>
            <a href="profil.php"><button class="btn btn-outline-success me-2" type="button">Profil</button></a>
        </div>
     </form>
</nav>

<div class="container my-5">
    <h1>Selamat Datang</h1>
    <h1><?= htmlspecialchars($_SESSION['nama_lengkap']); ?></h1>
</div>
</body>
</html>
