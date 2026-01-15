<?php
    include("koneksi.php");
    $query = "select * from prodi";
    $sql = $koneksi->query($query);
    $no = 1;
?>   
<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
<nav class="navbar bg-body-tertiary">
    <form class="container-fluid">
        <div class="justify-content-start">
            <a href="home.php"><button class="btn btn-outline-success me-2" type="button">HOME</button></a>
        </div>
        <div class="justify-content-end">
            <a href="list_mahasiswa.php"><button class="btn btn-outline-success me-2" type="button" >Data Mahasiswa</button></a>
            <a href="list_prodi.php"><button class="btn btn-success me-2" type="button">Data Prodi</button></a>
            <a href="profil.php"><button class="btn btn-outline-success me-2" type="button">Profil</button></a>
        </div>
        
     </form>
</nav>

<div class="container">
    <table class="table caption-top">
        <h1>List Data Prodi</h1>
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama Prodi</th>
                <th scope="col">Jenjang</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($sql as $row): ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row['nama_prodi']; ?></td>
                    <td><?php echo $row['jenjang']; ?></td>
                    <td><?php echo $row['keterangan']; ?></td>
                    <td>
                        <a href="hapus_prodi.php?id=<?php echo $row['id'] ?>"><button type="button" name="hapus" class="btn btn-secondary">Hapus</button></a> |
                        <a href="edit_prodi.php?id=<?php echo $row['id'] ?>"><button type="button" name="edit" class="btn btn-secondary">Edit</button></a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
    
    <a href="create_prodi.php"><button type="button" name="create" class="btn btn-primary">Tambahkan Data</button></a>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

