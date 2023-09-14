<?php
   // Mengambil data nip
   $nip = $_GET['nip'];

   // Buka koneksi database
   require('Koneksi.php');

   // Query untuk menghapus data
   mysqli_query($koneksi,"delete from PEKERJA where nip='$nip'")
   or die('SQL error: '. mysqli_error($koneksi));
  
   // Kembali ke modul index.php
   header("location:Index.php");
?>	