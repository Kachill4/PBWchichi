<HTML>
<BODY>
<CENTER>
<H3>LAPORAN PEMBELIAN <BR>REKAP PER TRANSAKSI<H3>
<TABLE BORDER='1' CELLSPACING='0' CELLPADDING='5'>
  <TR>
     <TH>No.Bon</TH>
     <TH>Tgl Beli</TH>
     <TH>Nama Pemasok</TH>
     <TH>Sub Total</TH>		 
  </TR>

<?php  
   // Mengambil data periode laporan 
   $tgl_awal  = $_GET['tg_aw'];
   $tgl_akhir = $_GET['tg_ak'];

   require('Koneksi.php');
   $sql = "select B.nobon,tglbeli,nama, sum(harga*banyak) as subtotal 
           from Pemasok P, Beli B, Detilbeli D
		   where (P.kdpemasok=B.kdpemasok)AND(B.nobon=D.nobon)
		   AND(tglbeli between '$tgl_awal' AND '$tgl_akhir')		   
		   group by B.nobon";

   $query = mysqli_query($koneksi,$sql)
            or die('SQL error: '. mysqli_error($koneksi));
   $total = 0; $warna = 'ccffcc'; 
   while ($row = mysqli_fetch_array($query))
   {
     if ($warna == 'ffff99')
	    {$warna = 'ccffcc';}
	 else 
	    {$warna ='ffff99';}
	 
	 echo "<TR bgcolor=$warna>
		   <TD align=center>$row[nobon]</TD>
		   <TD align=center>$row[tglbeli]</TD>
		   <TD>$row[nama]</TD>
		   <TD align=right>$row[subtotal]</TD>
		   </TR>";
	 $total = $total + $row['subtotal'];
   }
   echo "<TD COLSPAN=3 align=right><B>Total : </B></TD>";   
   echo "<TD align=right>$total</TD>";      
?>
</TABLE><BR>
<INPUT TYPE=button VALUE='Kembali Ke Menu' ONCLICK='location.href="menu_laporan.php"'>
</BODY>
</HTML>
