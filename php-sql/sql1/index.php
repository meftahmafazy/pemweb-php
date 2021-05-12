

<!DOCTYPE html>


<html>

<head>

</head>

<body>
    <h2>Data mahasiswa</h2>

    <a href="form-input.php"> ISI DATA</a> <br>
    <form action="index.php" method="get" name="form_cari">
        Pencarian : <input type=" text " name="cari">
        <button type="submit" value="cari">Cari</button>
    </form>
    <?php
    $cari = "";
    if (isset($_GET["cari"])) {
        $cari = $_GET["cari"];
        echo "<p> Hasil Pencarian : <b>" . $cari . "</b> </p>";
    }
    ?>


    <table border="1" cellspacing="0" cellpadding="12px">
        <tr>
            <th>NO</th>
            <th>NIM</th>
            <th>NAMA</th>
            <th>GENDER</th>
            <th>JURUSAN</th>
            <th>ALAMAT</th>
            <th>ACTION</th>

        </tr>

        <?php
        include 'koneksi.php';



        //Pagination
        $limit = 2;
        $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
        $start = $limit * ($page - 1);
        $get = mysqli_fetch_array(mysqli_query($konek, "SELECT COUNT(*) total FROM tbl_mhs "));
        $total = $get['total'];
        $pages = ceil($total / $limit);
        $mhs = mysqli_query($konek, "SELECT * FROM tbl_mhs LIMIT $start, $limit");

   
        ?>

            <?php 
                 //searching
            include 'koneksi.php';
             if ($cari != "") {
                $mhs = mysqli_query($konek,"SELECT * FROM tbl_mhs WHERE nama LIKE '%".$cari."%' LIMIT $start,$limit ");

            }
             else{
                $mhs = mysqli_query($konek, "SELECT * FROM tbl_mhs LIMIT $start, $limit");
            }
            
            ?>  

            <?php if(mysqli_num_rows($mhs) > 0) : ?>
            <?php $no = $start + 1; ?>
            <?php foreach ($mhs as $row) : ?>
                <?php $jenis_kelamin = $row['jenis_kelamin'] == 'p' ? 'Perempuan' : 'Laki-laki'; ?>
                <tr>
                    <td><?= $no; ?></td>
                    <td><?= $row['nim']; ?></td>
                    <td><?= $row['nama']; ?></td>
                    <td><?= $row['jenis_kelamin']; ?></td>
                    <td><?= $row['jurusan']; ?></td>
                    <td><?= $row['alamat']; ?></td>
                    <td> <a href="form-edit.php?id=<?= $row['id_mahasiswa']; ?>"> edit</a> |
                        <a href="delete.php?id=<?= $row['id_mahasiswa']; ?>"> hapus</a>


                    </td>



                </tr>
                <?php $no++; ?>


            <?php endforeach; ?>
            <?php else : ?>
            <?php echo "<tr> <td colspan='7'>Data tidak ditemukan</td></tr"; ?>
            <?php endif ; ?>
     




    </table>
    <?php
    for ($i = 1; $i <= $pages; $i++) {
        echo "<a href='?page=" . $i . "'>" . $i . "</a>";
    }
    ?>

</body>


</html>