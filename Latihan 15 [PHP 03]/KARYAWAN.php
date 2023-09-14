<HTML>
<HEAD>
    <TITLE>KARYAWAN.php</TITLE>
</HEAD>    
<BODY><CENTER>
<!-- Cetak judul tabel & judul kolom -->
<B>DAFTAR REGISTRASI MAHASISWA</B><BR><BR>
<TABLE BORDER="1" 
    CELLPADDING="5" 
    CELLSPACING="0" 
    P ALIGN="CENTER"
    width="700"
    style = background-color:rgb(255,246,162)>
  <TR style = background-color:rgb(121,149,242)>
    <TH>NIP</TH>
    <TH>Golongan</TH>
    <TH>Jumlah<BR>Absen</TH>
    <TH>Gaji<BR>Pokok</TH>
    <TH>Tunjangan</TH>
    <TH>Potongan Absen<BR>Per Hari</TH>
    <TH>Jumlah<BR>Potongan</TH>
    <TH>Gaji<BR>Bersih</TH>
  </TR>

<?php  
   // Buka koneksi database
   $koneksi = mysqli_connect("localhost","root","","pbw")
              or die("Koneksi database gagal : ". mysqli_connect_error());

   // Query untuk mengambil data registrasi
   $sql = "select NIP, GOL, JM_ABSEN from KARYAWAN";
   $query = mysqli_query($koneksi,$sql)
            or die('SQL error: '. mysqli_error($koneksi));
			
   // Menampilkan hasil query
   while ($row = mysqli_fetch_array($query)){
    if ($row['GOL'] == "1"){
        $gapo = 1800000;
        $tunjangan = 600000;
        $potab = 20000;
    }
    else if ($row['GOL'] == "2"){
        $gapo = 1500000;
        $tunjangan = 400000;
        $potab = 15000;
    }
    else if ($row['GOL'] == "3"){
        $gapo = 1300000;
        $tunjangan = 200000;
        $potab = 10000;
    }
    else {
        $gapo = 0;
        $tunjangan = 0;
        $potab = 0;
    }
    $absen = $row['JM_ABSEN'];
    $jupot = $absen * $potab;
    $gaji = $gapo + $tunjangan - $jupot;
    
    echo"<TR>
            <TD align=center>$row[NIP]</TD>
            <TD align=center>$row[GOL]</TD>
            <TD align=center>$row[JM_ABSEN]</TD>
            <TD align=center>Rp";
            echo number_format($gapo, 2, ',','.');
    echo   "</TD>
            <TD align=right>Rp";
            echo number_format($tunjangan, 2, ',','.');
    echo   "</TD>
            <TD align=right>Rp";
            echo number_format($potab, 2, ',','.');
    echo   "</TD>
            <TD align=right>Rp";
            echo number_format($jupot, 2, ',','.');
    echo   "</TD>
            <TD align=right>Rp";
            echo number_format($gaji, 2, ',','.');
    echo   "</TD>";
            
   }
   // Tutup koneksi database
   mysqli_close($koneksi);
?>
</TABLE></BODY></HTML>
