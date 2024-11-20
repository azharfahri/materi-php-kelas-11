<?php
$buah = [
    [
        "nama" => "Safitri",
        "namabuah" => [
            [
                "nama" => "Anggur",
                "anak" => [
                    "jenis1" => "Anggur ijo",
                    "jenis2" => "Anggur putih"

                ]
            ]
        ]
    ],
    [
    "nama" => "Rahman",
    "namabuah" => [
        [
            "nama" => "Alpukat",
            "anak" => [
                "jenis1" => "Alpukat Mentega",
                "jenis2" => "Alpukat Biasa"
            ]
        ],
        [
            "nama" => "Apel",
            "anak" => [
                "jenis1" => "Apel Merah",
                "jenis2" => "Apel Hijau"
            ]
        ]
    ]
]            
];



        foreach ($buah as $data) {
            echo "Nama Pemilik :". $data["nama"] . "<br>";
            echo "Daftar Buah Kesukaan : <ul>";
            foreach($data["namabuah"] as $fav){
                echo "<li>". $fav["nama"]. "</li>" ;
                foreach($fav["anak"] as $jenis){
                    echo "-". $jenis."<br>";
                }
            }
            
            echo "</ul><hr>";
        }
?>