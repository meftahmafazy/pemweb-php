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
      <li class="nav-item active">
        <a class="nav-link" href="input.php">Formulir <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="index.php">Data Pegawai</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="jabatan.php">Data Jabatan</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="unitkerja.php">Data Unit Kerja</a>
      </li>
    </ul>
  </div>
</nav>

<div class="container-xl">

<!-- Title -->
<center><p class="h1">Formulir Pegawai</p></center><br>

<!-- Formulir -->

<!-- Baris 1 -->
<form action="simpan.php" method="post" name="form" enctype="multipart/form-data">
<div class="form-row">
    <div class="form-group col-md-12">
    <label for="firstname">Nama Lengkap</label>
      <input type="text" class="form-control" placeholder="Nama lengkap" name="nama_pegawai" required>
    </div>
  </div>

<!-- Baris 2 -->
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Tempat Lahir</label>
      <input type="text" class="form-control" id="inputEmail4" name="tempat_lahir" required>
    </div>

    <div class="form-group col-md-6">
      <label for="tgllahir">Tanggal Lahir</label>
      <input class="form-control" type="date" value="yyyy-mm-dd" id="tgl" name="tanggal_lahir" required>
  </div>
  </div>

<!-- Baris 3 -->
  <div class="form-row">
  <div class="form-group col-md-6">
      <label for="custom-select">Unit Kerja</label>
      <select id="custom-select" class="form-control" name="unitkerja" required>
        <option selected disable value ="">Choose...</option>
        <?php 
        include 'koneksi.php';
        $data = mysqli_query($conn, "SELECT * FROM tbunitkerja");
        foreach ($data as $row){
          ?>
          <option value="<?= $row['id_unitkerja'] ?>"> <?= $row['unitkerja'] ?></option>
        <?php } ?>
      </select>
    </div>
    <div class="form-group col-md-6">
      <label for="inputjbt">Jabatan</label>
      <select id="inputjbt" class="form-control" name="jabatan" required>
        <option selected disable value ="">Choose...</option>
        <?php 
        include 'koneksi.php';
        $data = mysqli_query($conn, "SELECT * FROM tbjabatan");
        foreach ($data as $row){
          ?>
          <option value="<?= $row['id_jabatan'] ?>"> <?= $row['jabatan'] ?></option>
        <?php } ?>
      </select>
    </div>
    </div>

  <!-- Baris 4 -->
  <div class="form-row">
    <div class="form-group col-md-12">
    <label for="inputNip">Upload Foto (.jpg/.png/.jpeg)</label>
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01" multiple accept =".jpg, .png, .jpeg" name="foto" required>
    <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
  </div>
</div>
  </div>
  <button type="submit" class="btn btn-primary">Daftar</button>
</form>
</div>

  </body>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</html>