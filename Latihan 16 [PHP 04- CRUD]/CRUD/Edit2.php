<?php
   // Mengambil data dari form 
   $nofaktur = $_GET['nofaktur'];
   $barang   = $_GET['barang'];
   $harga    = $_GET['harga'];
   $banyak   = $_GET['banyak'];

   // Buka koneksi database
   require('Koneksi.php');

   // Query edit data
   $sql = "update JUAL set barang='$barang',harga='$harga',banyak='$banyak' 
           where nofaktur='$nofaktur'";
   mysqli_query($koneksi,$sql)
   or die('SQL error: '. mysqli_error($koneksi));

   // Kembali ke modul index.php
   header("location:Index.php"); 
?>
