<?php
class bangundatar{
    public $segitiga;
    public $persegi;
    public $perpanjang;
    public $lingkaran;
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

$hasil= new bangundatar();
echo $hasil->segitiga(5,7);
echo $hasil->persegi(5);
echo $hasil->persegipanjang(9,11);
echo $hasil->lingkaran(7);

?>