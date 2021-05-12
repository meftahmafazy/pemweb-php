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
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Data Pegawai <span class="sr-only">(current)</span></a>
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

<!-- Tampilan -->
<div class="container-xl">

<!-- Title -->
<center><p class="h1">Daftar Pegawai</p></center><br>

<!-- Script Pagination  -->
<?php 
include 'koneksi.php';
$limit = 2;
$page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
$start = $limit * ($page - 1);
$get = mysqli_fetch_array(mysqli_query($conn, "SELECT COUNT(*) total FROM tbpegawai"));
$total = $get['total'];
$pages = ceil($total / $limit);
$pegawai = mysqli_query($conn, "SELECT * FROM tbpegawai LIMIT $start, $limit");
$next = $page + 1;
$prev = $page - 1;
?>

<form class="form-inline mb-4" method="get" action="">
    <input class="form-control mr-md-2" type="text" placeholder="Search" aria-label="Search" name="Search" autocomplete="off">
    <button class="btn btn-outline-dark my-2 my-sm-2" type="submit">Search</button>
  </form>

<!-- Searching -->
<?php 
include 'koneksi.php';

if($Search != ""){
  $pegawai = mysqli_query($conn, "SELECT * FROM  tbpegawai p JOIN tbunitkerja u ON p.id_unitkerja = u.id_unitkerja JOIN tbjabatan j ON p.id_jabatan = j.id_jabatan WHERE nama_pegawai LIKE '%".$Search."%' LIMIT $start,$limit ");
}else{
  $pegawai = mysqli_query($conn, "SELECT * FROM  tbpegawai p JOIN tbunitkerja u ON p.id_unitkerja = u.id_unitkerja JOIN tbjabatan j ON p.id_jabatan = j.id_jabatan LIMIT $start, $limit");
}
?>
<div class="table-responsive-lg">
<table class="table">

<!-- Header -->
  <thead>
    <tr class="text-center table-dark">
      <th scope="col">No</th>
      <th scope="col">NIP</th>
      <th scope="col">Nama</th>
      <th scope="col">Tempat Lahir</th>
      <th scope="col">Tanggal Lahir</th>
      <th scope="col">Unit Kerja</th>
      <th scope="col">Jabatan</th>
      <th scope="col">Foto</th>
      <th scope="col">Action</th>
    </tr>
  </thead>

  <!-- Isi Tabel -->
  <tbody class="text-center">
  <?php 
     include 'koneksi.php';
    if (mysqli_num_rows($pegawai) > 0) : 
      $no = $start + 1; 
     foreach ($pegawai as $row) : 
   $nip = $row['nip'].$row['id_jabatan']. $row['id_unitkerja'] ?>
    <tr>
      <td><?= $no; ?></td>
      <td><?= $nip ?></td>
      <td><?= $row['nama_pegawai']; ?></td>
      <td><?= $row['tempat_lahir']; ?></td>
      <td><?= $row['tanggal_lahir']; ?></td>
      <td><?= $row['unitkerja']; ?></td>
      <td><?= $row['jabatan']; ?></td>
      <td><img src="<?php echo "files/" . $row['foto']; ?>" width ="100"></td>
      <td> 
          <a href="form-update.php?id=<?= $row['nip']; ?>"><i class="far fa-edit text-dark fa-1x"></i></a>
          <a href="delete.php?id=<?= $row['nip']; ?>"><i class="fas fa-trash-alt text-dark fa-1x"></i></a>
      </td>
    </tr>
    <?php $no++; ?>
    <?php endforeach; ?>
    <?php else : 
       echo "<tr><td colspan='7'>Data tidak ada</td></tr>"; ?>
      <?php endif; ?>
  </tbody>
</table>
</div>
<!-- Pagination -->
<nav aria-label="Page navigation example">
            <ul class="pagination justify-content-center ">
               
                <li class="page-item text-light bg-dark">
                    <a class="page-link text-light bg-dark" <?php if($page > 1){ echo "href='?page=$prev'"; } ?> aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                    </a>
                </li>

                <?php
                for ($i = 1; $i <= $pages; $i++) {
                    if ($i != $page) {
                        echo "<li class='page-item text-light bg-dark'><a class='page-link text-light bg-dark' href='index.php?page=$i'>$i</a></li>";
                    } else {
                        echo "<li class='page-item active text-light bg-dark'><a class='page-link text-light bg-dark' href='#'>$i</a></li>";
                    }
                }
                ?>

                <li class="page-item text-light bg-dark">
                    <a class="page-link text-light bg-dark" <?php if($page < $pages) { echo "href='?page=$next'"; } ?> aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                    </a>
                </li>
            </ul>
        </nav>

</div>
  </body>
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</html>