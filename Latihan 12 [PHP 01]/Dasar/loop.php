<HTML><BODY>
DAFTAR HARGA FOTOKOPI
<TABLE BORDER='1'>
<TR><TH WIDTH='100'>Jumlah</TH>
<TH WIDTH='100'>Harga</TH></TR>

<?php
  for ($i=1; $i<=10; $i++)
  {
     $harga = $i * 150;
	 // per lembar Rp.150
     print "<TR>
                <TD ALIGN='center'>$i</TD>
                <TD ALIGN='center'>$harga</TD>
            </TR>";
  }
?>
</TABLE>
</BODY></HTML>