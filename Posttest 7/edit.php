<?php 
    require 'config.php';

    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $result = mysqli_query($db, "SELECT * FROM valo WHERE id = '$id' ");
        $row = mysqli_fetch_array($result);
    }

    if(isset($_POST['submit'])){
        $nama = $_POST['nama'];
        $rating = $_POST['rating'];
        $game = $_POST['game'];

        $update = mysqli_query($db, "UPDATE valo SET nama='$nama', rating='$rating', game='$game' WHERE id='$id'");

        if($update){
            header("Location:index.php");
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GAME</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h2>Game</h2>
    </header>
    
    <div class="form-class">
        <h3>Edit</h3>
        <form action="" method="post">
            
            <label for="">Nama</label><br>
            <input type="text" name="nama" class="form-text" value=<?=$row['nama'];?>><br>
            
            <label for="">Rating</label><br>
            <input type="text" name="rating" class="form-text" value=<?=$row['rating'];?>><br>
            
            <label for="">Game</label><br>
            <input type="text" name="game" class="form-text" value=<?=$row['game'];?>><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>

</body>
</html>