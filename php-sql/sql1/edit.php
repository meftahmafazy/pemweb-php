<?php 
    include 'koneksi.php';
    $id_mahasiswa = $_POST['id_mahasiswa'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $alamat = $_POST['alamat'];

    $query = "UPDATE tbl_mhs  SET 
                nim = '$nim', 
                nama = '$nama', 
                jenis_kelamin = '$jenis_kelamin',
                jurusan = '$jurusan', 
                alamat = '$alamat' 
                WHERE id_mahasiswa = '$id_mahasiswa'";


    mysqli_query($konek,$query);

    header("location:index.php")
?>