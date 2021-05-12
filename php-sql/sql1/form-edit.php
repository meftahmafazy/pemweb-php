<?php
include 'koneksi.php';
$id = $_GET["id"];
$query = "SELECT * FROM tbl_mhs where id_mahasiswa='$id'";
$mahasiswa = mysqli_query($konek,$query);
$row = mysqli_fetch_array($mahasiswa);
$jurusan = array('Matematika','Kimia','Biologi','Fisika','Farmasi','Ilmu Komputer','Statistika');
function active_radio_button($value, $input) {
    $result = $value == $input?'checked':'';
    return $result;
}
?>

<!DOCTYPE html>

<html>

<head>


</head>
<style>
.container{
    width:400px;
    height:300px;
    padding:20px;
    background:white;
    position: fixed;
    top: 50%;
    left: 50%;
    margin-top: -120px;
    margin-left: -220px;
    border : black solid 1px; 
}

</style>


<body>
<div class="container"> 
    <form action="edit.php" method="post">
    <input type="hidden" value="<?= $row['id_mahasiswa'];?>" name="id_mahasiswa">
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" name="nim" value="<?= $row['nim']; ?>"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text"  name="nama" value="<?= $row['nama']; ?>"></td>
            </tr>


            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L" 
                    <?= active_radio_button ("L", $row['jenis_kelamin'])?>>Laki-laki <br>
                    <input type="radio" name="jenis_kelamin" value="P"
                     <?= active_radio_button ("P", $row['jenis_kelamin'])?>>Perempuan <br>
                </td>
            </tr>

            <tr>
                <td>Jurusan </td>

                <td>
                    <select name="jurusan" id="jurusan">
                        <?php 
                        foreach ($jurusan as $j) {
                            echo "<option value='$j'";
                            echo $row['jurusan']==$j?'selected = "selected"':'';
                            echo ">$j</option>"; 
                        }
                        
                        ?>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat" value="<?= $row['alamat']; ?>"></td>>
            </tr>

            <tr>
                <td colspan="2 "><button type="submit" name="submit">ubah</button></td>
            </tr>
        </table>
    </form>
    </div>
</body>

</html>