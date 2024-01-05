<?php
function autolink($text){
	$text = preg_replace('/((http|ftp|https):\/\/[\w-]+(\.[\w-]+)+([\w.,@?^=%&amp;:\/~+#-]*[\w@?^=%&amp;\/~+#-])?)/', '<a href="\1">\1</a>', $text);
	return $text;
}	

//Contoh penggunaan
$paragraf = "Silakan kunjungi http://www.google.com!";
echo autolink($paragraf);
?>
