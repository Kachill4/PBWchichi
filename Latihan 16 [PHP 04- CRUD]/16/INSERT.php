<?php
   // Mengambil data dari form 
   $NoPeminjaman    = $_GET['NoPeminjaman'];
   $NPM             = $_GET['NPM'];
   $KdKategori      = $_GET['KdKategori'];
   $TglPinjam       = $_GET['TglPinjam'];
   $TglKembali      = $_GET['TglKembali'];

   // Buka koneksi database
   require('KONEKSI.php');

   // Query tambah data baru
   $sql = "insert into PERPUS 
           values ('$NoPeminjaman','$NPM','$KdKategori','$TglPinjam','$TglKembali')";
   mysqli_query($koneksi,$sql) 
   or die('SQL error: '. mysqli_error($koneksi));

   // Kembali ke modul index.php 
   header("location:INDEX.php"); 
?>
