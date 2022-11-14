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
            <input type="text" class='box' name="nama_senjata" class="form-text"><br>

            <label for="">Deskripsi </label><br>
            <input type="text" class='box' name="deskripsi_senjata"><br><br>

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
    $nama_senjata = $_POST['nama_senjata'];
    $deskripsi_senjata = $_POST['deskripsi_senjata'];

    $gambar = $_FILES['gambar']['name'];
    $x = explode('.', $gambar);
    $ekstensi = strtolower(end($x));

    $gambar_baru = "$deskripsi_senjata.$ekstensi";
    $tmp = $_FILES['gambar']['tmp_name'];

    if(move_uploaded_file($tmp, 'gambar/'.$gambar_baru)){
        $query = "INSERT INTO senjata (nama_senjata, deskripsi_senjata, gambar) VALUES ('$nama_senjata','$deskripsi_senjata','$gambar_baru')";
        $result = $db->query($query);

        if($result){
            header("Location:wp_admin.php");
        }else{
            echo "gagal kirim";
        }
    }
}
?> 