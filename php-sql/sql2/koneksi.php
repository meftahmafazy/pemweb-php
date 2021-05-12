<?php 

// Konfigurasi Database
$host = "localhost";
$user = "root";
$password = "";
$database = "db_pegawai";

// Akses ke database
$conn = mysqli_connect($host, $user, $password, $database);
        if(!$conn){
            die("Gagal terhubung dengan database : " . mysqli_connect_error());
        }
        
?>