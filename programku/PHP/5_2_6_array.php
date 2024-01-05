<?php
   // cara 1
   $bulan = array("Januari","Februari","Maret","April","Mei","Juni","Juli",
            "Agustus","September","Oktober","November","Desember");
            
   echo "Bulan ke 3 adalah $bulan[2]";
   
   $profil = array("nama" => "Nabil", "alamat" => "Tegal", "usia" => "4");
   
   echo "<br>Nama saya $profil[nama], saya berasal dari $profil[alamat],
      usia saya $profil[usia] tahun";
   
   // cara 2
   $profil['nama'] = "Afaf";
   $profil['alamat'] = "Banjarnegara";
   $profil['usia'] = 5;
   
   echo '<br>Nama saya '.$profil['nama'].', saya berasal dari '.$profil['alamat'].', 
      usia saya '.$profil['usia'].' tahun';
?>
