<?php 
    require 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM agen WHERE id = '$id' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])){
        $nama_agen = $_POST['nama_agen'];
        $rating = $_POST['rating'];
        $role = $_POST['role'];

        $update = mysqli_query($db, "UPDATE agen SET nama_agen='$nama_agen', rating='$rating', `role`='$role' WHERE id='$id'");

        if($update){
            header("Location:index_admin.php");
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
            
            <label for="">Nama Agent</label><br>
            <input type="text" name="nama_agen" class="form-text" value=<?=$row['nama_agen'];?>><br>
            
            <label for="">Rating</label><br>
            <input type="text" name="rating" class="form-text" value=<?=$row['rating'];?>><br>
            
            <label for="">Role</label><br>
            <input type="text" name="role" class="form-text" value=<?=$row['role'];?>><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>