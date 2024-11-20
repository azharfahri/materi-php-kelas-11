<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALIDASI</title>
</head>
<body>
    <form action="" method="post">
        <h2 align="center">Biodata Siswa</h2>
        <table align="center" width="50%">
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama" value="" placeholder="Silahkan masukan nama"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><input type="text" name="kelas" value="" placeholder="Silahkan masukan kelas"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="Simpan"></td>
            </tr>
        </table><br><br><br><br><br><br><br>
    </form>

</body>
</html>

<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    ?>
    <table align="center">
        <h3 align="center">Hai</h3>
        <tr>
            <td>Nama anda</td>
            <td>:</td>
            <td><?php echo $nama; ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><?php echo $kelas; ?></td>
        </tr>
    </table>
<?php  
}
?>