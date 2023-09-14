<HTML>
<BODY>
<B>DATA PEKERJA PT ABC</B>
<FORM METHOD="GET" ACTION="Insert.php">
<TABLE>
<TR>
	<TD colspan=2><HR></TD>
</TR>
<TR>
	<TD align=right>NIP : </TD>
	<TD><INPUT TYPE="text" NAME="nip"></TD>
</TR>
<TR>
	<TD align=right>Golongan : </TD>
	<TD><SELECT NAME="gol">
	       <OPTION VALUE="1">1
		   <OPTION VALUE="2">2
           <OPTION VALUE="3">3
        </SELECT></TD>
</TR>
<TR>
	<TD  align=right>Gender : </TD>
	<TD><INPUT TYPE="radio" NAME="gender" VALUE="L">Laki-laki
	    <INPUT TYPE="radio" NAME="gender" VALUE="W">Wanita</TD>
</TR>
<TR>
	<TD colspan=2><HR></TD>
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
     <TH>NIP</TH>
     <TH>Golongan</TH>
     <TH>Gender</TH>
     <TH>Edit & Delete</TH>
  </TR>

<?php
   // Buka koneksi database
   require('Koneksi.php');

   // Query untuk mengambil seluruh data pekerja
   $sql = "select nip, gol, gender from PEKERJA";
   $query = mysqli_query($koneksi,$sql) 
            or die('SQL error: '. mysqli_error($koneksi));

   // Cetak isi tabel 
   while ($row = mysqli_fetch_array($query))
   {
	  echo "<TR>
	        <TD align=center>$row[nip]</TD>
            <TD align=center>$row[gol]</TD>
	        <TD align=center>$row[gender]</TD>
	        <TD align=center>
	        <A HREF='Edit1.php?nip=$row[nip]'>Edit</A>&nbsp;
            <A HREF='Delete.php?nip=$row[nip]' 
                     onClick='return confirm(\"Hapus pekerja dg NIP  $row[nip]?\")'>Hapus</A>
	        </TR>";
   }
   
   // Tutup koneksi database
   mysqli_close($koneksi);
?>
</TABLE>
</BODY>
</HTML>