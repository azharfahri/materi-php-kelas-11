<?php
//$buah= array("Apel","Mangga","Lemon");
//$hobi= ["mancing ikan", "mancing keributan"];

//$minuman = array("Kopi", "Teh", "Jus");
//$makanan = ["nasgor", "pecel lele"];

//echo $buah[1]."<br>";

//for ($i=0; $i < count($minuman) ; $i++) { 
//    echo $minuman[$i]."<br>";
//}

$siswa = ["Abel ","Rido","Keyndra","Regita","Nafis","Hana","Dika","Faza","Nabilla","Surya" ];
$kelamin = [" Laki-Laki "," Perempuan "];
$hobi = [" Futsal","Memasak","Belajar","Menyanyi","Olahraga"];

echo $siswa[0] . "-" . $kelamin[0] . "-" . $hobi[0] . "<br>" .
    $siswa[1] . "-" . $kelamin[0] . "-" . $hobi[2] . "<br>" .
    $siswa[2] . "-" . $kelamin[0] . "-" . $hobi[3] . "<br>".
    $siswa[3] . "-" . $kelamin[1] . "-" . $hobi[1] . "<br>".
    $siswa[4] . "-" . $kelamin[0] . "-" . $hobi[0] . "<br>".
    $siswa[5] . "-" . $kelamin[1] . "-" . $hobi[1] . "<br>".
    $siswa[6] . "-" . $kelamin[0] . "-" . $hobi[4] . "<br>".
    $siswa[7] . "-" . $kelamin[0] . "-" . $hobi[0] . "<br>".
    $siswa[8] . "-" . $kelamin[1] . "-" . $hobi[3] . "<br>".
    $siswa[9] . "-" . $kelamin[0] . "-" . $hobi[4] . "<br><br>"; 


foreach($siswa as $data){
    echo "$data <br>";
}

?>