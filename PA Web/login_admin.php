<?php
    if(isset($_SESSION['login'])){
        session_start();
        echo "<script>
                document.location.href = 'index.php'
            </script>";
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style_login.css">
    <title>Login</title>
</head>
<body>
    <center>
    <div class="form">
        <h2>ADMIN</h2><br>
        <form action="" method="post" enctype="multipart/form-data">
            <label for="">Username</label><br>
            <input type="text" class='box' name="username" > <br><br>

            <label for="">Password</label><br>
            <input type="password" class='box' name="password" > <br><br>

            <button type="submit" name="login" class="submit">LOGIN</button> 
        </form>
        <br>
        <p>
            Belum punya akun?
            <a href='regis_admin.php'>Daftar</a>
        </p>
        <p>
            Login User
            <a href='login_user.php'>user</a>
        </p>
    </div>
    </center>
</body>
</html>

<?php
    session_start();
    require 'config.php';

    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM `admin` WHERE username = '$username'";
        $result = $db->query($sql);
        
        if(mysqli_num_rows($result) > 0){
            $row = mysqli_fetch_array($result);
            $orang = $row['nama_admin'];

            if(password_verify($password, $row['pass'])){
                $_SESSION['login'] = true;
                echo "<script>
                        alert('Selamat Datang $orang');
                        document.location.href = 'valo_admin.php';
                    </script>";
            }
    
            else{
                echo "<script>
                        alert('Username dan Password Salah');
                    </script>";
            }

        }else{
            echo "<script>
                    alert('Username tidak ada');
                </script>";
        } 
    }

?>