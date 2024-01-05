<?php
function potong_paragraf($text, $karakter=400){
	$text = substr($text, 0, $karakter);
	$text = substr($text, 0, strrpos($text, " "));
	return $text;
}	

//Contoh penggunaan, paragraf otomatis terpotong pada spasi
$paragraf = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus turpis nibh, ornare ac elit a, placerat lobortis risus. Duis vel nunc vel ipsum accumsan maximus. Sed condimentum metus eget nisl cursus, a ullamcorper risus posuere. Nam non elit imperdiet, sodales urna sed, efficitur nisl. Aenean ultricies lacus id augue bibendum, id gravida lacus condimentum. Nunc non leo sed mi finibus sollicitudin. Phasellus fermentum quis odio ut mollis. Fusce at finibus libero, egestas ullamcorper neque. Proin molestie purus ac ornare lobortis. Sed pellentesque, dolor vitae pharetra ornare, justo quam ultricies lorem, et faucibus ante sapien ac lectus.";
echo potong_paragraf($paragraf, 300);
?>
