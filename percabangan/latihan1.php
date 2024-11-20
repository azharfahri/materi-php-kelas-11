<?php

$nama= "Fahri Azhar";
$kls= "XI RPL 1";
$nindo = 75;
$ninggris = 80;
$matematika = 90;
$produktif = 75;
$total = $nindo + $ninggris + $matematika + $produktif;
$rata = $total / 4;

echo "Nama  : $nama<br>";
echo "Kelas : $kls<br>";
echo "Nilai B.Indonesia  : $nindo<br>";
echo "Nilai B.Inggris : $ninggris<br>";
echo "Matematika  : $matematika<br>";
echo "Produktif : $produktif<br>";
echo "Rata-rata  : $rata<br><hr>";
if ($rata > 75) {
    echo "*Anda Lulus*";
}else {
    echo "Anda tidak lulus";
}


?>