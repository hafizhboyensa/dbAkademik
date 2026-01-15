<?php
    include("koneksi.php");
    if(isset($_POST['daftar'])){
        $nama_user=$_POST['nama_user'];
        $username=$_POST['username'];
        $password=$_POST['password'];

        $sql= "INSERT INTO user(nama_user,username,password) VALUES ('$nama_user','$username','$password')";
        $query = $koneksi->query($sql);
        header("Location: index.php");
        exit(); 
    }
?>