<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="shortcut icon" href="https://simari.ulm.ac.id/logo/ulm.png">
    <title>Sistem Informasi</title>

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/61e5cb755d.js" crossorigin="anonymous"></script>
  </head>
  <body>

<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
<img src="htdocs/pemweb/phpsql/sql2/komputer.png" alt="">
  <a class="navbar-brand" href="#">FMIPA ULM</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href="input.php">Formulir</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="index.php">Data Pegawai</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="jabatan.php">Data Jabatan <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="unitkerja.php">Data Unit Kerja</a>
      </li>
    </ul>
  </div>
</nav>

<!-- Tampilan -->
<div class="container-xl">

<!-- Title -->
<center><p class="h1">Daftar Jabatan</p></center><br>

<table class="table table-hover">

<!-- Header -->
  <thead>
    <tr class="text-center table-dark">
      <th scope="col">No</th>
      <th scope="col">Nama Jabatan</th>
    </tr>
  </thead>

  <!-- Isi Tabel -->
  <tbody class="text-center">
    <tr>
<?php 
    include 'koneksi.php';
    $sql = "SELECT * FROM tbjabatan";
    $jab = mysqli_query($conn, $sql);
    $no = 1;
?>
<?php foreach ($jab as $row) : ?>
      
      <td><?= $no; ?></td>
      <td><?= $row['jabatan']; ?></td>

    </tr>
    <?php $no++; ?>
    <?php endforeach; ?>
        </tr>
  </tbody>
</table>

</div>
  </body>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</html>