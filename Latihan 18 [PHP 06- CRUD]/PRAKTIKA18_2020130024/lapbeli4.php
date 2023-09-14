<HTML>
<HEAD>
   <TITLE>LAPBELI4</TITLE>
</HEAD>
<BODY>
<CENTER>
<H3>LAPORAN REKAPITULASI<BR> PER PEMASOK<H3>
<TABLE BORDER='1' CELLSPACING='0' CELLPADDING='5'>
  <TR>
     <TH>Kode Pemasok</TH>
     <TH>Nama Pemasok</TH>
     <TH>Sub Total</TH>		 
  </TR>

<?php  
   // Mengambil data periode laporan 
   // → Kode Pemasok/ Nama Pemasok/ Sub Total

   $tgl_awal  = $_GET['tg_aw'];
   $tgl_akhir = $_GET['tg_ak'];

   require('Koneksi.php');
   $sql = "select P.kdpemasok,nama, sum(harga*banyak) as subtotal 
           from Pemasok P, Beli B, Detilbeli D
		   where (P.kdpemasok=B.kdpemasok)AND(B.nobon=D.nobon)
		   AND(tglbeli between '$tgl_awal' AND '$tgl_akhir')		   
		   group by P.kdpemasok";

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
		   <TD align=center>$row[kdpemasok]</TD>
		   <TD>$row[nama]</TD>
		   <TD>Rp"; echo number_format($row['subtotal'] , 2, ',','.'); echo"  </TD>
		   </TR>";
	 $total = $total + $row['subtotal'];
   }
   echo "<TD COLSPAN=2 align=right><B>Total : </B></TD>
        <TD>Rp"; echo number_format($total, 2, ',','.'); echo"  </TD>";      
?>
</TABLE><BR>
<INPUT TYPE=button VALUE='Kembali Ke Menu' ONCLICK='location.href="menu_laporan.php"'>
</BODY>
</HTML>
