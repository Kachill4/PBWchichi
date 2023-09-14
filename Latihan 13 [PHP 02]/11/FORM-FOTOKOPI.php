<HTML>
<HEAD>
    <title>FORM-FOTOKOPI</title>
    <STYLE>
    .title {
    font-family: "Times New Roman";
    font-size: 22pt;
    font-style: italic;
    font-weight: bold;
    color: white;
    text-align: center;
    padding: 25px;
    background: #de9d23;}

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
    <FORM ACTION='FOTOKOPI.PHP' METHOD='POST'>
    <DIV CLASS="title">
      PHOTOCOPY EFG
    </DIV>
    <BR>
    <TABLE  ALIGN = CENTER
            style = background-color:#ddedde
            width = "500">
    <TR>
        <TD width="200">&nbsp;</TD>
    </TR>
    <TR><TD ALIGN= RIGHT>Nomor Bon : </TD>
        <TD><INPUT TYPE='text' NAME='bon' placeholder="Masukkan Angka 3 Digit"></TD>
    </TR>
    <TR><TD ALIGN= RIGHT>Ukuran Kertas : </TD>
        <TD><SELECT NAME='ukuran'>
            <OPTION value='0'>(pilihan)
            <OPTION value='1'>A3
            <OPTION value='2'>A4
            <OPTION value='3'>F4
            </OPTION></SELECT></TD>
    </TR>

    <TR><TD ALIGN= RIGHT>Jumlah copy :</TD>
        <TD><INPUT TYPE='text' NAME='juco' placeholder="Masukkan Angka Positif"></TD>
    </TR>

    <TR><TD ALIGN= RIGHT>Jilid :<BR></TD>
        <TD><INPUT TYPE='radio' NAME="jilid" VALUE="Softcover">Softcover
            <INPUT TYPE='radio' NAME="jilid" VALUE="Hardcover">Hardcover<BR>
            <INPUT TYPE='radio' NAME="jilid" VALUE="Tidak Menjilid">Tidak Menjilid
        </TD>
        
    </TR>

    <TR><TD COLSPAN="2" ALIGN="center"><HR>
        <INPUT TYPE='submit' VALUE='Submit'  CLASS="tombol" ONCLICK='validasi()'>
        <INPUT TYPE='reset' VALUE='Hapus' CLASS="tombol1" ><HR></TD>
    </TR>
    <TR>
        <TD width="200">&nbsp;</TD>
    </TR>
    </TABLE></FORM>
</BODY>
</HTML>

