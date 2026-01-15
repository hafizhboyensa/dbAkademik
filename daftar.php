<!DOCTYPE html>
<html>
<head>
    <title>Daftar</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="card shadow col-md-6">
                <div class="card-header">
                    <h1>Daftar</h1>
                </div>
                <div class="card-body">
                    <form method="POST" action="gbproses_pengguna.php">
                        <div class="mb-3">
                            <label>Nama Lengkap</label>
                            <input type="text" name="nama_lengkap" class="form-control" id="nama_user" required>
                        </div>
                        <div class="mb-3">
                            <label>Email</label>
                            <input type="email" name="email" class="form-control" id="email" required>
                        </div>
                        <div class="mb-3">
                            <label>Password</label>
                            <input type="password" name="password" class="form-control" id="password" required>
                        </div>
                        <div class="d-flex gap-2">
                            <button type="submit" name="daftar" class="btn btn-primary w-50">Daftar</button>
                            <a href="index.php" class="btn btn-secondary w-50">Login di sini</button></a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>

