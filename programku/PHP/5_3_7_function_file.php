<?php
   $myfile = fopen("hallo.txt", "w");
   $txt = "Hallo,\n";
   fwrite($myfile, $txt);
   $txt = "Saya sedang belajar PHP\n";
   fwrite($myfile, $txt);
   fclose($myfile);
?>