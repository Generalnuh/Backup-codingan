<?php
function selisih_waktu($tanggal1, $tanggal2){
	$selisih = abs(strtotime($tanggal2) - strtotime($tanggal1));

	$tahun = floor($selisih / (365*60*60*24));
	$bulan = floor(($selisih - $tahun * 365*60*60*24) / (30*60*60*24));
	$hari = floor(($selisih - $tahun * 365*60*60*24 - $bulan*30*60*60*24)/ (60*60*24));

	return "$tahun tahun, $bulan bulan, $hari hari";
}
//Contoh penggunaan
echo selisih_waktu("2018-03-02", "2018-01-02");
?>
