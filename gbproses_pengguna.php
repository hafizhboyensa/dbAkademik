<?php
    include("koneksi.php");
    if(isset($_POST['daftar'])){
        $nama_lengkap=$_POST['nama_lengkap'];
        $email=$_POST['email'];
        $password=$_POST['password'];

        $sql= "INSERT INTO pengguna(nama_lengkap,email,password) VALUES ('$nama_lengkap','$email','$password')";
        $query = $koneksi->query($sql);
        header("Location: index.php");
        exit(); 
    }
?>