<?php
  $kode = $_POST['kode'];
  $harga = $_POST['harga'];
  $banyak = $_POST['banyak'];

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
