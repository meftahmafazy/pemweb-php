<?php 

include 'koneksi.php';
// menyimpan data kedalam variabel
$nama = $_POST['nama_pegawai'];
$tmpt = $_POST['tempat_lahir'];
$tgl = $_POST['tanggal_lahir'];
$unit = $_POST['unitkerja'];
$jabatan = $_POST['jabatan'];
$temp = $_FILES['foto']['tmp_name'];
$foto = $_FILES['foto']['name'];
$folder = "files/";
move_uploaded_file($temp, $folder.$foto);

$query = "INSERT INTO tbpegawai VALUES ('','$unit','$jabatan','$nama','$tmpt','$tgl','$foto')";
mysqli_query($conn,$query);

header("Location:index.php")

?>