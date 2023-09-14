<?php
   // Mengambil data dari form 
   $NoFaktur    = $_GET['NoFaktur'];
   $NmPelanggan = $_GET['NmPelanggan'];
   $KdProduk    = $_GET['KdProduk'];
   $Jumlah      = $_GET['Jumlah'];
   $CaraBayar   = $_GET['CaraBayar'];

   // Buka koneksi database
   require('Koneksi.php');

   // Query edit data
   $sql = "update Trans set
                NmPelanggan  ='$NmPelanggan',
                KdProduk     ='$KdProduk',
                Jumlah       ='$Jumlah',
                CaraBayar    ='$CaraBayar'
           where NoFaktur ='$NoFaktur'";
   mysqli_query($koneksi,$sql)
   or die('SQL error: '. mysqli_error($koneksi));

   // Kembali ke modul index.php
   header("location:Index.php"); 
?>
