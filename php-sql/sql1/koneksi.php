<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // Konfigurasi Database
        $host = "localhost";
        $user = "root";
        $password = "";
        $database = "db_mahasiswa";

        // perintah php untuk akses ke database
        $konek = mysqli_connect($host, $user, $password, $database);
        if(!$konek){
            die("Gagal terhubung dengan database : " . mysqli_connect_error());
        }
    ?>
</body>
</html>