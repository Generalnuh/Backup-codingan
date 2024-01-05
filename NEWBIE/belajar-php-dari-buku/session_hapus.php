<?php
session_start();

session_destroy();

echo "Session Telah Dihapus,
    <a href='session_cek.php'> Cek Session </a>";
?>