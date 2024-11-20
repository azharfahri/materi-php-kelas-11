<?php
function biodata($nama,$tempat_lahir,$tgl_lahir,$jk,$agama,$alamat,$hobi){
echo "Nama : $nama<br>";
echo "Tempat Lahir : $tempat_lahir<br>";
echo "Tanggal Lahir : $tgl_lahir<br>";
echo "Jenis Kelamin : $jk<br>";
echo "Agama : $agama<br>";
echo "Alamat : $alamat<br>";
echo "Hobi : $hobi<br>";

}

biodata("Fahri","Bandung","27 Mei 2008","Laki-Laki","Islam","Cibaduyut","Bernafas");


function menghitung($bil1,$bil2){
echo "Bilangan pertama : $bil1<br>";
echo "Bilangan kedua : $bil2<br>";
$hasil = $bil1 + $bil2;
echo "Hasil : $hasil";
}

menghitung(10,20);



?>