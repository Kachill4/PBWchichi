<HTML><BODY><CENTER>
<!-- Cetak judul tabel & judul kolom -->
<B>DAFTAR REGISTRASI MAHASISWA</B><BR><BR>
<TABLE BORDER=1 CELLSPACING=0 CELLPADDING=5>
  <TR>
     <TH>Nomor Pokok<BR>Mahasiswa</TH>
     <TH>Jumlah<BR>SKS</TH>
     <TH>Jumlah<BR>Praktikum</TH>
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
	 echo "<TR><TD align=center>$row[NPM]</TD>
           <TD align=right>$row[J_SKS]</TD>
	       <TD align=right>$row[J_PRAKTIKUM]</TD></TR>";
   }
   // Tutup koneksi database
   mysqli_close($koneksi);
?>
</TABLE></BODY></HTML>
