<?php
header('Access-Control-Allow-Origin: *');

$nama = ["Ana", "Andi", "Budi", "Beni", "Dodi", "Daffa", "Faqih", "Hafiz", "Nabil", "Nanda", "Latif", "Sifa"];
$q = $_REQUEST["q"];
$saran = "";

if ($q !== "") {
  $q = strtolower($q);
  $len=strlen($q);
  foreach($nama as $n) {
    if (stristr($q, substr($n, 0, $len))) {
      if ($saran === "") {
        $saran = $n;
      } else {
        $saran .= ", $n";
      }
    }
  }
}

echo $saran === "" ? "Tidak ada saran" : $saran;
?>