<?php
function hitung_luas($panjang, $lebar=10){
    $luas = $panjang * $lebar;
    return $luas;
};
echo "Luas ruangan adalah " . hitung_luas(12) . PHP_EOL;

echo "<p style='color: blue;'>Kita dapat menggunakannya lagi seperti berikut: </p>" . PHP_EOL;

$p = 15;
$i = 10;
$luas = hitung_luas($p, $i);
echo "Luas ruangan adalah $luas";
?>