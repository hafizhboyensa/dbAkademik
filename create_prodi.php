<!DOCTYPE html>
<html lang="en">
<head>
    <title>Data Prodi</title>
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
                <a href="list_prodi.php"><button class="btn btn-outline-success me-2" type="button">Data Prodi</button></a>
                <a href="profil.php"><button class="btn btn-outline-success me-2" type="button">Profil</button></a>
            </div>
            
        </form>
    </nav>

    <div class="container">
        <h1>Data Prodi</h1>
        <form method="POST" action="gbproses_prodi.php">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nama Prodi</label>
                <input type="text" name="nama_prodi" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Jenjang</label>
                <select class="form-select" name="jenjang" id="">
                    <option selected>Pilih jenjang</option>
                    <option value="D2">D2</option>
                    <option value="D3">D3</option>
                    <option value="D4">D4</option>
                    <option value="S2">S2</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Keterangan</label>
                <input type="text" name="keterangan" class="form-control" id="exampleFormControlInput1">
            </div>
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
            <button type="reset" name="reset" class="btn btn-primary">Reset</button>
            <a href="list_prodi.php"><button type="button" name="index" class="btn btn-primary">Lihat List Data Prodi</button></a>
        </form>
    </div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>