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
    <title>Edit Profil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar bg-body-tertiary">
    <form class="container-fluid">
        <div class="justify-content-start">
            <a href="home.php"><button class="btn btn-outline-success me-2" type="button">HOME</button></a>
        </div>
        <div class="justify-content-end">
            <a href="list_mahasiswa.php"><button class="btn btn-outline-success me-2" type="button" >Data Mahasiswa</button></a>
            <a href="list_prodi.php"><button class="btn btn-outline-success me-2" type="button">Data Prodi</button></a>
            <a href="profil.php"><button class="btn btn-success me-2" type="button">Profil</button></a>
        </div>
     </form>
</nav>

<div class="container">
    <h1>Edit Profil</h1>
    <form method="POST" action="gbproses_edit_pengguna.php">
        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" class="form-control" value="<?= htmlspecialchars($_SESSION['email']); ?>" disabled>
        </div>
        <div class="mb-3">
            <label class="form-label">Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" value="<?= htmlspecialchars($_SESSION['nama_lengkap']); ?>" required>
        </div>
        <div class="mb-3">
            <label class="form-label">Password Baru</label>
            <input type="password" name="password_baru" class="form-control"minlength="6">
            <small class="text-muted">Kosongkan jika tidak ingin mengganti password</small>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="profil.php" class="btn btn-secondary">Kembali</a>
    </form>
</div>

</body>
</html>
