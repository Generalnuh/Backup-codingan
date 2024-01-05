<?php
   if(isset($_COOKIE['kunjunganTerakhir']))
   {
      echo "Anda terakhir membuka file 5_5_cookie.php 
         jam ".$_COOKIE['kunjunganTerakhir'];
   }
   else
   {
      echo "Anda terakhir membuka file 5_5_cookie.php 
         lebih dari 30 detik yang lalu";
   }
   
?>

