<HTML><BODY><CENTER>
<!-- Cetak judul tabel & judul kolom -->
<B>DAFTAR REGISTRASI MAHASISWA</B><BR><BR>
<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=5>
  <TR>
     <TH>Nomor Pokok<BR>Mahasiswa</TH>
     <TH>Jumlah<BR>SKS</TH>
     <TH>Jumlah<BR>Praktikum</TH>
     <TH>Biaya<BR>Kuliah</TH>
     <TH>Biaya<BR>Praktikum</TH>
     <TH>Jumlah<BR>Biaya</TH>
  </TR>

<?php  
   // Buka koneksi database
   $koneksi = mysqli_connect("localhost","root","","pbw")
              or die("Koneksi database gagal : ". mysqli_connect_error());

   // Query untuk mengambil data registrasi
   $sql = "select NPM, J_SKS, J_PRAKTIKUM from REGISTRASI";
   $query = mysqli_query($koneksi,$sql)
            or die('SQL error: '. mysqli_error($koneksi));
			
   // Menampilkan hasil query
   while ($row = mysqli_fetch_array($query))
   {
     $bikul = $row['J_SKS'] * 200000;
     $biprak = $row['J_PRAKTIKUM'] * 250000;
	 $jumbi = $bikul + $biprak;
	 echo "<TR>
	       <TD align=center>$row[NPM]</TD>
           <TD align=right>$row[J_SKS]</TD>
	       <TD align=right>$row[J_PRAKTIKUM]</TD>
		   <TD align=right>$bikul</TD>
	       <TD align=right>$biprak</TD>
		   <TD align=right>$jumbi</TD>
		   </TR>";
   }
   // Tutup koneksi database
   mysqli_close($koneksi);
?>
</TABLE></BODY></HTML>
