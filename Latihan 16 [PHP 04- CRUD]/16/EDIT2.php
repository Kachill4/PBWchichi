<?php
   // Mengambil data dari form 
   $NoPeminjaman    = $_GET['NoPeminjaman'];
   $NPM             = $_GET['NPM'];
   $KdKategori      = $_GET['KdKategori'];
   $TglPinjam       = $_GET['TglPinjam'];
   $TglKembali      = $_GET['TglKembali'];

   // Buka koneksi database
   require('KONEKSI.php');

   // Query edit data
   $sql = "update PERPUS set 
            NoPeminjaman='$NoPeminjaman',
            NPM='$NPM',
            KdKategori='$KdKategori',
            TglPinjam='$TglPinjam',
            TglKembali='$TglKembali' 
           where NoPeminjaman='$NoPeminjaman'";
   mysqli_query($koneksi,$sql)
   or die('SQL error: '. mysqli_error($koneksi));

   // Kembali ke modul index.php
   header("location:Index.php"); 
?>
