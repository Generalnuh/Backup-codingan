<?php
session_start();
$_SESSION['Username'] = "Administrator";
$_SESSION['Password'] = 'Rahasia';

echo "Session telah dibuat <a href='session_cek.php'> Cek Session </a>";
?>