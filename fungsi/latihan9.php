<?php

function segitiga($a,$t){
    echo "<h3>Menghitung Luas Segitiga</h3>";
    echo "Panjang : $a<br>";
    echo "Tinggi : $a<br>";
    $hitung = $a*$t/2;
    echo "Hasilnya : $hitung";
}

function persegi($s){
    echo "<h3>Menghitung Luas Persegi</h3>";
    echo "Panjang sisi : $s<br>";
    $hitung = $s*$s;
    echo "Hasilnya : $hitung";
}

function persegipanjang($p, $l){
    echo "<h3>Menghitung Luas Persegi Panjang</h3>";
    echo "Panjang : $p<br>";
    echo "Lebar : $l<br>";
    $hitung = $p*$l;
    echo "Hasilnya : $hitung";
}

function lingkaran($r){
    echo "<h3>Menghitung Luas lingkaran</h3>";
    echo "Jari-jari : $r<br>";
    $hitung = $r*$r*22/7;
    echo "Hasilnya : $hitung";
}



segitiga(5,7);
persegi(5);
persegipanjang(9,11);
lingkaran(16);