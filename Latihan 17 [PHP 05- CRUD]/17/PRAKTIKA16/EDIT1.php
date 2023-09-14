<?php
   // Mengambil data nomor nip
   $NoFaktur = $_GET['NoFaktur'];

   // Buka koneksi database
   require('Koneksi.php');

   // Query untuk mengambil data yg dipilih
   $sql = "select NoFaktur, NmPelanggan, KdProduk, Jumlah, CaraBayar 
            from TRANS where NoFaktur='$NoFaktur'";
   $query = mysqli_query($koneksi,$sql) 
            or die('SQL error: '. mysqli_error($koneksi));
   $row = mysqli_fetch_array($query);
?>
<HEAD>
   <TITLE>EDIT DATA TRANSAKSI</TITLE>
   <STYLE>.tombol {
       font-size: 12pt;
       font-family: Arial;
       color: white;
       background-color: #8a8a8a;
       border: 1px solid #8a8a8a;
       border-radius: 3px;
       padding: 7px;
       width: 120px;}
    .tombol:hover {
       background-color: #bababa;}
    .tombol:active {
       background-color: #73e76d;}

    .tombol1 {
       font-size: 12pt;
       font-family: Arial;
       color: white;
       background-color: #8a8a8a;
       border: 1px solid #8a8a8a;
       border-radius: 3px;
       padding: 7px;
       width: 120px;}
    .tombol1:hover {
       background-color: #bababa;}
    .tombol1:active {
       background-color: #eb4949;}
</STYLE></HEAD>
<BODY><CENTER>
<B>Edit Data Transaksi</B>
<FORM METHOD="GET" ACTION="Edit2.php">
<TABLE>
<TR>
	<TD colspan=2><HR></TD>
</TR>
<TR>
	<TD align=right>Nomor Faktur : </TD>
	<TD><INPUT TYPE="text" NAME="NoFaktur" 
   <?php print "VALUE='$row[NoFaktur]'"; ?> READONLY></TD>
</TR>
<TR>
	<TD align=right>Nama Pelanggan : </TD>
	<TD><INPUT TYPE="text" NAME="NmPelanggan"
         <?php print "VALUE='$row[NmPelanggan]'"; ?>></TD>
</TR>
<TR>
	<TD align=right>Kode Produk : </TD>
	<TD><SELECT NAME="KdProduk">
	      <OPTION VALUE="A" <?php if($row['KdProduk']=="A") print "SELECTED"; ?>>A
		   <OPTION VALUE="B" <?php if($row['KdProduk']=="B") print "SELECTED"; ?>>B
         <OPTION VALUE="C" <?php if($row['KdProduk']=="C") print "SELECTED"; ?>>C
         <OPTION VALUE="D" <?php if($row['KdProduk']=="D") print "SELECTED"; ?>>D
        </SELECT></TD>
</TR>
<TR>
	<TD align=right>Jumlah : </TD>
	<TD><INPUT TYPE="text" NAME="Jumlah"
   <?php print "VALUE='$row[Jumlah]'"; ?>></TD>
</TR>
<TR>
	<TD align=right>Cara Bayar : </TD>
	<TD><INPUT TYPE="radio" NAME="CaraBayar" VALUE="Tunai"
         <?php if($row['CaraBayar']=="Tunai") print "CHECKED"; ?>>Tunai
	    <INPUT TYPE="radio" NAME="CaraBayar" VALUE="Kredit"
         <?php if($row['CaraBayar']=="Kredit") print "CHECKED"; ?>>Kredit</TD>
</TR>
<TR>
	<TD colspan=2><HR></TD>
</TR>
<TR>
   <TD colspan=2 ALIGN= Center>
   <INPUT TYPE="submit" VALUE="Rekam"  CLASS="tombol">
	    <INPUT TYPE="reset" VALUE="Reset"  CLASS="tombol1"></TD>
</TR>
</TABLE>
</FORM><BR>
    </Body>
<?php
   // Tampilkan daftar TRANS
   echo "<TABLE BORDER=1 CELLPADDING=5 CELLSPACING=0>
         <TR style = background-color:rgb(121,149,242)>
            <TH>Nomor<BR>Faktur</TH>
            <TH>Nama<BR>Pelanggan</TH>
            <TH>Kode<BR>Produk</TH>
            <TH>Nama<BR>Produk</TH>
            <TH>Jumlah</TH>
            <TH>Harga<BR>Produk</TH>
            <TH>Harga<BR>Total</TH>
            <TH>Diskon<BR>(Rp)</TH>
            <TH>Tagihan</TH>
            <TH>Cara<BR>Bayar</TH>
            <TH>Aksi</TH>
         </TR>";

   $sql = "select NoFaktur, NmPelanggan, KdProduk, Jumlah, CaraBayar from TRANS";
   $query = mysqli_query($koneksi,$sql)
            or die('SQL error: '. mysqli_error($koneksi));

   while ($row = mysqli_fetch_array($query))
   {
      if ($row['KdProduk'] == "A"){
         $NmProduk = "Keyboard standar";
         $HargaProduk = 75000;
         $MinDiskon = 5; //Diskon Minimal Barang
         if($MinDiskon<$row["Jumlah"]){
            $Disc = 15/100;}
            else{$Disc = 0;}
      }
     else if ($row['KdProduk'] == "B"){
         $NmProduk = "Keyboard wireless ";
         $HargaProduk = 160000;
         $MinDiskon = 10; //Diskon Minimal Barang
         if($MinDiskon<$row["Jumlah"]){
            $Disc = 25/100;}
            else{$Disc = 0;}
      }
     else if ($row['KdProduk'] == "C"){
         $NmProduk = "Mouse optik";
         $HargaProduk = 55000;
         $MinDiskon = 10; //Diskon Minimal Barang
         if($MinDiskon<$row["Jumlah"]){
            $Disc = 10/100;}
            else{$Disc = 0;}
      }
     else if ($row['KdProduk'] == "D"){
      $NmProduk = "Mouse wireless";
      $HargaProduk = 135000;
      $MinDiskon = 5; //Diskon Minimal Barang
      if($MinDiskon<$row["Jumlah"]){
         $Disc = 25/100;}
         else{$Disc = 0;}
      }
     else {
         $nama = " ";
         $HargaProduk = 0;
     }
     $HargaTotal = $HargaProduk * $row["Jumlah"];
     $Diskon = $HargaTotal * $Disc;
     $Tagihan = $HargaTotal - $Diskon;

	  echo "<TR>
	         <TD align=center>$row[NoFaktur]</TD>
            <TD align=center>$row[NmPelanggan]</TD>
	         <TD align=center>$row[KdProduk]</TD>
            <TD align=center>$NmProduk</TD>
            <TD align=center>$row[Jumlah]</TD>
            <TD>Rp"; echo number_format($HargaProduk , 2, ',','.'); echo"  </TD>
            <TD>Rp"; echo number_format($HargaTotal , 2, ',','.'); echo"  </TD>
            <TD>Rp"; echo number_format($Diskon , 2, ',','.'); echo"  </TD>
            <TD>Rp"; echo number_format($Tagihan , 2, ',','.'); echo"  </TD>
	         <TD align=center>$row[CaraBayar]</TD>
	         <TD align=center>
	         <A HREF='Edit1.php?NoFaktur=$row[NoFaktur]'>Edit</A>&nbsp;
            <A HREF='Delete.php?NoFaktur=$row[NoFaktur]' 
                     onClick='return confirm(\"Hapus TRANS dg NoFaktur  $row[NoFaktur]?\")'>Hapus</A>
	        </TR>";
   }
   echo "</TABLE>";

   // Tutup koneksi database
   mysqli_close($koneksi);
?>
