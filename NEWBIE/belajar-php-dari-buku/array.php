<?php
// cara 1
$bulan = array("januari", "februari", "maret");
echo "Bulan ke 2 adalah bulan $bulan[1]";

$profil = array(
    "nama" => "Muhammad Nuh",
    "alamat" => "Kuala Simpang",
    "usia" => 19
);

echo "<br> Nama saya $profil[nama], saya berasal dari $profil[alamat] , Usia saya  $profil[usia]" . "<br>" . PHP_EOL;

// cara 2
$profile['nama'] = "GeneralNoeh";
$profile['nim'] = 220504027;
$profile['asal'] = "Aceh Tamiang";

echo 'Halo nama saya ' . $profile['nama'] . ' Nim saya ' . $profile['nim'] . ' Saya berasal dari ' . $profile['asal'] . PHP_EOL;

$buah=[
    1 => 'apel',
    2 => 'jagung',
    3 => 'terong'
];
echo $buah[1] . PHP_EOL;
var_dump($buah) . PHP_EOL;
var_dump($buah[1]);
$buah[4] = 'tomat';
unset ($buah[1]);
var_dump($buah);

?>