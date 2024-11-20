<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form OOP</title>
</head>
<body>
    <center>
        <h2>Menghitung Luas Persegi Panjang</h2>
        <form action="" method="post">
            <table>
                <tr>
                    <td>Panjang</td>
                    <td>:</td>
                    <td><input type="number" name="panjang" id="" placeholder="Panjang Persegi"></td>
                </tr>
                <tr>
                    <td>Lebar</td>
                    <td>:</td>
                    <td><input type="number" name="lebar" id="" placeholder="Lebar Persegi"></td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td><input type="submit" name="hitung" id="" value="HITUNG"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>

<?php
if (isset($_POST['hitung'])) {
    $panjang = $_POST['panjang'];
    $lebar = $_POST['lebar'];

    class persegipanjang{
        public $luas;

        public function luas_persegi($panjang2,$lebar2){
            $this->luas= $panjang2 * $lebar2;
            echo "Panjang : " . $panjang2 . "<br>";
            echo "Lebar :" . $lebar2 . "<br>";
            echo "Luasnya :". $this->luas."<br>";
        }
    }
    $cetak = new persegipanjang();
    echo $cetak->luas_persegi($panjang,$lebar);
}
?>


