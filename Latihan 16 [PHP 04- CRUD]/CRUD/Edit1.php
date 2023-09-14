<?php
   // Mengambil data nomor faktur
   $nofaktur = $_GET['nofaktur'];

   // Buka koneksi database
   require('Koneksi.php');

   // Query untuk mengambil data faktur yg dipilih
   $sql = "select nofaktur,barang,harga,banyak from JUAL where nofaktur='$nofaktur'";
   $query = mysqli_query($koneksi,$sql) 
            or die('SQL error: '. mysqli_error($koneksi));
   $row = mysqli_fetch_array($query);

   // Tampilkan data lama yang akan di-edit
   echo "<FORM METHOD=GET ACTION='Edit2.php'>
         <B><U>DATA PENJUALAN TOKO ABC</U></B><BR><BR>
         <TABLE>
		 <TR>
			<TD>No.Faktur :</TD>
			<TD><INPUT TYPE='text' NAME='nofaktur' VALUE='$row[nofaktur]' SIZE='10' READONLY></TD>
		 </TR>
		 <TR>
			<TD>Nama Barang :</TD>
			<TD><INPUT TYPE='text' NAME='barang' VALUE='$row[barang]' SIZE='20'></TD>
		 </TR>
		 <TR>
			<TD>Harga Satuan :</TD>
			<TD><INPUT TYPE='text' NAME='harga' VALUE='$row[harga]' SIZE='10'></TD>
		 </TR>
		 <TR>
			<TD>Banyak Unit :</TD>
			<TD><INPUT TYPE='text' NAME='banyak' VALUE='$row[banyak]' SIZE='10'></TD>
		 </TR>
		 <TR>
			<TD>&nbsp;</TD>
			<TD><INPUT TYPE='submit' VALUE='Rekam'>
		    <INPUT TYPE='reset' VALUE='Hapus'></TD>
		 </TR>
		 </TABLE></TABLE></FORM><BR>";

   // Tampilkan daftar penjualan
   echo "<TABLE BORDER=1 CELLPADDING=5 CELLSPACING=0>
		 <TR>
			<TH>Nomor Faktur</TH>
			<TH>Nama Barang</TH>
			<TH>Harga Satuan</TH>
			<TH>Banyak Unit</TH>
			<TH>Edit & Delete</TH>
		 </TR>";

   $sql = "select nofaktur,barang,harga,banyak from JUAL";
   $query = mysqli_query($koneksi,$sql)
            or die('SQL error: '. mysqli_error($koneksi));

   while ($row = mysqli_fetch_array($query))
   {
	  echo "<TR><TD align=center>$row[nofaktur]</TD>
		    <TD>$row[barang]</TD>
			<TD align=right>$row[harga]</TD>
			<TD align=right>$row[banyak]</TD>
			<TD align=center>
			<A HREF='Edit1.php?nofaktur=\"$row[nofaktur]\"'>Edit</A>&nbsp;
			<A HREF='Delete.php?nofaktur=\"$row[nofaktur]\"' 
                     onClick='return confirm(\"Hapus faktur $row[nofaktur]?\")'>Hapus</A>
			</TD></TR>";
   }
   echo "</TABLE>";

   // Tutup koneksi database
   mysqli_close($koneksi);
?>
