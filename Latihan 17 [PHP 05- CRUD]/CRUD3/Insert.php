<?php
   // Mengambil data dari form 
   $nip = $_GET['nip'];
   $gol = $_GET['gol'];
   $gender = $_GET['gender'];

   // Buka koneksi database
   require('Koneksi.php');

   // Query tambah data baru
   $sql = "insert into PEKERJA 
           values ('$nip','$gol','$gender')";
   mysqli_query($koneksi,$sql) 
   or die('SQL error: '. mysqli_error($koneksi));

   // Kembali ke modul index.php 
   header("location:Index.php"); 
?>