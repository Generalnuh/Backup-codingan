<?php
// tipe data number
echo 'Decimal';
var_dump(1234);
echo 'octal';
var_dump(0123);
echo 'hexadecimal';
var_dump(0x1A);
echo 'Binary';
var_dump(0b11111111);
echo 'Underscore dinumber: ';
var_dump(1_234_567);
// Boolean
echo 'Benar';
var_dump(true);
// string
echo 'Halo nama saya Nuh' . PHP_EOL;
echo 'Halo nama saya nuh' . PHP_EOL;
// Ini namanya Heredoc
$nama = "Muhammad Nuh";
echo <<<KATA
halo guys nama saya $nama
saya berasal dari Aceh Tamiang Provinsi Aceh
saya sangat senang belajar Bahasa PHP
KATA;
// Ini namanya Nowdoc
echo <<<'KATA'
ini namanya nowdoc
tanda pembuatannya harus menggunakan tanda petik satu
dia tidak bisa pharsing variable 
KATA;
?>