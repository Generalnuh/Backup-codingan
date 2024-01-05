<?php
   $text = "Saya senang belajar PHP";
   
   echo substr($text,0,11) . " (hasil substr())<br>";
   echo substr($text,12) . " (hasil substr())<br>";
   echo strtoupper($text) . " (hasil strtoupper())<br>";
   echo ucwords($text) . " (hasil ucwords())<br>";
   echo str_replace("senang","suka",$text) . " (hasil str_replace())<br>";
   echo strpos($text,"P") . " (hasil strpos())<br>";
   $kata = explode(' ',$text);
   echo $kata[1] . " (hasil explode())<br>";
?>
