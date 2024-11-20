<?php
$nama = "fahri";
$jk = "Laki - Laki";
$jenis= "Makanan"; 
$menu = "Mie Goreng";
$jumlah = 10;
echo "---------- RESTORAN SELALU RAME ----------<br><br>";
//makanan
if ($jenis == "Makanan") {
    echo "Nama : $nama<br>";
    echo "Jenis Kelamin : $jk<br>";
    echo "Jenis : $jenis<br>";
    

    if ($menu == "Nasi Goreng") {
        $harga = 10000 ;
        $total = $harga * $jumlah;
        echo "Menu : $menu<br>";
        echo "Harga : $harga<br>";
        echo "Jumlah : $jumlah<br><hr>";
        
        if ($total >= 50000) {
            $diskon = $total / 100 * 20;
            $bayar = $total - $diskon;
            echo "Total : $total<br>";
            echo "Diskon 20% : $diskon<br><hr>";
            echo "Total Bayar : $bayar";
        }else {
            echo "Total Bayar : $total";
        }
    }
    elseif ($menu == "Mie Goreng") {
        $harga = 15000 ;
        $total = $harga * $jumlah;
        echo "Menu : $menu<br>";
        echo "Harga : $harga<br>";
        echo "Jumlah : $jumlah<br><hr>";
        
        if ($total >= 50000) {
            $diskon = $total / 100 * 20;
            $bayar = $total - $diskon;
            echo "Total : $total<br>";
            echo "Diskon 20% : $diskon<br><hr>";
            echo "Total Bayar : $bayar";
        }else {
            echo "Total Bayar : $total";
        }
    }
    elseif ($menu == "Ayam Goreng") {
        $harga = 20000 ;
        $total = $harga * $jumlah;
        echo "Menu : $menu<br>";
        echo "Harga : $harga<br>";
        echo "Jumlah : $jumlah<br><hr>";
        
        if ($total >= 50000) {
            $diskon = $total / 100 * 20;
            $bayar = $total - $diskon;
            echo "Total : $total<br>";
            echo "Diskon 20% : $diskon<br><hr>";
            echo "Total Bayar : $bayar";
        }else {
            echo "Total Bayar : $total";
        }
    }else{
        echo "Menu tidak diketahui";
    }
}
//minuman
elseif ($jenis == "Minuman") {
    echo "Nama : $nama<br>";
    echo "Jenis Kelamin : $jk<br>";
    echo "Jenis : $jenis<br>";

    if ($menu == "Air Mineral") {
        $harga = 5000 ;
        $total = $harga * $jumlah;
        echo "Menu : $menu<br>";
        echo "Harga : $harga<br>";
        echo "Jumlah : $jumlah<br><hr>";
        
        if ($total >= 50000) {
            $diskon = $total / 100 * 20;
            $bayar = $total - $diskon;
            echo "Total : $total<br>";
            echo "Diskon 20% : $diskon<br><hr>";
            echo "Total Bayar : $bayar";
        }else {
            echo "Total Bayar : $total";
        }
    }
    elseif ($menu == "Fresh Tea") {
        $harga = 7000 ;
        $total = $harga * $jumlah;
        echo "Menu : $menu<br>";
        echo "Harga : $harga<br>";
        echo "Jumlah : $jumlah<br><hr>";
        
        if ($total >= 50000) {
            $diskon = $total / 100 * 20;
            $bayar = $total - $diskon;
            echo "Total : $total<br>";
            echo "Diskon 20% : $diskon<br><hr>";
            echo "Total Bayar : $bayar";
        }else {
            echo "Total Bayar : $total";
        }
    }
    elseif ($menu == "Jus") {
        $harga = 12000 ;
        $total = $harga * $jumlah;
        echo "Menu : $menu<br>";
        echo "Harga : $harga<br>";
        echo "Jumlah : $jumlah<br><hr>";
        
        if ($total >= 50000) {
            $diskon = $total / 100 * 20;
            $bayar = $total - $diskon;
            echo "Total : $total<br>";
            echo "Diskon 20% : $diskon<br><hr>";
            echo "Total Bayar : $bayar";
        }else {
            echo "Total Bayar : $total";
        }
    }else{
        echo "Menu tidak diketahui";
    }
}else{
    echo "Jenis Pesanan Tidak diketahui, silahkan pilih makanan atau minuman";
}

?>