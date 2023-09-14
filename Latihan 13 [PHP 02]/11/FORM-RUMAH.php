<HTML>
<HEAD>
    <title>FORM-RUMAH</title>
    <STYLE>
    .title {
    font-family: "Book Antiqua";
    font-size: 26pt;
    font-style: italic;
    font-weight: bold;
    color: white;
    text-align: center;
    padding: 25px;
    background: #12e667;}

    .tombol {
       font-size: 12pt;
       font-family: Arial;
       color: white;
       background-color: #1fc273;
       border: 1px solid #1fc273;
       border-radius: 3px;
       padding: 7px;
       width: 120px;}
    .tombol:hover {
       background-color: #3acf87;}
    .tombol:active {
       background-color: #73e76d;}

    .tombol1 {
       font-size: 12pt;
       font-family: Arial;
       color: white;
       background-color: #1fc273;
       border: 1px solid #1fc273;
       border-radius: 3px;
       padding: 7px;
       width: 120px;}
    .tombol1:hover {
       background-color: #3acf87;}
    .tombol1:active {
       background-color: #eb4949;}
</STYLE>


</HEAD>

<BODY>
    <FORM ACTION='RUMAH.PHP' METHOD='POST'>
    <DIV CLASS="title">
        KAVLING IJK<BR>
    </DIV>
    <BR>
    <TABLE  ALIGN = CENTER
            style = background-color:#e1fcae
            width = "500">
    <TR>
        <TD width="200">&nbsp;</TD>
    </TR>
    <TR><TD ALIGN= RIGHT>Nomor Kavling : </TD>
        <TD><INPUT TYPE='text' NAME='noka' placeholder="Masukkan Angka 3 Digit"></TD>
    </TR>
    <TR><TD ALIGN= RIGHT>Tipe Rumah : </TD>
        <TD><SELECT NAME='tipe'>
            <OPTION value='0'>(pilihan)
            <OPTION value='1'>T36
            <OPTION value='2'>T45
            <OPTION value='3'>T70
            </OPTION></SELECT></TD>
    </TR>

    <TR><TD ALIGN= RIGHT>Fasilitas Extra :<BR><BR></TD>
        <TD><INPUT TYPE='checkbox' NAME="fasilitas1" VALUE="Kitchen Set">Kitchen Set<BR>
            <INPUT TYPE='checkbox' NAME="fasilitas2" VALUE="Water Heater">Water Heater
        </TD>
        
    </TR>

    <TR><TD ALIGN= RIGHT>Lama Kredit :</TD>
        <TD><INPUT TYPE='text' NAME='angsuran' placeholder="(satuan tahun)"></TD>
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

