<?php
  $kode = $_GET['kode'];
  $harga = $_GET['harga'];
  $banyak = $_GET['banyak'];

  $total = $harga * $banyak;
  if ($banyak > 10)
     {$diskon = 0.1 * $total;}
  else
     {$diskon = 0;}
  $bayar = $total - $diskon;
  print "Kode Barang : $kode <BR>";
  print "Harga Total : $total <BR>";
  print "Potongan : $diskon <BR>";
  print "Jumlah Bayar : $bayar";
?>
