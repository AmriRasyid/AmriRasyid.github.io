<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Razer Indonesia</title>
    <link rel="stylesheet" href="form.css">
</head>
<body>
    <center>
    <div class="form">
        <h1>Tambah pemain</h1>
        <form action="" method="post" enctype="multipart/form-data">

            <label for="">Nama</label><br>
            <input type="text" class='box' name="nama_agen" class="form-text"><br>
            
            <label for="">Rating</label><br>
            <input type="text" class='box' name="rating" class="form-text"><br>
            
            <label for="">Role</label><br>
            <input type="text" class='box' name="role" class="form-text"><br>

            <label for="">Tanggal Rilis :  </label><br>
            <input type="date" class='box' name="tanggal_rilis"><br><br>

            <label for="">Gambar</label><br>
            <input type="file" name="gambar"><br><br>
            
            <input type="submit" name="submit" value="Kirim" class="submit">
        
        </form>
    </div>
    </center>
</body>
</html>

<?php 

require 'config.php';

if(isset($_POST['submit'])){
    $nama_agen = $_POST['nama_agen'];
    $rating = $_POST['rating'];
    $role = $_POST['role'];
    $tanggal_rilis = $_POST['tanggal_rilis'];

    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));

    $gambar_baru = "$rating.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if(move_uploaded_file($tmp, 'gambar/'.$gambar_baru)){
        $query = "INSERT INTO agen (nama_agen, rating, `role`, tanggal_rilis, gambar) VALUES ('$nama_agen','$rating','$role','$tanggal_rilis','$gambar_baru')";
        $result = $db->query($query);

        if($result){
            header("Location:index_admin.php");
        }else{
            echo "gagal kirim";
        }
    }
}
?> 