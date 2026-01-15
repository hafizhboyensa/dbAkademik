<?php
    include("koneksi.php");
    if(isset($_POST['submit'])){
        $nim=$_POST['nim'];
        $nama=$_POST['nama'];
        $tanggal=$_POST['tanggal'];
        $alamat=$_POST['alamat'];
        $prodi_id=$_POST['prodi'];

        $sql= "INSERT INTO mahasiswa(nim,nama_mhs,tgl_lahir,alamat,prodi_id) VALUES ('$nim','$nama','$tanggal','$alamat','$prodi_id')";
        $query = $koneksi->query($sql);
        header("Location: list_mahasiswa.php");
        exit(); 
    }
?>