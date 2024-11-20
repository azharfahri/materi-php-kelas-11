<?php
$data =[
    [
        "nama" => "Pari",
        "kegiatan" =>[
            [
                "tempat" => "dirumah",
                "jenis" => [
                    "jns" => "Turu","makan","minum","sarapan"
                ]
            ]
        ]
    ]
];
foreach($data as $gadag){
    echo "Nama : ". $gadag["nama"]. "<br>";
    echo "Kegiatan : ";
    foreach($gadag["kegiatan"] as $gawe){
        echo $gawe["tempat"];
        echo "<br> Nama Kegiatan :";
        foreach ($gawe['jenis'] as $jenis) {
            echo $jenis ."," ;

        }
    }
    echo "<br><hr>";
}


?>