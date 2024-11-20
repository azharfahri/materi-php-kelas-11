<?php
class kucing{
    var $warna;
    var $jenis;
    public function makan(){
        echo "Kucing sedang makan";
    }
    public function minum(){
        echo "Kucing sedang minum air";
    }
}
 
$cetak = new kucing();

echo $cetak->makan()."<br>";
echo $cetak->minum()."<br>";
echo "Kucing warna :" . $cetak->warna = "hitam<br>";
echo "Jenis Kucing :" . $cetak->jenis = "persia<br>";
?>