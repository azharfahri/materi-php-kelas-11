<?php
$lampu = "hijau";

switch($lampu){
    case "hijau":
        echo " Silahkan jalan";
        break;
    case "kuning":
        echo " silahkan Bersiap";
        break;
    case "merah":
        echo " silahkan Berhenti";
        break;
    default:
        echo "Warna $lampu tidak ada disini";
}
?>