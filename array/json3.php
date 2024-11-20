<?php
$dataJSON = '[
    {
        "nama" : "Fazli",
        "alamat" : "Surabaya"
    },
    {
        "nama" : "Azhar",
        "alamat" : "Bandung"
    }
    ]';
    
    

    $list = json_decode($dataJSON);
    foreach ($list as $mahasiswa) {
        echo "Nama : {$mahasiswa->nama} <br> ";
        echo "Alamat : {$mahasiswa->alamat} <br> ";
        echo "<hr>";

    }
?>