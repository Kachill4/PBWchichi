<HTML>
<HEAD>
    <title>FORM-VALAS</title>
    <STYLE>
    .title {
    font-family: "Times New Roman";
    font-size: 22pt;
    font-style: italic;
    font-weight: bold;
    color: white;
    text-align: center;
    padding: 25px;
    background: #518f74;}

    .tombol {
       font-size: 12pt;
       font-family: Arial;
       color: white;
       background-color: #2c7e8f;
       border: 1px solid #2c7e8f;
       border-radius: 3px;
       padding: 7px;
       width: 120px;}
    .tombol:hover {
       background-color: #4fa0b0;}
    .tombol:active {  
       background-color: #73e76d;}

    .tombol1 {
       font-size: 12pt;
       font-family: Arial;
       color: white;
       background-color: #2c7e8f;
       border: 1px solid #2c7e8f;
       border-radius: 3px;
       padding: 7px;
       width: 120px;}
    .tombol1:hover {
       background-color: #4fa0b0;}
    .tombol1:active {  
       background-color: #eb4949;}
</STYLE>
</HEAD>

<BODY>
    <FORM ACTION='VALAS.PHP' METHOD='POST'>
    <DIV CLASS="title">
      KALKULATOR KURS<BR>
      $ ¥ €  ->  Rp
    </DIV>
    <BR>
    <TABLE  ALIGN = CENTER 
            style = background-color:#b9edbb
            width = "500">
    <TR>
        <TD width="200">&nbsp;</TD>
    </TR>
    <TR><TD ALIGN= RIGHT>Pilih Mata Uang :</TD>
        <TD><INPUT  TYPE='radio' NAME="kurs" VALUE="Dolar">
            <LABEL FOR='d'><B>$</B></LABEL>
            <INPUT TYPE='radio' NAME="kurs"  VALUE="Yen">
            <LABEL FOR='y'><B>¥</B></LABEL>
            <INPUT TYPE='radio' NAME="kurs"  VALUE="Euro">
            <LABEL FOR='e'><B>€</B></LABEL>
        </TD>
    </TR>
    <TR><TD ALIGN= RIGHT>Jumlah :</TD>
        <TD><INPUT TYPE='text' NAME='jumlah'></TD></TR>
    
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

