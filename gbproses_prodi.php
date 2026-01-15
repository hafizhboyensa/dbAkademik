<?php
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $nama_prodi=$_POST['nama_prodi'];
        $jenjang=$_POST['jenjang'];
        $keterangan=$_POST['keterangan'];

        $sql= "INSERT INTO prodi(nama_prodi,jenjang,keterangan) VALUES ('$nama_prodi','$jenjang','$keterangan')";
        $query = $koneksi->query($sql);
        header("Location: list_prodi.php");
        exit(); 
    }
?>