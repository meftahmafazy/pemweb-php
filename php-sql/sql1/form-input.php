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

    <form action="simpan.php" method="post" name="form">
        <center><h1>Pendataan</h1></center>
        <table>
            <tr>
                <td>NIM</td>
                <td><input type="text" onkeyup="isi_otomatis()" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="text" onkeyup="isi_otomatis()" name="nama"></td>
            </tr>


            <tr>
                <td>Jenis Kelamin</td>
                <td>
                    <input type="radio" name="jenis_kelamin" value="L">Laki-laki <br>
                    <input type="radio" name="jenis_kelamin" value="P">Perempuan <br>
                </td>
            </tr>

            <tr>
                <td>Jurusan</td>

                <td>
                    <select name="jurusan" id="jurusan">
                        <option value="Matematika">Matematika</option>
                        <option value="Kimia">Kimia</option>
                        <option value="Biologi">Biologi</option>
                        <option value="Fisika">Fisika</option>
                        <option value="Farmasi">Farmasi</option>
                        <option value="Ilmu Komputer">Ilmu Komputer</option>
                        <option value="Statistika">Statistika</option>
                    </select>
                </td>
            </tr>

            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>

            <tr>
                <td colspan="2 "><button type="submit" name="submit">SIMPAN</button></td>
            </tr>


            <?php



            ?>







        </table>
    </form>
    </div>
</body>

</html>