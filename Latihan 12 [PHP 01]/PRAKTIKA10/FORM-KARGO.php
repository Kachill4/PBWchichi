<HTML>
<HEAD>
    <title>FORM-KARGO</title>
    <STYLE>
    .title {
    font-family: "Times New Roman";
    font-size: 22pt;
    font-style: italic;
    font-weight: bold;
    color: white;
    text-align: center;
    padding: 25px;
    background: black;}

    .tombol {
       font-size: 12pt;
       font-family: Arial;
       color: white;
       background-color: #8a8a8a;
       border: 1px solid #8a8a8a;
       border-radius: 3px;
       padding: 7px;
       width: 120px;}
    .tombol:hover {
       background-color: #bababa;}
    .tombol:active {  
       background-color: #73e76d;}

    .tombol1 {
       font-size: 12pt;
       font-family: Arial;
       color: white;
       background-color: #8a8a8a;
       border: 1px solid #8a8a8a;
       border-radius: 3px;
       padding: 7px;
       width: 120px;}
    .tombol1:hover {
       background-color: #bababa;}
    .tombol1:active {  
       background-color: #eb4949;}
</STYLE>
</HEAD>

<BODY>
    <FORM ACTION='KARGO.PHP' METHOD='POST'>
    <DIV CLASS="title">
      KIRIM PAKET EXPRESS<BR>
      PT.TriCargo
    </DIV>
    <BR>
    <TABLE  ALIGN = CENTER 
            style = background-color:#ddedde
            width = "500">
    <TR>
        <TD width="200">&nbsp;</TD>
    </TR>
    <TR><TD ALIGN= RIGHT>Nomor Bon : </TD>
        <TD><INPUT TYPE='text' NAME='bon' placeholder="*cth: Bdg-123"></TD>
    </TR>
    <TR><TD ALIGN= RIGHT>Kode Pengiriman :</TD>
        <TD><INPUT  TYPE='radio' NAME="kode" VALUE="Biasa">
            <LABEL FOR='a'><B>B</B></LABEL>
            <INPUT TYPE='radio' NAME="kode" VALUE="Express">
            <LABEL FOR='b'><B>E</B></LABEL>
            <INPUT TYPE='radio' NAME="kode" VALUE="Super Express">
            <LABEL FOR='c'><B>S</B></LABEL>
        </TD>
    </TR>
    <TR><TD ALIGN= RIGHT>Berat Barang :</TD>
        <TD><INPUT TYPE='text' NAME='berat' placeholder="Angka dlm satuan KG"></TD></TR>
    
    <TR><TD COLSPAN="2" ALIGN="center"><HR>
        <INPUT TYPE='submit' VALUE='Submit'  CLASS="tombol">
        <INPUT TYPE='reset' VALUE='Hapus' CLASS="tombol1" ><HR></TD>
    </TR>
    <TR>
        <TD width="200">&nbsp;</TD>
    </TR>
    </TABLE></FORM>
</BODY>
</HTML>

