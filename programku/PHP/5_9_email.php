<?php
   $to = "daffa@localhost";
   $subject = "Email HTML";

   $message = "<h1> Selamat Siang</1>
         <h3>Terimakasih telah membaca email kami</h3>";

   // Selalu set content-type ketika mengirim email HTML
   $headers = "MIME-Version: 1.0" . "\r\n";
   $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

   $headers .= 'From: <webmaster@localhost>' . "\r\n";
   $headers .= 'Cc: nabil@localhost' . "\r\n";

   mail($to,$subject,$message,$headers);
?>
