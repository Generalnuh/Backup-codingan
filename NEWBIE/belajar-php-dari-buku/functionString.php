<?php
$text = "Saya sangat senang belajar PHP";

echo substr($text,0,11) . " (Hasil substr())<br>" . PHP_EOL;
echo substr($text,12) . "(Hasil substr())<br>" . PHP_EOL;
echo strtoupper($text) . " (hasil strtoupper()) <br>" . PHP_EOL;
echo ucwords($text) . " (hasil ucwords()) <br>" . PHP_EOL;
echo str_replace("senang","suka",$text) . " (hasil str_replace())<br>" . PHP_EOL;
echo strpos($text,"p") . " (hasil strpos())<br>" . PHP_EOL;
$kata = explode(' ',$text);
echo $kata[1] . " (hasil explode())<br>" . PHP_EOL;
?>