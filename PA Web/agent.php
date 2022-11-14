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
        <h1 class="judul">Leaderboard</h1> 
        <div class="list-table center" style="overflow-x: auto;">
            
            <table>
                <thead>
                    <tr>
                        <th colspan="6" class="thead">
                            <h3 class="center">Leaderboard</h3>
                        </th>
                        <th style="width: 20px;" colspan="2">
                            <a href="logout.php" class="tambah">Logout</a>
                            <a href="valorant.php" class="tambah">Back</a>
                        </th>
                    </tr>
                    <tr>
                        <th>No</th>
                        <th nowrap>Nama</th>
                        <th>rating</th>
                        <th>game</th>
                        <th>Date Update</th>
                        <th>Gambar</th>
                        <th>edit</th>
                        <th>hapus</th>
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
                            <td><?=$row['nama']?></td>
                            <td><?=$row['rating']?></td>
                            <td><?=$row['game']?></td>
                            <td><?=$row['tanggal']?></td>
                            <td><img src="gambar/<?=$row['gambar']?>" alt="" width="100px"></td>
                            <td class="edit">
                                <a href="edit.php?id=<?=$row['id']?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                        <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                                    </svg>
                                </a>
                            </td>
                            <td class="hapus">
                                <a href="hapus.php?id=<?=$row['id']?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                    </svg>
                                </a>
                            </td>
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