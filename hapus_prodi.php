<?php
    include("koneksi.php");
    $id = $_GET['id'];
    $sql = "DELETE FROM prodi WHERE id= $id";
    $query = $koneksi->query($sql);
    if($query){
        header("Location:list_prodi.php");
    }else{
        print "Gagal menghapus data";
    }
?>