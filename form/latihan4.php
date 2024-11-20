<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 4</title>
</head>
<body>
    <center>
    <img src="assalaam.png" alt="" style="width: 10%;">
        <h2>Nilai Ujian Nasional</h2>
        <form action="" method="post">
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="" required></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" value="" required></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td>
                    <select name="jurusan" id="" required>
                        <option value="Teknik kendaraan ringan">TKRO</option>
                        <option value="Rekayasa perangkat lunak">RPL</option>
                        <option value="Teknik bisnis sepeda motor">TBSM</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><b>Nilai Ujian</b></td>
            </tr>
            <tr>
                <td>Nilai B.indonesia</td>
                <td>:</td>
                <td><input type="number" name="bindo" id=""required></td>
            </tr>
            <tr>
                <td>Nilai B.inggris</td>
                <td>:</td>
                <td><input type="number" name="binggris" id="" required></td>
            </tr>
            <tr>
                <td>Nilai Matematika</td>
                <td>:</td>
                <td><input type="number" name="mtk" id="" required></td>
            </tr>
            <tr>
                <td>Nilai Produktif</td>
                <td>:</td>
                <td><input type="number" name="produk" id="" required></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="simpan"></td>
            </tr>
            </form>
        </table><br><br><br>


<?php
if (isset($_POST['simpan'])) {
    $nama= $_POST['nama'];
    $kls= $_POST['kelas'];
    $jurus= $_POST['jurusan'];
    $nindo = $_POST['bindo'];
    $ninggris = $_POST['binggris'];
    $matematika = $_POST['mtk'];
    $produktif = $_POST['produk'];
    $total = $nindo + $ninggris + $matematika + $produktif;
    $rata = $total / 4;?>
    <h3>Hasil Nilai</h3>
    <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $nama; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?php echo $kls ;?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><?php echo $jurus; ?></td>
            </tr>
            <tr>
                <td>Nilai B.indonesia</td>
                <td>:</td>
                <td><?php echo $nindo; ?></td>
            </tr>
            <tr>
                <td>Nilai B.inggris</td>
                <td>:</td>
                <td><?php echo $ninggris; ?></td>
            </tr>
            <tr>
                <td>Nilai Matematika</td>
                <td>:</td>
                <td><?php echo $matematika; ?></td>
            </tr>
            <tr>
                <td>Nilai Produktif</td>
                <td>:</td>
                <td><?php echo $produktif; ?></td>
            </tr>
            <tr>
                <td>Nilai rata-rata</td>
                <td>:</td>
                <td><?php echo $rata; ?></td>
            </tr>
            <tr>
                <td>Keterangan</td>
                <td>:</td>
            <?php
            if ($rata > 75) {?>
                <td>Tuntas</td>
            </tr>
            <?php }else {?>
                <td> Tidak Tuntas</td>
            </tr>
            <?php  }
            }
            ?>
        </table>

</center>
</body>
</html>