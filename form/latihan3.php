<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VALIDASI</title>
</head>
<body>
    <center>
        <img src="assalaam.png" alt="" style="width: 10%;">
        <form action="" method="post">
            <h2>Form Biodata Diri</h2>
            <table>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" value="" placeholder="Silahkan masukan nama" required></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="lahir" value="" placeholder="Silahkan masukan daerah"required></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tgl" id="" required></td>
                </tr>
                <tr>
                    <td>Jenis kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" id="" value="Laki-Laki"><label>Laki Laki</label>
                        <input type="radio" name="jk" id="" value="Perempuan"><label>Perempuan</label>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" id="" required></textarea></td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama" id="" required>
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Budha">Budha</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Pendidikan Terakhir</td>
                    <td>:</td>
                    <td>
                        <select name="sekolah" id="" required>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Status</td>
                    <td>:</td>
                    <td>
                        <select name="status" id="" required>
                            <option value="Sudah Menikah">Sudah Menikah</option>
                            <option value="Belum Menikah">Belum menikah</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Hobi</td>
                    <td>:</td>
                    <td>
                        <input type="checkbox" name="hobi" id="" value="Membaca"><label>Membaca</label>
                        <input type="checkbox" name="hobi" id="" value="Menulis"><label>Menulis</label>
                        <input type="checkbox" name="hobi" id="" value="Ngepush"><label>Ngepush</label>
                    </td>
                </tr>
                <tr>
                    <td>Cita-cita</td>
                    <td>:</td>
                    <td>
                        <select name="cita" id="" required>
                            <option value="Proggramer">Proggramer</option>
                            <option value="Ustad">Ustad</option>
                            <option value="Biduan">Biduan</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Kata-Kata Bijak</td>
                    <td>:</td>
                    <td><textarea name="quotes" id="" required></textarea></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="simpan" value="Simpan"></td>
                </tr>
            </table><br><br><br><br><br><br><br>
        </form>
    




<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $lahir = $_POST['lahir'];
    $tgl = $_POST['tgl'];
    $jk = $_POST['jk'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pendidikan = $_POST['sekolah'];
    $status = $_POST['status'];
    $hobi = $_POST['hobi'];
    $cita = $_POST['cita'];
    $kata = $_POST['quotes'];

    echo "Nama : $nama<br>";
    echo "Tempat Lahir : $lahir<br>";
    echo "Tanggal Lahir : $tgl<br>";
    echo "Jenis Kelamin : $jk<br>";
    echo "Alamat : $alamat<br>";
    echo "Agama : $agama<br>";
    echo "Pendidikan Terakhir : $pendidikan<br>";
    echo "Status : $status<br>";
    echo "Hobi : $hobi<br>";
    echo "Cita-cita : $cita<br>";
    echo "Kata-kata Bijak : $kata<br>";
    
}
?>
</center>
</body>
</html>