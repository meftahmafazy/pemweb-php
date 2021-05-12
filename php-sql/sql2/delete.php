<?php 
include 'koneksi.php';
$id = $_GET['id'];
$query = "DELETE from tbpegawai where nip = '$id'";
mysqli_query($conn,$query);
header("location:index.php");
?>