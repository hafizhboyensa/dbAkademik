<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<?php
    include("koneksi.php");
    $edit = mysqli_query($koneksi, "SELECT * FROM mahasiswa where nim=$_GET[nim]");
    $data_mhs = mysqli_fetch_array($edit);
    
    ?>
    <div class="container">
        <h1>Data Mahasiswa</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">NIM</label>
                <input type="text" name="nim" class="form-control" id="exampleFormControlInput1" value="<?php echo $data_mhs['nim']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" id="exampleFormControlInput1" value="<?php echo $data_mhs['nama_mhs']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Tanggal Lahir</label>
                <input type="date" name="tanggal" class="form-control" id="exampleFormControlInput1" value="<?php echo $data_mhs['tgl_lahir']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Program Studi</label>
                <select class="form-select" name="prodi" id="">
                    <option selected>Pilih Prodi</option>
                    <?php
                        $query_prodi = "SELECT * FROM prodi";
                        $sql = $koneksi->query($query_prodi);
                        while($data = mysqli_fetch_array($sql)){
                            if($data['id'] == $data_mhs['prodi_id']){
                                $cek = "selected";
                            }else{
                                $cek = "";
                            }
                            echo "<option value='$data[id]' $cek>$data[nama_prodi] </option>";
                        }
                    ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Alamat</label>
                <textarea class="form-control" name="alamat" id="exampleFormControlTextarea1" rows="3"><?php echo $data_mhs['alamat']; ?></textarea>
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <button type="reset" name="reset" class="btn btn-primary">Reset</button>
            <a href="list_mahasiswa.php"><button type="button" name="index" class="btn btn-primary">Lihat List Data Mahasiswa</button></a>
        </form>
    </div>
    <?php

    if(isset($_POST['submit'])){
        $update = mysqli_query($koneksi, "UPDATE mahasiswa SET nim='$_POST[nim]', nama_mhs='$_POST[nama]', tgl_lahir='$_POST[tanggal]', alamat='$_POST[alamat]', prodi_id='$_POST[prodi]' WHERE nim=$_GET[nim]");
        if($update){
            header ("Location:list_mahasiswa.php");
        }else{
            print "Maaf, data gagal diubah";
        }
    }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>