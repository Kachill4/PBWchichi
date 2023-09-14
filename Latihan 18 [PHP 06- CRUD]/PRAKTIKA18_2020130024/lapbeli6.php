<HTML>
<HEAD>
   <TITLE>LAPBELI4</TITLE>
</HEAD>
<BODY>
<CENTER>
<H3>LAPORAN REKAPITULASI<BR> PER PEMASOK<H3>
<TABLE BORDER='1' CELLSPACING='0' CELLPADDING='5'>
  <TR>
     <TH>Kode Bahan</TH>
     <TH>Nama Bahan</TH>
     <TH>Sub Total</TH>		 
  </TR>

<?php  
   // Mengambil data periode laporan 
   // → Kode bahan/ Nama bahan/ Sub Total

   $tgl_awal  = $_GET['tg_aw'];
   $tgl_akhir = $_GET['tg_ak'];

   require('Koneksi.php');
   $sql = "select K.kdbahan,namabahan, sum(harga*banyak) as subtotal 
           from bahanbaku K, Beli B, Detilbeli D
		   where (K.kdbahan=D.kdbahan)AND(B.nobon=D.nobon)
		   AND(tglbeli between '$tgl_awal' AND '$tgl_akhir')		   
		   group by K.kdbahan";

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
		   <TD align=center>$row[kdbahan]</TD>
		   <TD>$row[namabahan]</TD>
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
