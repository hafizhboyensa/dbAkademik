<!DOCTYPE html>
<html>
<head>
    <title>Akademik</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card shadow col-md-6">
                <div class="card-header">
                    <h1>Login</h1>
                </div>
                <div class="card-body">
                    <?php 
                    if(isset($_GET['pesan'])){
                            if($_GET['pesan'] == "gagal"){
                                echo "<div class='alert alert-danger'>Login gagal! Username atau Password salah.</div>";
                            } else if($_GET['pesan'] == "belum_login"){
                                echo "<div class='alert alert-warning'>Anda harus login untuk mengakses halaman admin.</div>";
                            } else if($_GET['pesan'] == "logout"){
                                echo "<div class='alert alert-success'>Anda telah berhasil logout.</div>";
                            }
                        }
                    ?>

                    <form method="POST" action="gbproses_login.php">
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Username</label>
                            <input type="text" name="username" class="form-control" id="username" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <button type="submit" name="masuk" class="btn btn-primary">Masuk</button>
                        <a href="daftar.php"><button type="button" name="button" class="btn btn-primary">daftar</button></a>
                    </form>
                </div>
            </div>
        </div>
    </div>    

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

