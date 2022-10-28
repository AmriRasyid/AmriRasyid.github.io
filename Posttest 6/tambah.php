<?php
  require "config.php";

  if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $rating = $_POST['rating'];
    $game = $_POST['game'];
    $query = mysqli_query($db,"INSERT INTO valo (nama,rating,game) VALUES ('$nama','$rating','$game')");
    var_dump($_FILES);

    if(isset($_POST['submit'])){
      if($query){
          header("Location:index.php");
      } else {
          echo "Update gagal";
      }
  }
  }
?> 