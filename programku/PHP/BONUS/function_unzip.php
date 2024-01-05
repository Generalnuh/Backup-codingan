<?php
function unzip($filename,  $target){
	$target_path = $target."/".$filename; 
	
	$zip = new ZipArchive();
	$x = $zip->open($target_path);
	if ($x === true) {
		$zip->extractTo($target);
		$zip->close();
	
		unlink($target_path);
	}
}
//Contoh penggunaan
unzip("sample.zip", "folder");
?>
