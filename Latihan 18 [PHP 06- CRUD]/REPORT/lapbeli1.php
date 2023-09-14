<HTML>
<BODY>
<CENTER>
<H3>LAPORAN PEMBELIAN <BR>DETIL PER TRANSAKSI<H3>
<TABLE BORDER='1' CELLSPACING='0' CELLPADDING='5'>
  <TR>
     <TH>No.Bon</TH>
     <TH>Tgl Beli</TH>
     <TH>Nama Pemasok</TH>
     <TH>Nama Bahan</TH>
     <TH>Harga</TH>
     <TH>Banyak</TH>	
     <TH>sub Total</TH>		 
  </TR>

<?php  
   // Mengambil data periode laporan 
   $tgl_awal  = $_GET['tg_aw'];
   $tgl_akhir = $_GET['tg_ak'];

   require('Koneksi.php');
   $sql = "select B.nobon,tglbeli,nama,namabahan,harga,banyak,harga*banyak as subtotal 
           from Pemasok P, Beli B, Detilbeli D, BahanBaku K
		   where (P.kdpemasok=B.kdpemasok)AND(B.nobon=D.nobon)AND(D.kdbahan=K.kdbahan)
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
		   <TD align=center>$row[nobon]</TD>
           <TD align=center>$row[tglbeli]</TD>
		   <TD>$row[nama]</TD>
		   <TD>$row[namabahan]</TD>
		   <TD align=right>$row[harga]</TD>
		   <TD align=right>$row[banyak]</TD>
		   <TD align=right>$row[subtotal]</TD>
		   </TR>";
	 $total = $total + $row['subtotal'];
	 $nobonlama = $row['nobon'];
   }
   echo "<TD COLSPAN=6 align=right><B>Total : </B></TD>   
		 <TD align=right>$total</TD>";      

   mysqli_close($koneksi);
?>
</TABLE><BR>
<INPUT TYPE=button VALUE='Kembali Ke Menu' ONCLICK='location.href="menu_laporan.php"'>
</BODY>
</HTML>
