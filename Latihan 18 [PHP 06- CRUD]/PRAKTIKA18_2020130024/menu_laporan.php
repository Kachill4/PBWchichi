<HTML>
<BODY>
<B>LAPORAN PEMBELIAN</B>
<FORM ACTION='link_lap.php' METHOD='GET'>
<BR><INPUT TYPE='radio' NAME='jenis' VALUE='1'> Laporan Per Transaksi
<BR><INPUT TYPE='radio' NAME='jenis' VALUE='2'> Laporan Per Pemasok
<BR><INPUT TYPE='radio' NAME='jenis' VALUE='3'> Laporan Per Bahan Baku

<BR><BR>Periode Laporan : <INPUT TYPE='text' NAME='awal'>
s/d <INPUT TYPE='text' NAME='akhir'>

<BR><BR>Format output :
<BR><INPUT TYPE='radio' NAME='format' VALUE='D'> Detil
<BR><INPUT TYPE='radio' NAME='format' VALUE='R'> Rekapitulasi

<BR><BR><INPUT TYPE='submit' VALUE='Display'>
<INPUT TYPE='reset' VALUE='Cancel'>
</FORM>
</BODY>
</HTML>