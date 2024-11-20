<?php
$provinsi = "jawa tengah";
$kota = "madiun";

if ($provinsi == "jawa barat") {
    if ($kota == "bandung") {
        echo "Selamat Datang Di kota Bandung";
    }elseif ($kota == "cimahi") {
        echo "Selamat Datang Di kota Cimahi";
    }elseif ($kota == "bogor") {
        echo "Selamat Datang Di kota Bogor";
    }elseif ($kota == "garut") {
        echo "Selamat Datang Di kota Garut";
    }elseif ($kota == "tasik") {
        echo "Selamat Datang Di kota Tasikmalaya";
    }else {
        echo "kota Tidak Tersedia";
    }
}elseif ($provinsi == "jawa tengah") {
    if ($kota == "pati") {
        echo "Selamat Datang Di kota Pati";
    }elseif ($kota == "kediri") {
        echo "Selamat Datang Di kota Kediri";
    }elseif ($kota == "madiun") {
        echo "Selamat Datang Di kota Madiun";
    }elseif ($kota == "purwokerto") {
        echo "Selamat Datang Di kota Purwokerto";
    }elseif ($kota == "sleman") {
        echo "Selamat Datang Di kota Sleman";
    }else {
        echo "kota Tidak Tersedia";
    }
}elseif ($provinsi == "jawa timur") {
    if ($kota == "surabaya") {
        echo "Selamat Datang Di kota Surabaya";
    }elseif ($kota == "madura") {
        echo "Selamat Datang Di kota Madura";
    }elseif ($kota == "kediri") {
        echo "Selamat Datang Di kota Kediri";
    }elseif ($kota == "pasuruan") {
        echo "Selamat Datang Di kota Pasuruan";
    }elseif ($kota == "Mojokerto") {
        echo "Selamat Datang Di kota Mojokerto";
    }else {
        echo "kota Tidak Tersedia";
    }
}
else {
    echo "Provinsi Tidak Diketahui";
}
?>