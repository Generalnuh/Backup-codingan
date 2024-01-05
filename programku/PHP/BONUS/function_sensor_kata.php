<?php
function sensor_kata($text){
	$katakotor = array("anjing", "celeng", "babi", "bangsat", "setan", "keparat"); //Tambahkan kata yang ingin di sensor di sini
	$katapengganti = array("****g", "c****g", "b**i", "b*****t", "s***n", "k*****t"); //Tambahkan kata pengganti di sini
	
	$text = str_ireplace($katakotor, $katapengganti, $text);
	return $text;
}	

//Contoh penggunaan
$paragraf = "Lorem ipsum dolor sit anjing, consectetur adipiscing elit. Vivamus turpis nibh, ornare ac elit a, placerat lobortis risus. Duis vel nunc vel ipsum accumsan maximus. Sed condimentum metus eget nisl cursus, a celeng risus posuere. Nam non elit imperdiet, sodales urna sed, efficitur nisl. Aenean ultricies lacus id babi setan, id gravida lacus bangsat. Nunc keparat leo sed mi finibus sollicitudin. Phasellus fermentum quis odio ut mollis. Fusce at finibus libero, egestas ullamcorper neque. Proin molestie purus ac ornare lobortis. Sed pellentesque, dolor vitae pharetra ornare, justo quam ultricies lorem, et faucibus ante sapien ac lectus.";
echo sensor_kata($paragraf);
?>
