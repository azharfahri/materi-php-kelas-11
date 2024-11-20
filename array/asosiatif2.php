<?php
$siswa = [
    [
        "nama" => "Muhamad fahri azhar",
        "jk" => "Laki-Laki",
        "kelas" => "XI RPL 1"
    ],
    [
        "nama" => "Agus",
        "jk" => "Laki-Laki",
        "kelas" => "XI RPL 1"
    ]
    
    ];
    foreach($siswa as $murid){
        echo "nama : ". $murid["nama"]."<br>";
        echo "nama : ". $murid["jk"]."<br>";
        echo "nama : ". $murid["kelas"]."<hr>";
    }
?>