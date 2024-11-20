<?php
class kucing{
    public function __construct() {
        echo "saya kucing <br>" ;
    }
    public function __destruct()
    {
        echo "saya anak terakir";
    }
}

$cetak = new kucing();

?>