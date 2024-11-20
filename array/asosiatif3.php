<?php
$data = [
    [
    "nis" => "1902",
    "nama" => "Haddad",
    "kelas" => "11 RPL 3",
    "eskul" => [
        "namaeskul" => ["Tari","Karawitan","Futsal"]
        ] 
    ],
    [
        "nis" => "1002",
        "nama" => "Sandi",
        "kelas" => "11 RPL 1",
        "eskul" => [
            "namaeskul" => ["Futsal"]
            ] 
    ]
    
    ];

    foreach($data as $siswa){
        echo "nis : ". $siswa["nis"]."<br>";
        echo "nama : ". $siswa["nama"]."<br>";
        echo "kelas : ". $siswa["kelas"]."<br>";
        echo "eskul :" ;
        foreach ($siswa["eskul"]["namaeskul"] as $eskul) {
            echo "<ul><li>". $eskul . "</ul></li>";
        }
        echo "<hr>";
    }



?>