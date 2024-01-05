<?php

// operator aritmatika
echo 10 + 1 . PHP_EOL;
echo 10 - 1 . PHP_EOL;
echo 10 * 1 . PHP_EOL;
echo 10 / 1 . PHP_EOL;
echo 10 % 1 . PHP_EOL;

// operator perbandingan
echo 2+ 3 === 6 . PHP_EOL;
echo 2+ 3 === "6" . PHP_EOL;
echo 2+ 3 != 6 . PHP_EOL;
echo 2+ 3 !== 6 . PHP_EOL;
echo 2+ 3 > 6 . PHP_EOL;
echo 2+ 3 < 6 . PHP_EOL;
echo 2+ 3 <= 6 . PHP_EOL;
echo 2+ 3 >= 6 . PHP_EOL;

// increment dan decrement

// pre increment: ++$nama_variable
// post increment: $nama_variable++
// pre decrement: --$nama_variable
// post decrement: $nama_variable--
// operator string
$kata = PHP_EOL . "Saya sedang" . "Belajar PHP" . PHP_EOL;
$kata .= "Dengan penuh semangat";
echo $kata;