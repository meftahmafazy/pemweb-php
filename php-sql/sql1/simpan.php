<?php
include 'koneksi.php';
// menyimpan data kedalam variabel
$nim = $_POST['nim'];
$nama = $_POST['nama'];
$jurusan = $_POST['jurusan'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$alamat = $_POST['alamat'];

$query = "INSERT INTO tbl_mhs VALUES ('','$nim','$nama','$jenis_kelamin','$jurusan','$alamat')";
mysqli_query($konek,$query);

header("Location:index.php")
?>