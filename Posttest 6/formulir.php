<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Razer Indonesia</title>
    <link rel="stylesheet" href="tambah.css">
</head>
<body>
    
    <div class="form-class">
        <h3>Tambah pemain</h3>
        <form action="" method="post" enctype="multipart/form-data">

            <label for="">Nama</label><br>
            <input type="text" name="name" class="form-text"><br>
            
            <label for="">Rating</label><br>
            <input type="text" name="rating" class="form-text"><br>
            
            <label for="">Game</label><br>
            <input type="text" name="game" class="form-text"><br>

            <label for="">Date Update :  </label><br>
            <input type="date" name="tanggal"><br><br>

            <label for="">Foto</label><br>
            <input type="file" name="gambar"><br><br>
            
            <input type="submit" name="submit" value="Kirim" class="btn-submit">
        
        </form>
    </div>
</body>
</html>

<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $rating = $_POST['rating'];
    $game = $_POST['game'];
    $tanggal = $_POST['tanggal'];

    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));

    $gambar_baru = "$rating.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if(move_uploaded_file($tmp, 'gambar/'.$gambar_baru)){
        $query = "INSERT INTO valo (nama, rating, game, tanggal, gambar) VALUES ('$nama','$rating','$game','$tanggal','$gambar_baru')";
        $result = $db->query($query);

        if($result){
            header("Location:index.php");
        }else{
            echo "gagal kirim";
        }
    }
}
?> 