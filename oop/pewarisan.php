<?php
class Kendaraan{
    public $warna = "Biru";
    public function a(){
        echo "Saya adalah kendaraan";
    }

}
    class Mobil extends Kendaraan{
        public function b(){
            echo $this->a();
            echo "<br>";
            echo "Warnanya : $this->warna";
        }
    }   
    $cetak = new Mobil();
    echo $cetak->b();

?>