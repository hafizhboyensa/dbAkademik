<?php
    include("koneksi.php");
    if(isset($_POST['masuk'])){
        $email=$_POST['email'];
        $password=$_POST['password'];

        $stmt = $koneksi->prepare("SELECT * FROM pengguna WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if($result->num_rows === 1){
            $row = $result->fetch_assoc();

            if($password == $row['password']){
                
                $_SESSION['email'] = $email;
                $_SESSION['nama_lengkap'] = $row['nama_lengkap'];
                $_SESSION['status'] = "login";

                header("Location: home.php");
                exit();

            } else {
                header("Location: index.php?pesan=gagal");
                exit();
            }

        } else {
            header("Location: index.php?pesan=gagal");
            exit();
        }
    }
?>