<?php
   $nama_hari = array("Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu");
      
   echo "Nama hari: ";      
   foreach($nama_hari as $hari)
   {
      echo "$hari, ";
   }

    $profil = array("nama" => "Nabil", "alamat" => "Tegal", "usia" => "4");
    foreach($profil as $key=>$value)
    {
       echo "<br>$key: $value";
    }
?>
