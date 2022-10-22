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
    <h1 class="judul">Leaderboard</h1>
    <div class="form-class">
        <h3>Tambah Pemain</h3>
        <form action="tambah.php" method="post" enctype="multipart/form-data">

            <label for="">Nama</label><br>
            <input type="text" name="nama" class="form-text"><br>

            <label for="">rating</label><br>
            <input type="text" name="rating" class="form-text"><br>

            <label for="">game</label><br>
            <input type="text" name="game" class="form-text"><br>


        

            <input type="submit" name="submit" value="Kirim" class="btn-submit">

        </form>
    </div>

</body>

</html>