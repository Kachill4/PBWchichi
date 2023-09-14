<STYLE>
    .title {
    font-family: "Times New Roman";
    font-size: 22pt;
    font-style: italic;
    font-weight: bold;
    color: white;
    text-align: center;
    padding: 25px;
    background: black;}
    .isi {
    border: 1px solid #8a8a8a;
    border-radius: 3px;
    padding: 7px;
    width: 120px;}
    .tabel{
    font-family: 'Times New Roman';
    font-size: 16px;
    background: #ddedde;
    }
</STYLE>
<?php

    echo "<title>KARGO</title>";

    echo "<p CLASS=title>
    KIRIM PAKET EXPRESS <BR>
    PT.TriCargo</p>";

    $bon = $_POST['bon'];
    $kode = $_POST['kode'];
    $berat = $_POST['berat'];
    if ($berat==""){
      echo "<script>alert('Data berat belum terisi !!!');
            history.go(-1);</script>";
    }
    else{
      $berat = $berat;
    }

    if ($kode == "Biasa")
      {$tarif = 4000;}
    else if ($kode =="Express")
      {$tarif = 5500;}
    else if ($kode == "Super Express")
      {$tarif = 7500;}
    else
      {$tarif = 0;}
  
    $jumlah = $tarif * $berat;
  
    if ($berat > 10 && $kode == "Biasa")
      {$ppn = 0.02 * $jumlah;}
    else if ($berat > 10 && $kode == "Express")
      {$ppn = 0.03 * $jumlah;}
    else if ($berat > 10 && $kode == "Super Express")
      {$ppn = 0.05 * $jumlah;}
    else
      {$ppn = 0;}
  
      $total = $jumlah + $ppn;
      echo "<TABLE ALIGN= CENTER class = tabel WIDTH = 500>";

      echo "<TR> <TD width=200>&nbsp;</TD> </TR>";

      echo "<TR><TD ALIGN= RIGHT> Nomor Bon : </TD>";
      echo "    <TD>$bon <BR></TD><TR>";

      echo "<TR><TD ALIGN= RIGHT> Jenis Pengiriman : </TD>";
      echo "    <TD>$kode <BR></TD><TR>";

      echo "<TR><TD ALIGN= RIGHT> Tarif Kirim Per Kg : </TD>";
      echo "    <TD>$tarif <BR></TD><TR>";

      echo "<TR><TD ALIGN= RIGHT> Berat Barang : </TD>";
      echo "    <TD>$berat <BR></TD><TR>";

      echo "<TR><TD ALIGN= RIGHT> Biaya Kirim : </TD>";
      echo "    <TD>$jumlah <BR></TD><TR>";

      echo "<TR><TD ALIGN= RIGHT> PPN : </TD>";
      echo "    <TD>$ppn <BR></TD><TR>";

      echo "<TR><TD ALIGN= RIGHT>---------- ---------- ----------</TD>";
      echo "    <TD>---------- ----------<BR></TD><TR>";

      echo "<TR><TD ALIGN= RIGHT> Jumlah Bayar : </TD>";
      echo "    <TD>$total <BR></TD><TR>";

      echo "<TR> <TD width=200>&nbsp;</TD> </TR>";

      echo "</TABLE>";

?> 
