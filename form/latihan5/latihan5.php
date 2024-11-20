<?php
if (isset($_POST['proses'])) {
    $no = $_POST['nomor'];
    $nama = $_POST['nama'];
    $unit = $_POST['unit'];
    $tgl = $_POST['tanggal'];
    $jabatan = $_POST['jabatan'];
    $lama = $_POST['kerja'];
    $status = $_POST['status'];
    $bpjs = $_POST['bpjs'];
    $pinjam = $_POST['pinjaman'];
    $tabungan = $_POST['tabungan'];
    $lainnya = $_POST['Lainnya'];
    
    if ($lama > 5 ) {
        $tunjang = 1000000;
    }else {
      $tunjang = 0;
    }

    if ($status == "Tetap") {
        $bonus = 500000;
    }else {
      $bonus = 0;
    }
    
    if ($jabatan == "Kepala Sekolah") {
        $gaji = 10000000;
    }elseif ($jabatan == "Wakasek") {
        $gaji = 7500000;
    }elseif ($jabatan == "Guru") {
        $gaji = 5000000;
    }elseif ($jabatan == "OB") {
        $gaji = 2500000;
    }

    $gajikot = $gaji + $tunjang + $bonus;
    $totpotong = $bpjs + $pinjam + $tabungan + $lainnya;
    $gajibersih = $gajikot - $totpotong;?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hasil</title>
  </head>
  <body>
    <div class="container text-primary">
     <center>
     <div class="card" style="width: 50rem;">
  <div class="card-header">
    <?php echo $nama; ?>
  </div>
  <ul class="list-group list-group-flush">
    <h3>Identitas Karyawan</h3>
    <li class="list-group-item text-primary">
      <table>
        <tr>
          <td>No</td>
          <td>:</td>
          <td><?php echo $no; ?></td>
        </tr>
        <tr>
          <td>Nama</td>
          <td>:</td>
          <td><?php echo $nama; ?></td>
        </tr>
        <tr>
          <td>Unit pendidikan</td>
          <td>:</td>
          <td><?php echo $unit; ?></td>
        </tr>
        <tr>
          <td>Tanggal Gaji</td>
          <td>:</td>
          <td><?php echo $tgl; ?></td>
        </tr>
        </table><br>

        <h3>Gaji</h3>
        <table>
        <tr>
          <td>Jabatan</td>
          <td>:</td>
          <td><?php echo $jabatan; ?></td>
        </tr>
        <tr>
          <td>Gaji</td>
          <td>:</td>
          <td><?php echo number_format ($gaji); ?></td>
        </tr>
        <tr>
          <td>Lama Kerja</td>
          <td>:</td>
          <td><?php echo $lama; ?> Tahun</td>
        </tr>
        <tr>
          <td>Tunjangan Lama Kerja</td>
          <td>:</td>
          <td><?php echo number_format ($tunjang); ?></td>
        </tr>
        <tr>
          <td>Status Kerja</td>
          <td>:</td>
          <td><?php echo $status; ?></td>
        </tr>
        <tr>
          <td>Bonus</td>
          <td>:</td>
          <td><?php echo number_format ($bonus); ?></td>
        </tr>
        <tr>
          <td><b>Gaji Kotor</b></td>
          <td>:</td>
          <td><?php echo number_format ($gajikot); ?></td>
        </tr>
      </table><br>

      <h3>Potongan</h3>
      <table>
      <tr>
          <td>BPJS</td>
          <td>:</td>
          <td><?php echo number_format ($bpjs); ?></td>
        </tr>
        <tr>
          <td>pinjaman</td>
          <td>:</td>
          <td><?php echo number_format ($pinjam); ?></td>
        </tr>
        <tr>
          <td>Tabungan</td>
          <td>:</td>
          <td><?php echo number_format ($tabungan); ?></td>
        </tr>
        <tr>
          <td>Lainnya</td>
          <td>:</td>
          <td><?php echo number_format($lainnya); ?></td>
        </tr>
        <tr>
          <td><b>Total Potongan</b></td>
          <td>:</td>
          <td><?php echo number_format($totpotong); ?></td>
        </tr>
      </table><br>
      <h3>Total</h3>
      <table>
        <tr>
          <td><h3>Gaji Bersih:<?php echo number_format($gajibersih) ?></h3></td>
        </tr>
      </table>


    </li>
  </ul>
</div>
     </center>   
    
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>


<?php    
}
?>