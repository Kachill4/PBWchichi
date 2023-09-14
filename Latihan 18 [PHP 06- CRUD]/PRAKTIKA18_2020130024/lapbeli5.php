<HTML>
<HEAD>
   <TITLE>LAPBELI5</TITLE>
</HEAD>
<BODY>
<CENTER>
<H3>LAPORAN <BR>DETIL PER PEMASOK<H3>
<TABLE BORDER='1' CELLSPACING='0' CELLPADDING='5'>
  <TR>
     <TH>Kode Bahan</TH>
     <TH>Nama Bahan</TH>
     <TH>No Bon</TH>
     <TH>Tgl Beli</TH>
     <TH>Nama Pemasok</TH>
     <TH>Harga</TH>
     <TH>Banyak</TH>	
     <TH>Sub Total</TH>		 
  </TR>

<?php  
   // Mengambil data periode laporan 
   // LAPORAN DETIL PER PEMASOK (nama program : LAPBELI3.PHP)
   // → Kode Bahan/ Nama Bahan/ No Bon/ Tgl Beli/ 
   // → Nama Pemasok/ Harga/ Banyak/ Sub Total

   $tgl_awal  = $_GET['tg_aw'];
   $tgl_akhir = $_GET['tg_ak'];

   require('Koneksi.php');
   $sql = "select   K.kdbahan, namabahan, B.nobon, tglbeli,
                    nama,harga,banyak,harga*banyak as subtotal 
           from Pemasok P, Beli B, Detilbeli D, BahanBaku K
		     where (P.kdpemasok = B.kdpemasok)
                AND(B.nobon     = D.nobon)
                AND(D.kdbahan   = K.kdbahan)
                AND(tglbeli between '$tgl_awal' AND '$tgl_akhir')";

   $query = mysqli_query($koneksi,$sql)
            or die('SQL error: '. mysqli_error($koneksi));
   $total = 0; $warna = 'ccffcc'; $nobonlama = '';
   while ($row = mysqli_fetch_array($query))
   {
     if ($row['nobon']!=$nobonlama and $warna=='ccffcc')
	    {$warna = 'ffff99';}
	 else if ($row['nobon']!=$nobonlama and $warna=='ffff99')
	    {$warna = 'ccffcc';} 	
		
	 echo "<TR bgcolor=$warna>
		   <TD align=center>$row[kdbahan]</TD>
           <TD align=left>$row[namabahan]</TD>
		   <TD align=center>$row[nobon]</TD>
		   <TD align=center>$row[tglbeli]</TD>
		   <TD align=left>$row[nama]</TD>
           <TD>Rp"; echo number_format($row['harga'] , 2, ',','.'); echo"  </TD>
		   <TD align=center>$row[banyak]</TD>
		   <TD>Rp"; echo number_format($row['subtotal'] , 2, ',','.'); echo"  </TD>
		   </TR>";
	 $total = $total + $row['subtotal'];
	 $nobonlama = $row['nobon'];
   }
   echo "<TD COLSPAN=7 align=right><B>Total : </B></TD>   
   <TD>Rp"; echo number_format($total, 2, ',','.'); echo"  </TD>";      

   mysqli_close($koneksi);
?>
</TABLE><BR>
<INPUT TYPE=button VALUE='Kembali Ke Menu' ONCLICK='location.href="menu_laporan.php"'>
</BODY>
</HTML>
