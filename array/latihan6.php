<?php
$novel = [
    [
        "judul" => "Dilan",
        "penulis" => "Pidi baiq",
        "tanggal_liris" => "10 november 2024",
        "penerbit" => "Airlangga"
    ],
    [
        "judul" => "Koboy Kampus",
        "penulis" => "Pidi baiq",
        "tanggal_liris" => "14 mei 2021",
        "penerbit" => "Agus"
    ],
    [
        "judul" => "Cinta diatas batu",
        "penulis" => "Ari wibowo",
        "tanggal_liris" => "10 Desember 2019",
        "penerbit" => "Andi Gaming"
    ],
    [
        "judul" => "Sawah Biru",
        "penulis" => "Kang Asep",
        "tanggal_liris" => "07 november 2000",
        "penerbit" => "Suryalana"
    ],
    [
        "judul" => "Milea",
        "penulis" => "Pidi baiq",
        "tanggal_liris" => "10 november 2024",
        "penerbit" => "Akang Gendang"
    ],
    
    
    ];
    foreach($novel as $buku){
        echo "Nama : ". $buku["judul"]."<br>";
        echo "Penulis : ". $buku["penulis"]."<br>";
        echo "Tanggal Liris : ". $buku["tanggal_liris"]."<br>";
        echo "Penerbit : ". $buku["penerbit"]."<hr>";
    }
?>