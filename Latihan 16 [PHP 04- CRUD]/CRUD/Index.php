<HTML>
<BODY>
<FORM METHOD="GET" ACTION="Insert.php">
<H3>DATA PENJUALAN TOKO ABC</H3>
<TABLE>
<TR>
	<TD>No.Faktur :</TD>
	<TD><INPUT TYPE="text" NAME="nofaktur"></TD>
</TR>
<TR>
	<TD>Nama Barang :</TD>
	<TD><INPUT TYPE="text" NAME="barang"></TD>
</TR>
<TR>
	<TD>Harga Satuan :</TD>
	<TD><INPUT TYPE="text" NAME="harga"></TD>
</TR>
<TR>
	<TD>Banyak Unit :</TD>
	<TD><INPUT TYPE="text" NAME="banyak"></TD>
</TR>
<TR>
	<TD>&nbsp;</TD>
	<TD><INPUT TYPE="submit" VALUE="Rekam">
	    <INPUT TYPE="reset" VALUE="Reset"></TD>
</TR>
</TABLE>
</FORM><BR>

<TABLE BORDER='1' CELLPADDING='5' CELLSPACING='0'>
  <TR>
     <TH>Nomor Faktur</TH>
     <TH>Nama Barang</TH>
     <TH>Harga Satuan</TH>
     <TH>Banyak Unit</TH>
     <TH>Edit & Delete</TH>
  </TR>

<?php
   // Buka koneksi database
   require('Koneksi.php');

   // Query untuk mengambil seluruh data faktur
   $sql = "select nofaktur,barang,harga,banyak from JUAL";
   $query = mysqli_query($koneksi,$sql) 
            or die('SQL error: '. mysqli_error($koneksi));

   // Cetak isi tabel 
   while ($row = mysqli_fetch_array($query))
   {
	  echo "<TR>
	        <TD align=center>$row[nofaktur]</TD>
            <TD>$row[barang]</TD>
	        <TD align=right>$row[harga]</TD>
	        <TD align=right>$row[banyak]</TD>
	        <TD align=center>
	        <A HREF='Edit1.php?nofaktur=$row[nofaktur]'>Edit</A>&nbsp;
            <A HREF='Delete.php?nofaktur=$row[nofaktur]' 
                     onClick='return confirm(\"Hapus faktur $row[nofaktur]?\")'>Hapus</A>
	        </TR>";
   }
   
   // Tutup koneksi database
   mysqli_close($koneksi);
?>
</TABLE>
</BODY>
</HTML>

