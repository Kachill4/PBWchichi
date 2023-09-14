<?php
   // Mengambil data nomor faktur
   $nofaktur = $_GET['nofaktur'];

   // Buka koneksi database
   require('Koneksi.php');

   // Query untuk menghapus data
   mysqli_query($koneksi,"delete from JUAL where nofaktur='$nofaktur'")
   or die('SQL error: '. mysqli_error($koneksi));
  
   // Kembali ke modul index.php
   header("location:Index.php");
?>	