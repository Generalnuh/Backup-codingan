<?php
function format_rupiah($angka){
	$hasil = number_format($angka,0,',','.');
	return $hasil;
}

//Contoh penggunaan
echo "Rp. ".format_rupiah(28900000000);
?>