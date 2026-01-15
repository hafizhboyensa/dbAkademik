<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<?php
    include("koneksi.php");
    $edit = mysqli_query($koneksi, "SELECT * FROM prodi where id=$_GET[id]");
    $data = mysqli_fetch_array($edit);
    
    ?>
    <div class="container">
        <h1>Data Prodi</h1>
        <form method="POST" >
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Prodi</label>
                <input type="text" name="nama_prodi" class="form-control" id="exampleFormControlInput1" value="<?php echo $data['nama_prodi']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jenjang</label>
                <select class="form-select" name="jenjang" id=""> 
                    <option selected>Pilih jenjang</option>
                    <option value="D2" <?=  ($data['jenjang'] == 'D2') ? 'selected' : '' ?> >D2</option>
                    <option value="D3" <?=  ($data['jenjang'] == 'D3') ? 'selected' : '' ?> >D3</option>
                    <option value="D4" <?=  ($data['jenjang'] == 'D4') ? 'selected' : '' ?> >D4</option>
                    <option value="S2" <?=  ($data['jenjang'] == 'S2') ? 'selected' : '' ?> >S2</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" id="exampleFormControlInput1" value="<?php echo $data['keterangan']; ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <button type="reset" name="reset" class="btn btn-primary">Reset</button>
            <a href="list_prodi.php"><button type="button" name="index" class="btn btn-primary">Lihat List Data Prodi</button></a>
        </form>
    </div>
    <?php

    if(isset($_POST['submit'])){
        $update = mysqli_query($koneksi, "UPDATE prodi SET nama_prodi='$_POST[nama_prodi]', jenjang='$_POST[jenjang]', keterangan='$_POST[keterangan]' WHERE id=$_GET[id]");
        if($update){
            header ("Location:list_prodi.php");
        }else{
            print "Maaf, data gagal diubah";
        }
    }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>