<?php
class bangun_datar{
    public $segitiga;
    public $persegi;
    public $perpanjang;
    public $lingkaran;

}
class luas extends bangun_datar{
    public function segitiga($a,$t){
        echo "<h3>Menghitung Luas Segitiga</h3>";
        echo "Panjang : $a<br>";
        echo "Tinggi : $a<br>";
        $this->segitiga = $a*$t/2;
        echo "Hasilnya : $this->segitiga";
    }
    
    public function persegi($s){
        echo "<h3>Menghitung Luas Persegi</h3>";
        echo "Panjang sisi : $s<br>";
        $this->persegi = $s*$s;
        echo "Hasilnya : $this->persegi";
    }
    
    public function persegipanjang($p, $l){
        echo "<h3>Menghitung Luas Persegi Panjang</h3>";
        echo "Panjang : $p<br>";
        echo "Lebar : $l<br>";
        $this->perpanjang = $p*$l;
        echo "Hasilnya : $this->perpanjang";
    }
    
    public function lingkaran($r){
        echo "<h3>Menghitung Luas lingkaran</h3>";
        echo "Jari-jari : $r<br>";
        $this->lingkaran = $r*$r*22/7;
        echo "Hasilnya : $this->lingkaran";
    }
}


class keliling extends bangun_datar{
    public function kelsegitiga($a,$b,$c){
        echo "<h3>Menghitung keliling Segitiga</h3>";
        echo "Panjang sisi 1 : $a<br>";
        echo "Panjang sisi 2 : $b<br>";
        echo "Panjang sisi 3 : $c<br>";
        $this->segitiga = $a*$b*$c;
        echo "Hasilnya : $this->segitiga";
    }
    
    public function kelpersegi($s){
        echo "<h3>Menghitung keliling Persegi</h3>";
        echo "Panjang sisi : $s<br>";
        $this->persegi = $s+$s+$s+$s;
        echo "Hasilnya : $this->persegi";
    }
    
    public function kelpersegipanjang($p, $l){
        echo "<h3>Menghitung keliling Persegi Panjang</h3>";
        echo "Panjang : $p<br>";
        echo "Lebar : $l<br>";
        $this->perpanjang = 2* ($p+$l);
        echo "Hasilnya : $this->perpanjang";
    }
    
    public function kellingkaran($r){
        echo "<h3>Menghitung keliling lingkaran</h3>";
        echo "Jari-jari : $r<br>";
        $this->lingkaran = 2*22/7*$r;
        echo "Hasilnya : $this->lingkaran";
    }
}
$hasil= new luas();
echo $hasil->segitiga(5,7);
echo $hasil->persegi(5);
echo $hasil->persegipanjang(9,11);
echo $hasil->lingkaran(7);

echo "<hr>";

$hasil2= new keliling();
echo $hasil2->kelsegitiga(6,2,3);
echo $hasil2->kelpersegi(2);
echo $hasil2->kelpersegipanjang(3,11);
echo $hasil2->kellingkaran(7);



?>