<?php
session_start();

if(!empty($_SESSION['Username']) and !empty($_SESSION['Password'])){
    echo "Username: ".$_SESSION['Username'];
    echo "<br> Password: " . $_SESSION['Password'];
    echo "<br> <a href='session_hapus.php'> Hapus </a>";
}else{
    echo "Session Telah Dihapus";
    echo "<br> <a href='session.php'> Buat session </a>";
}
?>