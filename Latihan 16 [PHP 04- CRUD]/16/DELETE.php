<?php
   // Mengambil data nomor faktur
   $NoPeminjaman = $_GET['NoPeminjaman'];

   // Buka koneksi database
   require('KONEKSI.php');

   // Query untuk menghapus data
   mysqli_query($koneksi,
   "delete from PERPUS where NoPeminjaman='$NoPeminjaman'")
   or die('SQL error: '. mysqli_error($koneksi));
  
   // Kembali ke modul index.php
   header("location:INDEX.php");
?>	