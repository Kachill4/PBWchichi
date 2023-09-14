<STYLE>
    .title {
    font-family: "Times New Roman";
    font-size: 22pt;
    font-style: italic;
    font-weight: bold;
    color: white;
    text-align: center;
    padding: 25px;
    background: #de9d23;}
    .tabel{
    font-family: 'Times New Roman';
    font-size: 16px;
    background: #ddedde;
    }
</STYLE>
<?php

    echo "<title>FOTOKOPI</title>";

    echo "<p CLASS=title>PHOTOCOPY EFG</p>";

    $bon = $_POST['bon'];
    $ukuran = $_POST['ukuran'];
    $juco = $_POST['juco'];
    $jilid = $_POST['jilid'];

    $var = "/^[0-9]*$/";

    if ($bon==""){
      echo "<script>alert('Data Bon belum terisi !!!');
            history.go(-1);</script>";
    }
    else if (!preg_match($var,$bon)){
      echo "<script>alert('Data Bon hanya terdiri atas angka !!!');
        history.go(-1);</script>";
    }
    else if (($bon<1)||($bon>999)){
       echo "<script>alert('Data Bon terdiri atas 3 digit angka !!!');
        history.go(-1);</script>";
    }
    else {$bon = $bon;}

    switch ($ukuran){
      case 0 : $tarif = 0; echo "<script>alert('Pilihlah Ukuran Kertasnya!!!');
      history.go(-1);</script>"; break; 
      case 1 : $tarif = 125; $nuk="A3"; break;
      case 2 : $tarif = 75;  $nuk="A4"; break;
      case 3 : $tarif = 90;  $nuk="F4"; break;
    }

    if ($juco==""){
      echo "<script>alert('Data Jumlah Copy belum terisi !!!');
            history.go(-1);</script>";
    }
    else if (!preg_match($var,$juco)){
      echo "<script>alert('Data Jumlah Copy hanya terdiri atas angka !!!');
        history.go(-1);</script>";
    }
    else if (($juco<1)){
       echo "<script>alert('Data Jumlah Copy terdiri atas angka positif !!!');
        history.go(-1);</script>";
    }
    else{ $juco = $juco; }

    $biaya = $tarif * $juco;
  
    if ($juco > 100 )
      {$disc = 0.2 * $biaya;}
    else
      {$disc = 0;}

    if ($jilid == "Softcover")
      {$hjil = 6500;}
    else if ($jilid =="Hardcover")
      {$hjil = 9000;}
    else
      {$hjil = 0;}
  
      $total = $biaya - $disc + $hjil;
      echo "<TABLE ALIGN= CENTER class = tabel WIDTH = 500>";

      echo "<TR> <TD width=200>&nbsp;</TD> </TR>";

      echo "<TR><TD ALIGN= RIGHT> Nomor Bon : </TD>";
      echo "    <TD>$bon <BR></TD><TR>";

      echo "<TR><TD ALIGN= RIGHT> Ukuran Kertas : </TD>";
      echo "    <TD>$nuk <BR></TD><TR>";

      echo "<TR><TD ALIGN= RIGHT> Jumlah Copy : </TD>";
      echo "    <TD>$juco <BR></TD><TR>";

      echo "<TR><TD ALIGN= RIGHT> Jenis Jilid : </TD>";
      echo "    <TD>$jilid <BR></TD><TR>";

      echo "<TR><TD ALIGN= RIGHT> Biaya Copy : </TD>";
      echo "    <TD>$biaya <BR></TD><TR>";

      echo "<TR><TD ALIGN= RIGHT> Biaya Jilid : </TD>";
      echo "    <TD>$hjil <BR></TD><TR>";

      echo "<TR><TD ALIGN= RIGHT> Diskon : </TD>";
      echo "    <TD>$disc <BR></TD><TR>";

      echo "<TR><TD ALIGN= RIGHT>---------- ---------- ----------</TD>";
      echo "    <TD>---------- ----------<BR></TD><TR>";

      echo "<TR><TD ALIGN= RIGHT> Jumlah Bayar : </TD>";
      echo "    <TD>$total <BR></TD><TR>";

      echo "<TR> <TD width=200>&nbsp;</TD> </TR>";

      echo "</TABLE>";

?> 
