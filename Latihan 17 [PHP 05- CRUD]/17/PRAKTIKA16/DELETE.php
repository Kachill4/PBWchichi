<?php
   // Mengambil data nip
   $NoFaktur = $_GET['NoFaktur'];

   // Buka koneksi database
   require('Koneksi.php');

   // Query untuk menghapus data
   mysqli_query($koneksi,"delete from Trans where NoFaktur='$NoFaktur'")
   or die('SQL error: '. mysqli_error($koneksi));
  
   // Kembali ke modul index.php
   header("location:Index.php");
?>