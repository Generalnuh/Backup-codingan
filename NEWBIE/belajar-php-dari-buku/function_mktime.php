<?php
$sekarang = mktime(22, 19, 45, date('m'), date('d'), date('Y'));
echo "Sekarang taggal " . date('d F Y', $sekarang) . PHP_EOL;

$bulanLalu = mktime(0, 0, 0, date('m')-1, date('d'), date('Y'));
echo "<br>Satu bulan yang lalu adalah tanggal " . date('d F Y', $bulanLalu) . PHP_EOL;

$lusa = mktime(0, 0, 0, date('m'), date('d')+2, date('Y'));
echo "<br>Lusa adalah tanngal " . date('d F Y', $lusa) . PHP_EOL;

?>