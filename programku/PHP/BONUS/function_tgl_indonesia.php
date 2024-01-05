<?php
function tgl_indonesia($tgl){
	$nama_bulan = array(1=>"Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
		
	$tanggal = substr($tgl,8,2);
	$bulan = $nama_bulan[(int)substr($tgl,5,2)];
	$tahun = substr($tgl,0,4);
	
	return $tanggal.' '.$bulan.' '.$tahun;		 
}	

//Contoh penggunaan
echo tgl_indonesia("2018-01-12");
?>
