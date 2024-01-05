<?php
// Perulangan For
for($number = 1;$number <= 10;$number++){
    echo "halo ini perulangan ke-$number" . PHP_EOL;
};
// Perulangan While
$num = 1;
while($num <= 10){
    echo "Perulangan ke-$num" . PHP_EOL;
    $num++;
}

// Perulangan Do While
$counter = 1;
do{
    echo "Helo dunia" . PHP_EOL;
    $counter++;
}while($counter <= 10);

// Perulangan Foreach
$nama_hari = array("Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu", "Minggu");
echo "Nama-nama Hari: ";
foreach($nama_hari as $hari){
    echo "$hari, ";
}
// Perulangan foreach dengan array asosiatif

$profil = array(
    "nama" => "Muhammad Nuh",
    "usia" => 20,
    "alamat" => "Aceh Tamiang"
);
foreach($profil as $key=>$value){
    echo PHP_EOL . "$key: $value" . PHP_EOL;
};

$anggota = array("nuh", "unki", "indah", "bevan", "ratna", "alisa");
echo "Nama-nama anggota Unit-01: ";
foreach ($anggota as $member){
    echo "$member, ";
};

$biodata = array(
    "nama" => "Muhammad Nuh",
    "alamat" => "Aceh Tamiang",
    "usia" => 20
);
foreach ($biodata as $key=>$value){
    echo PHP_EOL . ("$key: $value");
};
?>