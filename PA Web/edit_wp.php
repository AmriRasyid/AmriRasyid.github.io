<?php 
    require 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM senjata WHERE id = '$id' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])){
        $nama_senjata = $_POST['nama_senjata'];
        $deskripsi_senjata = $_POST['deskripsi_senjata'];

        $update = mysqli_query($db, "UPDATE senjata SET nama_senjata='$nama_senjata', deskripsi_senjata='$deskripsi_senjata' WHERE id='$id'");

        if($update){
            header("Location:wp_admin.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Valorant</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2>Valorant</h2>
    </header>
    
    <div class="form-class">
        <h3>Edit</h3>
        <form action="" method="post">
            
            <label for="">Nama Senjata</label><br>
            <input type="text" name="nama_senjata" class="form-text" value=<?=$row['nama_senjata'];?>><br>
            
            <label for="">Deskripsi</label><br>
            <input type="text" name="deskripsi_senjata" class="form-text" value=<?=$row['deskripsi_senjata'];?>><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>