<?php
if (isset($_POST['simpan'])) {
    $jurusan = $_POST['jurusan'];
    $nama = $_POST['nama'];
    $kelamin = $_POST['jk'];
    $tmptlahir = $_POST['tmptlahir'];
    $tgllahir = $_POST['tgllahir'];
    $nomor = $_POST['nomor'];
    $email = $_POST['email'];

    $provinsi = $_POST['provinsi'];
    $kota = $_POST['kabupaten_kota'];
    $kecamatan = $_POST['kecamatan'];
    $desa = $_POST['desa'];
    $alamat = $_POST['alamat'];
    $kodepos = $_POST['kodepos'];

    $asalsekolah = $_POST['asalsekolah'];
    $alamatsekolah = $_POST['alamatsekolah'];

    $ortu = $_POST['ortu'];
    $namaortu = $_POST['wali'];
    $kerja = $_POST['kerja'];
    $noortu = $_POST['noortu'];
    $alamatortu = $_POST['alamatortu'];?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>PPDB</title>
  </head><br><br><br>
<body>
    

<div class="container text-primary">
     <center>
     <div class="card" style="width: 50rem;">
  <div class="card-header">
    <h1>Data PPDB</h1>
  </div>
  <ul class="list-group list-group-flush">
    <li class="list-group-item text-primary">
    
    
       


    

<?php
class ppdb{
    public function data_diri($jurusan,$nama,$kelamin,$tempatlahir,$tgllahir,$nohp,$email){?>
    <h3>Data Diri</h3>
    <table>
    <tr>
        <td>Jurusan</td>
        <td>:</td>
        <td><?php echo $jurusan ?></td>
    </tr>
    <tr>
        <td>Nama</td>
        <td>:</td>
        <td><?php echo $nama ?></td>
    </tr>
    <tr>
        <td>Jenis Kelamin</td>
        <td>:</td>
        <td><?php echo $kelamin ?></td>
    </tr>
    <tr>
        <td>Tempat Lahir</td>
        <td>:</td>
        <td><?php echo $tempatlahir ?></td>
    </tr>
    <tr>
        <td>Tanggal Lahir</td>
        <td>:</td>
        <td><?php echo $tgllahir ?></td>
    </tr>
    <tr>
        <td>Nomor HP</td>
        <td>:</td>
        <td><?php echo $nohp ?></td>
    </tr>
    <tr>
        <td>Email</td>
        <td>:</td>
        <td><?php echo $email ?></td>
    </tr>
    </table><br>

    <?php
    }


    public function alamat_calon($provinsi,$kabkota,$kecamatan,$desa,$alamat,$kodepos){?>
    <h3>Alamat Calon</h3>
    <table>
    <tr>
        <td>Provinsi</td>
        <td>:</td>
        <td><?php echo $provinsi ?></td>
    </tr>
    <tr>
        <td>Kabupaten / Kota</td>
        <td>:</td>
        <td><?php echo $kabkota ?></td>
    </tr>
    <tr>
        <td>Kecamatan</td>
        <td>:</td>
        <td><?php echo $kecamatan ?></td>
    </tr>
    <tr>
        <td>Desa</td>
        <td>:</td>
        <td><?php echo $desa ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $alamat ?></td>
    </tr>
    <tr>
        <td>Kode Pos</td>
        <td>:</td>
        <td><?php echo $kodepos ?></td>
    </tr>
    </table>
    <?php
    }


    public function asal_sekolah($nama,$alamat){?>
    <h3>Asal Sekolah</h3>
    <table>
    <tr>
        <td>Nama Asal Sekolah</td>
        <td>:</td>
        <td><?php echo $nama ?></td>
    </tr>
    <tr>
        <td>Alamat</td>
        <td>:</td>
        <td><?php echo $alamat ?></td>
    </tr>
    </table>
    <?php
    }


    public function data_ortu($jenis,$nama,$pekerjaan,$nomor,$alamat){?>
     <h3>Data Orang Tua</h3>
    <table>
    <tr>
        <td>Ayah / Ibu / Wali</td>
        <td>:</td>
        <td><?php echo $jenis ?></td>
    </tr>
    <tr>
        <td>Nama Lengkap Ayah / Ibu / Wali</td>
        <td>:</td>
        <td><?php echo $nama ?></td>
    </tr>
    <tr>
        <td>Pekerjaan Ayah / Ibu / Wali</td>
        <td>:</td>
        <td><?php echo $pekerjaan ?></td>
    </tr>
    <tr>
        <td>Nomor Hp Yang Bisa Dihubungi</td>
        <td>:</td>
        <td><?php echo $nomor ?></td>
    </tr>
    <tr>
        <td>Alamat Lengkap</td>
        <td>:</td>
        <td><?php echo $alamat ?></td>
    </tr>
    </table>
    <?php
    }
}

$diri = new ppdb();
echo $diri->data_diri($jurusan,$nama,$kelamin,$tmptlahir,$tgllahir,$nomor,$email);
echo "<hr>";
echo $diri->alamat_calon($provinsi,$kota,$kecamatan,$desa,$alamat,$kodepos);
echo "<hr>";
echo $diri->asal_sekolah($asalsekolah,$alamatsekolah);
echo"<hr>";
echo $diri->data_ortu($ortu,$namaortu,$kerja,$noortu,$alamatortu);
}


?>

</li>
  </ul>
</div>
     </center>   
    
    </div><br>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>
