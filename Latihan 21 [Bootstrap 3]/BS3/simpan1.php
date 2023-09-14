<?php
   // Mengambil data dari form 
   $id_obat = $_GET['id_obat'];
   $nama_obat = $_GET['nama_obat'];
   $harga = $_GET['harga'];
   $stok = $_GET['stok'];
   
   // Buka koneksi database
   $koneksi = mysqli_connect("localhost","root","","pbw")
              or die("Koneksi database gagal : ". mysqli_connect_error());

   // Query tambah data baru
   $sql = "insert into OBAT 
           values ('$id_obat','$nama_obat','$harga','$stok')";
   mysqli_query($koneksi,$sql) 
   or die('SQL error: '. mysqli_error($koneksi));

   // Kembali ke menu.php 
   header("location:menu.php"); 
?>
