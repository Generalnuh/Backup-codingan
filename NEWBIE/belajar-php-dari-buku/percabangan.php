<?php
$nilai = 80;
if ($nilai >= 80) echo "Anda lulus"  ."<br>" . PHP_EOL;

$nilai = 70;
if ($nilai <= 80){
    echo "Anda Tidak Lulus" . PHP_EOL;
}

$nilai = 74;
if ($nilai >= 80) echo "anda lulus" . PHP_EOL;
else echo "Anda kaga lulus sorry ye😁" . PHP_EOL;

$nilai = 60;

if ($nilai >= 70){
    echo "Ini mah lulus ";
}elseif ($nilai <= 60){
    echo "ga lulus dek😁" . PHP_EOL;
}else{
    echo "Apalagi eluh" .PHP_EOL;
}

// percabangan dengan switch

$kota = "Banda Aceh";
switch($kota){
    case "Banda Aceh": echo "Banda Aceh Ibu Kota provinsi Aceh"; break;
    case "Medan": echo "Medan Ibu Kota Provinsi Sumatera Utara"; break;
    case "Pekanbaru": echo "Pekanbaru ibu Kota Provinsi Riau"; break;
    default: echo "Salah input anda";
}
?>