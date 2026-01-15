<?php
    include("koneksi.php");
    if(isset($_POST['masuk'])){
        $username=$_POST['username'];
        $password=$_POST['password'];

        $stmt = $koneksi->prepare("SELECT * FROM user WHERE username = ?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();

        // 3. Cek apakah username ditemukan
        if($result->num_rows === 1){
            $row = $result->fetch_assoc();

            if($password == $row['password']){
                
                $_SESSION['username'] = $username;
                $_SESSION['nama_user'] = $row['nama_user'];
                $_SESSION['status'] = "login";

                // Alihkan ke halaman utama
                header("Location: home.php");
                exit();

            } else {
                // Password Salah
                header("Location: index.php?pesan=gagal");
                exit();
            }

        } else {
            // Username Tidak Ditemukan
            header("Location: index.php?pesan=gagal");
            exit();
        }
    }
?>