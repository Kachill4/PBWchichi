<?php
   // Mengambil data nomor faktur
   $NoPeminjaman = $_GET['NoPeminjaman'];

   // Buka koneksi database
   require('KONEKSI.php');

   // Query untuk mengambil data faktur yg dipilih
   $sql = "select NoPeminjaman,NPM,KdKategori,TglPinjam,TglKembali from PERPUS where NoPeminjaman='$NoPeminjaman'";
   $query = mysqli_query($koneksi,$sql) 
            or die('SQL error: '. mysqli_error($koneksi));
   $row = mysqli_fetch_array($query);

   // Tampilkan data lama yang akan di-edit
   echo "<FORM METHOD=GET ACTION='Edit2.php'>
         <H3><B><U>PERPUSTAKAAN KAMPUS PQR</U></B><BR></H3>
         <TABLE>
         <TR>
            <TD>No.Peminjaman :</TD>
            <TD><INPUT TYPE='text'NAME='NoPeminjaman' VALUE='$row[NoPeminjaman]' SIZE='5' READONLY></TD>
        </TR>
        <TR>
            <TD>NPM :</TD>
            <TD><INPUT TYPE='text'NAME='NPM' VALUE='$row[NPM]' SIZE='10'></TD>
        </TR>
        <TR>
            <TD>KdKategori :</TD>
            <TD><INPUT TYPE='text'NAME='KdKategori' VALUE='$row[KdKategori]' SIZE='1' ></TD>
        </TR>
        <TR>
            <TD>TglPinjam :</TD>
            <TD><INPUT TYPE='DATE'NAME='TglPinjam' VALUE='$row[TglPinjam]' ></TD>
        </TR>
        <TR>
            <TD>TglKembali :</TD>
            <TD><INPUT TYPE='DATE'NAME='TglKembali' VALUE='$row[TglKembali]'></TD>
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
            <TH>NoPeminjaman</TH>
            <TH>NPM</TH>
            <TH>KdKategori</TH>
            <TH>TglPinjam</TH>
            <TH>TglKembali</TH>
            <TH>Edit & Delete</TH>
		</TR>";
    

    $sql = "select NoPeminjaman,NPM,KdKategori,TglPinjam,TglKembali from PERPUS";
   $query = mysqli_query($koneksi,$sql)
            or die('SQL error: '. mysqli_error($koneksi));

   while ($row = mysqli_fetch_array($query)){
        echo "<TR>
        <TD align=center>$row[NoPeminjaman]</TD>
        <TD align=center>$row[NPM]</TD>
        <TD align=center>$row[KdKategori]</TD>
        <TD align=right>$row[TglPinjam]</TD>
        <TD align=right>$row[TglKembali]</TD>
        <TD align=center>
        <A HREF='Edit1.php?NoPeminjaman=$row[NoPeminjaman]'>Edit</A>&nbsp;
        <A HREF='Delete.php?NoPeminjaman=$row[NoPeminjaman]' 
                onClick='return confirm(\"Hapus NoPeminjaman $row[NoPeminjaman]?\")'>Hapus</A>
        </TR>";
    }
   echo "</TABLE>";

   // Tutup koneksi database
   mysqli_close($koneksi);
?>
