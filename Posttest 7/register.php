<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="log.css">
    <title>Registrasi</title>
</head>
<body>
    <div class="form">
        <h3>REGISTRASI</h3><br>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="">Nama Lengkap</label><br>
            <input type="text" name="nama" id=""> <br><br>

            <label for="">Username</label><br>
            <input type="text" name="username" id=""> <br><br>

            <label for="">Password</label> <br>
            <input type="password" name="pass" id=""> <br><br>
            
            <label for="">Konfirmasi Password</label><br>
            <input type="password" name="konfirmasi"><br><br>

            <button type="submit" name="regis" class="submit">DAFTAR</button>
        </form>
        <br>
        <p>
            Sudah punya akun?
            <a href='login.php'>Login</a>
        </p>
    </div>
</body>
</html>

<?php
    require 'config.php';

    if(isset($_POST['regis'])){
        $nama = $_POST['nama'];
        $username = $_POST['username'];
        $pass = $_POST['pass'];
        $konfirmasi = $_POST['konfirmasi'];

        $sql = "SELECT * FROM user WHERE username='$username'";
        $akun = $db->query($sql);

        if(mysqli_num_rows($akun) > 0){
            echo "<script>
                    alert('Username sudah ada');
                    document.location.href ='register.php';
                  </script>";
        }else{
            if ($pass == $konfirmasi){
                $pass = password_hash($pass, PASSWORD_DEFAULT);
                $query = "INSERT INTO user (nama, username, pass)VALUES ('$nama', '$username', '$pass')";        
                $result = $db->query($query);
                if($result){
                    echo "<script>
                        alert('Registrasi Berhasil!');
                        document.location.href ='login.php';
                        </script>";
                }
                else{
                    echo "<script>
                        alert('Registrasi Gagal');
                        document.location.href ='register.php';
                        </script>";
                }
            }
            else{
                echo "<script>
                    alert('Wrong Password')
                    document.location.href ='register.php';
                    </script>";
            }
        }
    }
?>