<?php
   if(!defined('INDEX')) die("");

   $foto = $_FILES['foto']['name'];
   $lokasi = $_FILES['foto']['tmp_name'];
   $tipefile = $_FILES['foto']['type'];
   $ukuranfile = $_FILES['foto']['size'];

   $error = "";
   if($foto == ""){
      $query = mysqli_query($con, "INSERT INTO pegawai SET
         nama_pegawai = '$_POST[nama]',
         jenis_kelamin = '$_POST[jk]',
         tgl_lahir = '$_POST[tanggal]',
         id_jabatan = '$_POST[jabatan]',
         keterangan = '$_POST[keterangan]'
      ");
   }else{
      if($tipefile != "image/jpeg" and $tipefile != "image/jpg" and $tipefile != "image/png"){
         $error = "Tipe file tidak didukung!";
      }elseif($ukuranfile >= 1000000){
         echo $ukuranfile;
         $error = "Ukuran file terlalu besar (lebih dari 1MB)!";
      }else{
         move_uploaded_file($lokasi, "images/".$foto);
         $query = mysqli_query($con, "INSERT INTO pegawai SET
            foto = '$foto',
            nama_pegawai = '$_POST[nama]',
            jenis_kelamin = '$_POST[jk]',
            tgl_lahir = '$_POST[tanggal]',
            id_jabatan = '$_POST[jabatan]',
            keterangan = '$_POST[keterangan]'
         ");
      }
   }

   if($error != ""){
      echo "<div class='alert alert-warning'>".$error."</div>";
      echo "<meta http-equiv='refresh' content='2; url=?hal=pegawai_tambah'>";
   }elseif($query){
      echo "<div class='alert alert-success'>Data berhasil disimpan!</div>";
      echo "<meta http-equiv='refresh' content='1; url=?hal=pegawai'>";
   }else{
      echo "<div class='alert alert-danger'>Tidak dapat menyimpan data!<br>";
      echo mysqli_error();
      echo "</div>";
   }
?>