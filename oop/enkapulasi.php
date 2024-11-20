<?php
class contoh{
    private $nama = "pari";
    public function kenalan(){
        echo "Assalamualaikum<br>";
        echo $this->nama;
    }
}
$cetak = new contoh();
echo $cetak->kenalan();



?>