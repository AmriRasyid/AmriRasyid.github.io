<?php
require "config.php";
if(isset($_GET['id'])){
    $query = mysqli_query($db,"SELECT * FROM valo WHERE id=$_GET[id]");
    $result = mysqli_fetch_assoc($query);
    $nama = $result['nama'];
    $rating = $result['rating'];
    $game = $result['game'];
}

if(isset($_POST['submit'])){
    $query = mysqli_query($db,"UPDATE valo SET nama='$_POST[nama]',rating='$_POST[rating]',game='$_POST[game]' WHERE id=$_GET[id]");
    if($query){
        header("Location:index.php");
    } else {
        echo "Update gagal";
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
        <h1 class="judul">Daftar valo</h1>
    
    <div class="form-class">
        <h3>Edit Data valo</h3>
        <form action="" method="post">
            <label for="">Nama</label><br>
            <input type="text" name="nama" class="form-text" value='<?=$nama?>'><br>
            
            <label for="">rating</label><br>
            <input type="text" name="rating" class="form-text" value='<?=$rating?>'><br>
            
            <label for="">game</label><br>
            <input type="text" name="game" class="form-text" value='<?=$game?>'><br>
            

            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        </form>
    </div>

</body>
</html>