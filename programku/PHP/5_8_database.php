<?php
  $con = mysqli_connect("localhost","root","","pegawai");
  if (mysqli_connect_errno()){
    echo "Koneksi gagal: " . mysqli_connect_error();
  }

  $sql = "SELECT * FROM jabatan";
  $result = mysqli_query($con,$sql);

  echo "<ul>";
  while($row = mysqli_fetch_array($result)){
     echo "<li>$row[nama_jabatan]</li>";
  }
  echo "</ul>";

  mysqli_close($con);
?>