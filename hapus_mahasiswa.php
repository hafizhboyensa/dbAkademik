<?php
    include("koneksi.php");
    $nim = $_GET['nim'];
    $sql = "DELETE FROM mahasiswa WHERE nim= $nim";
    $query = $koneksi->query($sql);
    if($query){
        header("Location:list_mahasiswa.php");
    }else{
        print "Gagal menghapus data";
    }
?>