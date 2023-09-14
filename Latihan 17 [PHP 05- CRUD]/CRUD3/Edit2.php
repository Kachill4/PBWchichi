<?php
   // Mengambil data dari form 
   $nip = $_GET['nip'];
   $gol = $_GET['gol'];
   $gender = $_GET['gender'];

   // Buka koneksi database
   require('Koneksi.php');

   // Query edit data
   $sql = "update PEKERJA set gol='$gol',gender='$gender' 
           where nip='$nip'";
   mysqli_query($koneksi,$sql)
   or die('SQL error: '. mysqli_error($koneksi));

   // Kembali ke modul index.php
   header("location:Index.php"); 
?>
