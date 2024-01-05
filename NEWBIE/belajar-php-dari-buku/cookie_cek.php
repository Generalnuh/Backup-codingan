<?php
if(isset($_COOKIE['KunjunganTerakhir'])){
    echo "Anda terakhir membuka file cookie.php jam " . $_COOKIE['KunjunganTerakhir'];
}else{
    echo "Anda terakhir membuka file cookie.php lebih dari 30 detik yang lalu";
}
?>