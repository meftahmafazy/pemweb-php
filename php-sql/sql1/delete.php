<?php
 include 'koneksi.php';

 $id_mahasiswa = $_GET['id'];
$query = "DELETE from tbl_mhs where id_mahasiswa = '$id_mahasiswa'";
mysqli_query($konek,$query);
header("location:index.php");
?>