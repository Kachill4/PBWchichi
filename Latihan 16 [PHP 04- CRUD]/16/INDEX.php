<HTML>
    <HEAD>
    <TITLE>PERPUSTAKAAN_INDEX.php</TITLE>
    </HEAD>
<BODY>
<FORM METHOD="GET" ACTION="INSERT.php">
<H3>PERPUSTAKAAN KAMPUS PQR</H3>
<TABLE>
<TR>
	<TD ALIGN=RIGHT>No.Peminjaman :</TD>
	<TD><INPUT TYPE="text" NAME="NoPeminjaman"></TD>
</TR>
<TR>
	<TD ALIGN=RIGHT>NPM :</TD>
	<TD><INPUT TYPE="text" NAME="NPM"></TD>
</TR>
<TR>
	<TD ALIGN=RIGHT>Kode Kategori :</TD>
	<TD><INPUT TYPE="text" NAME="KdKategori"></TD>
</TR>
<TR>
	<TD ALIGN=RIGHT>TglPinjam :</TD>
	<TD><INPUT TYPE="DATE" NAME="TglPinjam"></TD>
</TR>
<TR>
	<TD ALIGN=RIGHT>TglKembali :</TD>
	<TD><INPUT TYPE="DATE" NAME="TglKembali"></TD>
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
     <TH>Nomor <BR> Peminjaman</TH>
     <TH>NPM</TH>
     <TH>Kode <BR> Kategori</TH>
     <TH>Nama <BR> Kategori</TH>
     <TH>Tanggal <BR> Pinjam</TH>
     <TH>Tanggal <BR> Kembali</TH>
     <TH>Lama <BR> Pinjam</TH>
     <TH>Jumlah  <BR> Denda</TH>
     <TH>Edit & Delete</TH>
  </TR>

<?php
   // Buka koneksi database
   require('KONEKSI.php');

   // Query untuk mengambil seluruh data faktur
    $sql = "select NoPeminjaman,NPM,KdKategori,TglPinjam,TglKembali from PERPUS";
    $query = mysqli_query($koneksi,$sql) 
            or die('SQL error: '. mysqli_error($koneksi));
    $total = 0;
    $rata=0;
   // Cetak isi tabel 
   while ($row = mysqli_fetch_array($query)){
    if ($row['KdKategori'] == "A"){
        $nama = "Sains";
        $denda = 1000;
    }
    else if ($row['KdKategori'] == "B"){
        $nama = "Fiksi";
        $denda = 500;
    }
    else if ($row['KdKategori'] == "C"){
        $nama = "Agama";
        $denda = 750;
    }
    else {
        $nama = " ";
        $denda = 0;
    }

	echo "<TR>
	        <TD align=center> $row[NoPeminjaman]</TD>
            <TD align=center> $row[NPM]</TD>
            <TD align=center> $row[KdKategori]</TD>
            <TD align=center> $nama </TD>
	        <TD align=right > $row[TglPinjam]</TD>
	        <TD align=right > $row[TglKembali]</TD>"; 
            
            $pinjam = new DateTime($row['TglPinjam']);
            $kembali = new DateTime($row['TglKembali']);
            $diff = $kembali->diff($pinjam);
            $selisih = $diff->d;
    echo "  <TD align=center> $selisih </TD>";

    if ($selisih >=7){
        $telat = $selisih-7;
        $bayar = $telat*$denda;
        $rata ++;
    }
    else {
        $bayar = 0;
        $rata ++;
    }

    $total = $total + $bayar;
    $ratarata = $total / $rata;

    echo "<TD>Rp"; echo number_format($bayar , 2, ',','.');
    echo   "</TD>
	        <TD align=center>
	        <A HREF='EDIT1.php?NoPeminjaman=$row[NoPeminjaman]'>Edit</A>&nbsp;
            <A HREF='DELETE.php?NoPeminjaman=$row[NoPeminjaman]' 
                     onClick='return confirm(\"Hapus NoPeminjaman $row[NoPeminjaman]?\")'>Hapus</A>
	        </TR>";
   }
   // Tutup koneksi database
   mysqli_close($koneksi);
?>
    <?php
    echo "
    <TR>
        <TD COLSPAN=7 ALIGN=RIGHT> TOTAL :</TD>
        <TD COLSPAN=2> $total </TD>
    </TR>
    <TR>
        <TD COLSPAN=7 ALIGN=RIGHT> RATA-RATA : :</TD>
        <TD COLSPAN=2> $ratarata </TD>
    </TR>"; ?>
</TABLE>
</BODY>
</HTML>

