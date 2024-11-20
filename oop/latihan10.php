<?php
echo "<center><h1>Penggajihan Karyawan</h1></center>";
class penggajihan{
    public $karyawan;
    public $jabatan;
    public $gajipokok;
    public $tunjang;
    public $totpotong;
    public $gajibersih;







    public function gajipokok($nama,$jabatan){
        echo "<h3>Gaji Pokok</h3>";
        echo "Nama Karyawan: $nama<br> ";
        if ($jabatan == "direktur") {
            $this->gajipokok = 10000000;
        }
        elseif ($jabatan == "manager") {
            $this->gajipokok = 7500000;
        }
        elseif ($jabatan == "karyawan") {
            $this->gajipokok = 5000000;
        }
        elseif ($jabatan == "ob") {
            $this->gajipokok = 2500000;
        }
        else{
            
            $this->gajipokok = 0;
        }
        echo "Jabatan : $jabatan <br>";
        echo "Gaji Pokok :" . number_format($this->gajipokok);
        echo "<hr>";

    }
    public function tunjangan($pendidikan){
        echo "<h3>Tunjangan</h3>";
        echo "Pendidikan : $pendidikan<br>";
        if ($pendidikan == "smk") {
            $this->tunjang = 750000;
        }
        elseif ($pendidikan == "sma") {
            $this->tunjang = 750000;
        }
        elseif ($pendidikan == "s1") {
            $this->tunjang = 1000000;
        }
        elseif ($pendidikan == "smp") {
            $this->tunjang = 500000;
        }
        elseif ($pendidikan == "sd") {
            $this->tunjang = 250000;
        }
        else {
            echo "Pendidikan : Tidak Diketahui<br>";
        }
        echo "Tunjangan Pendidikan : " . number_format($this->tunjang);
        echo "<hr>";
    }
    public function potongan($tabungan,$pinjaman){
        echo "<h3>Potongan</h3>";
        echo "Tabungan : $tabungan <br>";
        echo "Pinjaman : $pinjaman<br>";
        $this->totpotong = $tabungan + $pinjaman;
        echo "Total potongan :" . number_format($this->totpotong);
        echo "<hr>"; 
    }
    public function bersih(){
        $this->gajibersih = $this->gajipokok + $this->tunjang - $this->totpotong;
        echo "<h3>Total Gaji Bersih</h3>";
        echo "Total Gaji Bersih :" . number_format($this->gajibersih);
    }

}
$cetak = new penggajihan();
echo $cetak->gajipokok("pari","direktur");
echo $cetak->tunjangan("s1");
echo $cetak->potongan("10000","60000");
echo $cetak->bersih();
?>