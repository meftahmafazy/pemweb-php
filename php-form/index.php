<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulir</title>
            <!-- Google Fonts -->
            <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
        <style>
        body{
            background: linear-gradient(45deg, #609154, #5065ce);
            font-family: "Montserrat", sans-serif;
            
        }
        table{
            background-color:white;
            border-radius: 10px;
            display : flex;
            top: 20%;
            left: 50%;
 }

        </style>
</head>
<body>
    <table border="1" cellpadding="8" cellspacing="0">
    <tr>
    <th>Nama</th>
    <th>NIM</th>
    <th>Alamat</th>
    <th>Jenis Kelamin</th>
    <th>Peminatan</th>
    <th>Berkas</th>
    <th>Foto</th>
    </tr>

    <tr>
    <td><?= $_POST["nama"]?></td>
    <td><?= $_POST["nim"]?></td>
    <td><?= $_POST["alamat"]?></td>
    <td><?= $_POST["gender"]?></td>
    <td>
    <?php
    if(isset($_POST['peminatan'])){
        $minat = $_POST['peminatan'];
        foreach ($minat as $key => $value){
            echo "$value<br/>";
        }
    }
    ?>
    </td>

    <td>
    <?php 
    
    $namaFile = $_FILES['pdf']['name'];
    $sementara = $_FILES['pdf']['tmp_name'];

    $folder = "upload/";
    $upload = move_uploaded_file($sementara, $folder . $namaFile);
    
    if($upload){
        echo "Link: <a href='" . $folder . $namaFile . "'>" . $namaFile . "</a>";
        } else {
            echo "Upload Gagal!";
    }
    ?>
    </td>

    <td>
    <?php 
    $namaFile = $_FILES['foto']['name'];
    $sementara = $_FILES['foto']['tmp_name'];
    $folder = "upload/";
    $upload = move_uploaded_file($sementara, $folder . $namaFile);
    ?>
    <img src="<?php echo  "upload/" . $namaFile; ?>" width="100px">
    </td>
    </tr>
    </table><br>
    <center><a href="form.php">Kembali</a></center>
</body>
</html>