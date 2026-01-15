<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
<?php
    include("koneksi.php");
    $edit = mysqli_query($koneksi, "SELECT * FROM pengguna where id=$_GET[id]");
    $data_pengguna = mysqli_fetch_array($edit);
    
    ?>
    <div class="container">
        <h1>Profil</h1>
        <form method="POST">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Lengkap</label>
                <input type="text" name="nama_lengkap" class="form-control" id="exampleFormControlInput1" value="<?php echo $data_pengguna['nama_lengkap']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1" value="<?php echo $data_pengguna['email']; ?>">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleFormControlInput1" value="<?php echo $data_pengguna['password']; ?>">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <button type="reset" name="reset" class="btn btn-primary">Reset</button>
        </form>
    </div>
    <?php

    if(isset($_POST['submit'])){
        $update = mysqli_query($koneksi, "UPDATE pengguna SET email='$_POST[email]', password='$_POST[password]', nama_lengkap='$_POST[nama_lengkap]' WHERE id=$_GET[id]");
        if($update){
            header ("Location:profil.php");
        }else{
            print "Maaf, data gagal diubah";
        }
    }
?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>