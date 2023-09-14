<HTML>
<HEAD>
<SCRIPT LANGUAGE='JAVASCRIPT'>
function cek()
{
   npm = document.frm.xnpm.value;
   uji = document.frm.xuji.value;
   if ((npm=="")||(uji==""))
      {alert("Data tidak boleh dikosongkan !");}
   else 
      {document.frm.submit();}
}
</SCRIPT>
</HEAD>

<BODY>
<FORM NAME='frm' ACTION='GABUNG.PHP' METHOD='post'>
<TABLE>
<TR><TD>NPM :</TD>
    <TD><INPUT TYPE='text' NAME='xnpm'></TD></TR>
<TR><TD>Nilai Ujian :</TD>
    <TD><INPUT TYPE='text' NAME='xuji'></TD></TR>
<TR><TD><INPUT TYPE='button' VALUE='Cek & Hitung' ONCLICK='cek()'>
        <INPUT TYPE='reset' VALUE='Hapus'></TD></TR>
</TABLE></FORM>
</BODY></HTML>
