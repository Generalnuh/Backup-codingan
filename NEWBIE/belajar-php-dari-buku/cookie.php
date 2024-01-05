<?php
$batas = time() + 30;

setcookie("KunjunganTerakhir", date('H:i:s'), $batas);
echo "COOKIE telah dibuat, buka file cookie_cek.php Sebelum dan setelah 30detik";
?>