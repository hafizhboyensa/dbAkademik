<?php
session_start();
include("koneksi.php");
if (!isset($_SESSION['status']) || $_SESSION['status'] != "login") {
    header("Location: index.php?pesan=belum_login");
    exit();
}
$nama_lengkap = $_POST['nama_lengkap'];
$password_baru = $_POST['password_baru'];
$email = $_SESSION['email'];
if (!empty($password_baru)) {
    $password_hash = password_hash($password_baru, PASSWORD_DEFAULT);
    $stmt = $koneksi->prepare(
        "UPDATE pengguna SET nama_lengkap = ?, password = ? WHERE email = ?"
    );
    $stmt->bind_param("sss", $nama_lengkap, $password_hash, $email);
} else {
    $stmt = $koneksi->prepare(
        "UPDATE pengguna SET nama_lengkap = ? WHERE email = ?"
    );
    $stmt->bind_param("ss", $nama_lengkap, $email);
}
if ($stmt->execute()) {
    $_SESSION['nama_lengkap'] = $nama_lengkap;
    header("Location: profil.php?pesan=berhasil");
    exit();
} else {
    header("Location: profil.php?pesan=gagal");
    exit();
}
?>
