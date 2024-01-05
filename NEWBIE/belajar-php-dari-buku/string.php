<?php
// single quote
echo 'Nama saya Muhammad Nuh uWu\'s' . "<br>";
// double quote
$nama = "GeneralNoeh";
echo "Nama saya $nama" . "<br>";
// heredoc
$nama = "Bedoel";
$kalimat = <<<Peju
halo guys saya sangat senang belajar bahasa php
saya senang kok serius😭😁.
Peju;
echo $kalimat . "<br>";
// nowdoc
$nama = "jokosantosa";
$kalimat = <<< 'Tulis'
selamat datang di mobil lejen
halo dan aloha sentosa kimax $nama
Tulis;
echo $kalimat;
?>