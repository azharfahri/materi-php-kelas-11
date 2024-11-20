<?php
$novel = '[
    {
        "no" : "1001",
        "judul" : "Dilan",
        "genre" : "Romance",
        "penulis" : "Pidi baiq",
        "penerbit" : "Airlangga",
        "tanggal_liris" : "2018"

    },
    {
        "no" : "1002",
        "judul" : "Koboy Kampus",
        "genre" : "Komedi",
        "penulis" : "Pidi baiq",
        "penerbit" : "Airlangga",
        "tanggal_liris" : "2019"
        
    },
    {
        "no" : "1003",
        "judul" : "The Night Circus",
        "genre" : "Fantasy",
        "penulis" : "Erin",
        "penerbit" : "Doubleday",
        "tanggal_liris" : "2011"

    },
    {
        "no" : "1004",
        "judul" : "Pride and prejudice",
        "genre" : "Romance",
        "penulis" : "Jane",
        "penerbit" : "T.Egerton",
        "tanggal_liris" : "1813"
        
    },
    {
        "no" : "1005",
        "judul" : "The Great Gatsby",
        "genre" : "Drama",
        "penulis" : "Scoot",
        "penerbit" : "Charles",
        "tanggal_liris" : "1925"

    },
    {
        "no" : "1006",
        "judul" : "To kill a mockingbird",
        "genre" : "Bildungsroman",
        "penulis" : "Harper Lee",
        "penerbit" : "J.B Lippincott",
        "tanggal_liris" : "1960"
        
    },
    {
        "no" : "1007",
        "judul" : "Dystopian",
        "genre" : "Fiksi",
        "penulis" : "George Orwell",
        "penerbit" : "Secker",
        "tanggal_liris" : "1949"

    },
    {
        "no" : "1008",
        "judul" : "Laskar Pelangi",
        "genre" : "Pendidikan",
        "penulis" : "Andrea Hirata",
        "penerbit" : "Bentang Pustaka",
        "tanggal_liris" : "2005"
        
    },
    {
        "no" : "1009",
        "judul" : "Perahu kertas",
        "genre" : "Romance",
        "penulis" : "Dee Lestari",
        "penerbit" : "Bentang Pustaka",
        "tanggal_liris" : "2009"

    },
    {
        "no" : "1010",
        "judul" : "Bumi Manusia",
        "genre" : "Fiksi",
        "penulis" : "Pramodya Ananta Toer",
        "penerbit" : "Hasta Mitra",
        "tanggal_liris" : "1980"
        
    },
    {
        "no" : "1011",
        "judul" : "Supernova",
        "genre" : "Romance",
        "penulis" : "Dee Lestari",
        "penerbit" : "Truedee Books",
        "tanggal_liris" : "2001"

    },
    {
        "no" : "1012",
        "judul" : "Filosofi Kopi",
        "genre" : "Drama",
        "penulis" : "Dee Lestari",
        "penerbit" : "Truedee Books",
        "tanggal_liris" : "2006"
        
    },
    {
        "no" : "1013",
        "judul" : "pasung Jiwa",
        "genre" : "Fiksi",
        "penulis" : "Okky Madasari",
        "penerbit" : "Gramedia",
        "tanggal_liris" : "2013"

    },
    {
        "no" : "1014",
        "judul" : "Sang Pemimpi",
        "genre" : "Pendidikan",
        "penulis" : "Andrea Hinata",
        "penerbit" : "Gramedia",
        "tanggal_liris" : "2006"
        
    },
    {
        "no" : "1015",
        "judul" : "Rindu",
        "genre" : "Drama",
        "penulis" : "Tere liye",
        "penerbit" : "Republika",
        "tanggal_liris" : "2014"

    },
    {
        "no" : "1016",
        "judul" : "O",
        "genre" : "Fantasy",
        "penulis" : "Eka kurniawan",
        "penerbit" : "Gramedia",
        "tanggal_liris" : "2016"
        
    },
    {
        "no" : "1017",
        "judul" : "9 summers to 10 autumns",
        "genre" : "Drama",
        "penulis" : "Iwan setyawan",
        "penerbit" : "Gramedia",
        "tanggal_liris" : "2011"

    },
    {
        "no" : "1018",
        "judul" : "Koala Kumal",
        "genre" : "Komedi",
        "penulis" : "Raditya dika",
        "penerbit" : "Gagas media",
        "tanggal_liris" : "2015"
        
    },
    {
        "no" : "1019",
        "judul" : "Orang biasa",
        "genre" : "Drama",
        "penulis" : "andrea hinata",
        "penerbit" : "Bentang pustaka",
        "tanggal_liris" : "2019"

    },
    {
        "no" : "1020",
        "judul" : "Aruna dan Lidahnya",
        "genre" : "Fiksi",
        "penulis" : "Laksmi Pamuntjak",
        "penerbit" : "Gramedia",
        "tanggal_liris" : "2014"
        
    }
    ]';
    ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Novel</title>
</head>
<body>
    <h1 align="center">DATA NOVEL TERBARU</h1>
    <table align="center" width="75%"  border="1" cellspacing="0" >
        <tr align="center" bgcolor="green">
            <td><b>No</b></td>
            <td><b>Judul</b></td>
            <td><b>Genre</b></td>
            <td><b>Penulis</b></td>
            <td><b>Penerbit</b></td>
            <td><b>Tahun Rilis</b></td>
        </tr>


<?php
    $list = json_decode($novel);
    foreach ($list as $data) {
        //echo "No : {$data->no} <br> ";
        //echo "Judul : {$data->judul} <br> ";
        //echo "Genre : {$data->genre} <br> ";
       // echo "Penulis : {$data->penulis} <br> ";
       // echo "Penerbit : {$data->penerbit} <br> ";
    //echo "Tanggal Liris : {$data->tanggal_liris} <br><hr>";
        ?>
        <tr align="center">
            <td><?php echo "{$data->no}"; ?></td>
            <td><?php echo "{$data->judul}"; ?></td>
            <td><?php echo "{$data->genre}"; ?></td>
            <td><?php echo "{$data->penulis}"; ?></td>
            <td><?php echo "{$data->penerbit}"; ?></td>
            <td><?php echo "{$data->tanggal_liris}"; ?></td>
        <?php
        
    }  
?> 

</tr>
</table>
</body>
</html> 