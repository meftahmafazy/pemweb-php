<?php 

include 'koneksi.php';
// menyimpan data kedalam variabel
$nip = $_POST['nip'];
$nama = $_POST['nama_pegawai'];
$tmpt = $_POST['tempat_lahir'];
$tgl = $_POST['tanggal_lahir'];
$unit = $_POST['unitkerja'];
$jabatan = $_POST['jabatan'];
$temp = $_FILES['foto']['tmp_name'];
$foto = $_FILES['foto']['name'];
$folder = "files/";
move_uploaded_file($temp, $folder.$foto);

$query = "UPDATE tbpegawai SET
 id_unitkerja = '$unit',
 id_jabatan='$jabatan',
 nama_pegawai = '$nama',
 tempat_lahir ='$tmpt',
 tanggal_lahir='$tgl',
 foto = '$foto'
WHERE nip ='$nip'";
mysqli_query($conn,$query);
// var_dump($_POST);
// die;

header("Location:index.php")

?>