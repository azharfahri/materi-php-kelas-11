<?php

class ppdb{
    public function data_diri($jurusan,$nama,$kelamin,$tempatlahir,$tgllahir,$nohp,$email){
        echo "Jurusan : $jurusan <br>";
        echo "Nama : $nama <br>";
        echo "Jenis kelamin : $kelamin <br>";
        echo "Tempat Lahir : $tempatlahir <br>";
        echo "Tanggal Lahir : $tgllahir <br>";
        echo "Nomor HP : $nohp <br>";
        echo "Email : $email <br>";
    }
    public function alamat_calon($provinsi,$kabkota,$kecamatan,$desa,$alamat,$kodepos){
        echo "Provinsi : $provinsi <br>";
        echo "Kabupaten / Kota : $kabkota <br>";
        echo "Kecamatan : $kecamatan <br>";
        echo "Desa / Kelurahan : $desa <br>";
        echo "Alamat : $alamat <br>";
        echo "Kode Pos : $kodepos <br>";
    }
    public function asal_sekolah($nama,$alamat){
        echo "Nama Asal Sekolah : $nama <br>";
        echo "Alamat : $alamat <br>";
    }
    public function data_ortu($nama,$pekerjaan,$nomor,$alamat){
        echo "Nama Lengkap Ayah / Ibu / Wali : $nama <br>";
        echo "Pekerjaan Ayah / Ibu / Wali : $pekerjaan <br>";
        echo "Nomor HP yang bisa dihubungi : $nomor <br>";
        echo "Alamat Lengkap : $alamat <br>";

    }
}

$diri = new ppdb();
echo $diri->data_diri("RPL","Fahri","Laki-Laki","Bandung","27-05-2008","089646","fahrikatepp@gmail.com");
echo "<hr>";
echo $diri->alamat_calon("Jawa Barat","Kota Bandung","Bojongloa Kidul","Cibaduyut Kidul","Cibaduyut,Bandung","43672");
echo "<hr>";
echo $diri->asal_sekolah("MTs Nurul Iman","Cibaduyut");
echo"<hr>";
echo $diri->data_ortu("Asep","Buruh","098767","Cibaduyut");



?>