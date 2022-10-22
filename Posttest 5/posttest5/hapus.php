<?php
require "config.php";
if(isset($_GET['id'])){
  $query = mysqli_query($db,"DELETE FROM valo WHERE id=$_GET[id]");
  if($query){
    header("Location:index.php");
  } else {
    echo "Delete gagal";
  }
}
?>