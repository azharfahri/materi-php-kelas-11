<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $jurusan = $_POST['jurusan'];

    $mtkhari = $_POST['mtkhari'];
    $mtktugas = $_POST['mtktugas'];
    $mtkuts = $_POST['mtkuts'];
    $mtkuas = $_POST['mtkuas'];


    $indohari = $_POST['indohari'];
    $indotugas = $_POST['indotugas'];
    $indouts = $_POST['indouts'];
    $indouas = $_POST['indouas'];

    $inggrishari = $_POST['inggrishari'];
    $inggristugas = $_POST['inggristugas'];
    $inggrisuts = $_POST['inggrisuts'];
    $inggrisuas = $_POST['inggrisuas'];

    $produkhari = $_POST['produkhari'];
    $produktugas = $_POST['produktugas'];
    $produkuts = $_POST['produkuts'];
    $produkuas = $_POST['produkuas'];
?>
<center>
        <table>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><?php echo $nama ; ?></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td>:</td>
                <td><?php echo $kelas ; ?></td>
            </tr>
            <tr>
                <td>Jurusan</td>
                <td>:</td>
                <td><?php echo $jurusan ; ?></td>
            </tr>
        </table>  
</center>

<center>
<table border="1" cellspacing="0" width="100%">
    <tr>
    <td>Mapel</td>
    <td>Harian</td>
    <td>Tugas</td>
    <td>UTS</td>
    <td>UAS</td>
    <td>Rata-Rata</td>
    <td>Grade</td>
    </tr>



<?php    
    class matematika{
    public $rata;
    public $total;
        public function mtk($mtkharian,$mtktugas2,$mtkutengahs,$mtkuakhirs){
            $this->total = $mtkharian + $mtktugas2 + $mtkutengahs + $mtkuakhirs;
            $this->rata = $this->total / 4;
            ?>
            
                    <tr>
                        <td>Matematika</td>
                        <td><?php echo $mtkharian  ?></td>
                        <td><?php echo $mtktugas2  ?></td>
                        <td><?php echo $mtkutengahs  ?></td>
                        <td><?php echo $mtkuakhirs  ?></td>
                        <td><?php echo $this->rata  ?></td>
                        <?php
                        if ($this->rata > 75) {
                            echo "<td>TUNTAS</td>";
                        }else {
                            echo "<td>TIDAK TUNTAS</td>";
                        }
        }
    }
    class indonesia{
    public $rata;
    public $total;
        public function ind($indoharian,$indotugas2,$indoutengahs,$indouakhirs){
            $this->total = $indoharian + $indotugas2 + $indoutengahs + $indouakhirs;
            $this->rata = $this->total / 4;
            ?>
            
                    <tr>
                        <td>Bahasa Indonesia</td>
                        <td><?php echo $indoharian  ?></td>
                        <td><?php echo $indotugas2  ?></td>
                        <td><?php echo $indoutengahs  ?></td>
                        <td><?php echo $indouakhirs  ?></td>
                        <td><?php echo $this->rata  ?></td>
                        <?php
                        if ($this->rata > 75) {
                            echo "<td>TUNTAS</td>";
                        }else {
                            echo "<td>TIDAK TUNTAS</td>";
                        }
        }
    }
    class inggris{
        public $rata;
        public $total;
            public function ing($inggrisharian,$inggristugas2,$inggrisutengahs,$inggrisuakhirs){
                $this->total = $inggrisharian + $inggristugas2 + $inggrisutengahs + $inggrisuakhirs;
                $this->rata = $this->total / 4;
                ?>
                
                        <tr>
                            <td>Bahasa Inggris</td>
                            <td><?php echo $inggrisharian  ?></td>
                            <td><?php echo $inggristugas2  ?></td>
                            <td><?php echo $inggrisutengahs  ?></td>
                            <td><?php echo $inggrisuakhirs  ?></td>
                            <td><?php echo $this->rata  ?></td>
                            <?php
                            if ($this->rata > 75) {
                                echo "<td>TUNTAS</td>";
                            }else {
                                echo "<td>TIDAK TUNTAS</td>";
                            }
            }
        }
        class produktif{
            public $rata;
            public $total;
                public function pro($produkharian,$produktugas2,$produkutengahs,$produkuakhirs){
                    $this->total = $produkharian + $produktugas2 + $produkutengahs + $produkuakhirs;
                    $this->rata = $this->total / 4;
                    ?>
                    
                            <tr>
                                <td>Matematika</td>
                                <td><?php echo $produkharian  ?></td>
                                <td><?php echo $produktugas2  ?></td>
                                <td><?php echo $produkutengahs  ?></td>
                                <td><?php echo $produkuakhirs  ?></td>
                                <td><?php echo $this->rata  ?></td>
                                <?php
                                if ($this->rata > 75) {
                                    echo "<td>TUNTAS</td>";
                                }else {
                                    echo "<td>TIDAK TUNTAS</td>";
                                }
                                ?>
                            </tr>
                        </table>
                    </center>
                    <?php
                }
            }?>




<?php  
    $math = new matematika();
    echo $math->mtk($mtkhari,$mtktugas,$mtkuts,$mtkuas);

    $indo = new indonesia();
    echo $indo->ind($indohari,$indotugas,$indouts,$indouas);

    $ingg = new inggris();
    echo $ingg->ing($inggrishari,$inggristugas,$inggrisuts,$inggrisuas);

    $produk = new produktif();
    echo $produk->pro($produkhari,$produktugas,$produkuts,$produkuas);

    
    
    



}
?>
