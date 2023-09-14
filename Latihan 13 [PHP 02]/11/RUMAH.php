<STYLE>
    .title {
    font-family: "Book Antiqua";
    font-size: 26pt;
    font-style: italic;
    font-weight: bold;
    color: white;
    text-align: center;
    padding: 25px;
    background: #12e667;}
    .tabel{
    font-family: 'Times New Roman';
    font-size: 16px;
    background: #e1fcae;
    }
</STYLE>
<?php

    echo "<title>RUMAH</title>";

    echo "<p CLASS=title>KAVLING IJK<BR></p>";

    $noka = $_POST['noka'];
    $tipe = $_POST['tipe'];
    $angsuran = $_POST['angsuran'];
    $var = "/^[0-9]*$/";

    if ($noka==""){
      echo "<script>alert('Data Nomor Kavling belum terisi !!!');
            history.go(-1);</script>";
    }
    else if (!preg_match($var,$noka)){
      echo "<script>alert('Data Nomor Kavling hanya terdiri atas angka !!!');
        history.go(-1);</script>";
    }
    else if (($noka<1)||($noka>999)){
       echo "<script>alert('Data Nomor Kavling terdiri atas 3 digit angka !!!');
        history.go(-1);</script>";
    }
    else {$noka = $noka;}

    switch ($tipe){
      case 0 : $tarif = 0; echo "<script>alert('Pilihlah Tipe Rumahnya!!!');
      history.go(-1);</script>"; break; 
      case 1 : $tarif = 240000000; $ntr="T36"; break;
      case 2 : $tarif = 290000000;  $ntr="T45"; break;
      case 3 : $tarif = 425000000;  $ntr="T70"; break;
    }

    if (isset($_POST['fasilitas1']))
         {$fas1=4000000;} 
    else {$fas1=0;}
    
    if (isset($_POST['fasilitas2']))
         {$fas2=2500000;} 
    else {$fas2=0;} 

    $jumfas = $fas1 + $fas2;

    if ($jumfas == 6500000)
     {$nfas= "'Kitchen Set' dan 'Water Heater'";}
    else if ($jumfas == 4000000)
     {$nfas="Kitchen Set";} 
    else if ($jumfas == 2500000)
     {$nfas="Water Heater";}
    else {$nfas="Tidak memilih fasilitas";}

    if ($angsuran==""){
      echo "<script>alert('Data Lama Kredit belum terisi !!!');
            history.go(-1);</script>";
    }
    else if (!preg_match($var,$angsuran)){
      echo "<script>alert('Data Lama Kredit hanya terdiri atas angka !!!');
        history.go(-1);</script>";
    }
    else if (($angsuran<1)){
       echo "<script>alert('Data Lama Kredit terdiri atas angka positif !!!');
        history.go(-1);</script>";
    }
    else{ $angsuran = $angsuran; }

    $umu = $tarif * 0.2;
    $bekre = $tarif + $jumfas - $umu;
    $biaya = ($bekre / $angsuran)/12; 

      echo "<TABLE ALIGN= CENTER class = tabel WIDTH = 500>";

      echo "<TR> <TD width=200>&nbsp;</TD> </TR>";

      echo "<TR><TD ALIGN= RIGHT> Nomor Kavling : </TD>";
      echo "    <TD>$noka <BR></TD><TR>";

      echo "<TR><TD ALIGN= RIGHT> Tipe Rumah : </TD>";
      echo "    <TD>$ntr <BR></TD><TR>";



      echo "<TR><TD ALIGN= RIGHT> Harga Rumah : </TD>";
      echo "    <TD>Rp ";
      echo number_format($tarif, 2, ',','.');
      echo "    </TD>";

      echo "<TR><TD ALIGN= RIGHT> Fasilitas : </TD>";
      echo "    <TD>$nfas <BR></TD><TR>";

      echo "<TR><TD ALIGN= RIGHT> Fee Extra : </TD>";
      echo "    <TD>Rp ";
      echo number_format($jumfas, 2, ',','.');
      echo "    </TD>";

      echo "<TR><TD ALIGN= RIGHT> Uang Muka : </TD>";
      echo "    <TD>Rp ";
      echo number_format($umu, 2, ',','.');
      echo "    </TD>";

      echo "<TR><TD ALIGN= RIGHT> Besar Kredit : </TD>";
      echo "    <TD>Rp ";
      echo number_format($bekre, 2, ',','.');
      echo "    </TD>";

      echo "<TR><TD ALIGN= RIGHT><B> Angsuran per bulan : </B></TD>";
      echo "    <TD>Rp ";
      echo number_format($biaya, 2, ',','.');
      echo "    </TD>";

      echo "<TR> <TD width=200>&nbsp;</TD> </TR>";

      echo "</TABLE>";

?> 
