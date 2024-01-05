<?php
$myfile = fopen("halo.txt", "w");
$txt = "hallo,\n";
fwrite($myfile, $txt);
$txt = "Saya Sedang belajar PHP\n";
fwrite($myfile, $txt);
fclose($myfile);
?>