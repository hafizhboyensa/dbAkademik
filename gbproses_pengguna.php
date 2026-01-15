<?php
include("koneksi.php");

if (isset($_POST['daftar'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $cek = $koneksi->prepare("SELECT id FROM pengguna WHERE email = ?");
    $cek->bind_param("s", $email);
    $cek->execute();
    $result = $cek->get_result();
    if ($result->num_rows > 0) {
        header("Location: daftar.php?pesan=email_terdaftar");
        exit();
    }
    $stmt = $koneksi->prepare(
        "INSERT INTO pengguna (nama_lengkap, email, password) VALUES (?, ?, ?)"
    );
    $stmt->bind_param("sss", $nama_lengkap, $email, $password);
    $stmt->execute();
    header("Location: index.php?pesan=daftar_berhasil");
    exit();
}
?>
