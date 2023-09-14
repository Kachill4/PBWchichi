<?php
   // Mengambil data dari form 
   $nofaktur = $_GET['nofaktur'];
   $barang   = $_GET['barang'];
   $harga    = $_GET['harga'];
   $banyak   = $_GET['banyak'];

   // Buka koneksi database
   require('Koneksi.php');

   // Query tambah data baru
   $sql = "insert into JUAL 
           values ('$nofaktur','$barang','$harga','$banyak')";
   mysqli_query($koneksi,$sql) 
   or die('SQL error: '. mysqli_error($koneksi));

   // Kembali ke modul index.php 
   header("location:Index.php"); 
?>
