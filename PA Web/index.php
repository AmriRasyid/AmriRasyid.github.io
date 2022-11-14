<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Razer Indonesia</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <center>
        <h1 class="judul">Valorant</h1> 
        <div class="list-table center" style="overflow-x: auto;">
            <th style="width: 20px;"  colspan="2">
                <a href="valorant.php" class="back">Back</a>
            </th>
            
            <table>
                <thead>
                    <tr>
                        <th colspan="6" class="thead">
                            <h3 class="center">Valorant Agent</h3>
                        </th>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th nowrap>Nama</th>
                        <th>rating</th>
                        <th>Role</th>
                        <th>Tanggal Rilis</th>
                        <th>Gambar</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require "config.php";
                    $query = mysqli_query($db, "SELECT * FROM agen");
                    $i = 1;
                    while ($row = mysqli_fetch_assoc($query)) {
                    ?>
                        <tr>
                            <td><?= $i ?></td>
                            <td><?=$row['nama_agen']?></td>
                            <td><?=$row['rating']?></td>
                            <td><?=$row['role']?></td>
                            <td><?=$row['tanggal_rilis']?></td>
                            <td><img src="gambar/<?=$row['gambar']?>" alt="" width="100px"></td>
                        </tr>
                    <?php
                        $i++;
                    }
                    ?>
                </tbody>
            </table>
        </div>
   </center>
</body>

</html>