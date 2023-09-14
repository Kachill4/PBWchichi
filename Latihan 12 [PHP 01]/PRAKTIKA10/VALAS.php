<HTML>
<HEAD>
<title>VALAS</title>
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
        .tabel{
        font-family: 'Times New Roman';
        font-size: 16px;
        background: #b9edbb;
        }
    </STYLE>
</HEAD>

<BODY>
    <BR><DIV CLASS="title">
      KALKULATOR KURS<BR>
      $ ¥ €  ->  Rp
    </DIV>
    <?php
        $kurs = $_POST['kurs'];
        $jumlah = $_POST['jumlah'];

        if ($kurs == "Dolar")
            {$lambang = "$";
             $harga = 14367.10;}
        else if ($kurs =="Yen")
            {$lambang = "¥";
             $harga = 115.91;}
        else if ($kurs == "Euro")
            {$lambang = "€";
             $harga = 15650.30;}
        else
            {$harga = 0;}

        $total = $harga * $jumlah;


    echo "<BR><TABLE ALIGN= CENTER class = tabel WIDTH = 500>";

    echo "<TR> <TD width=200>&nbsp;</TD> </TR>";

    echo "<TR><TD ALIGN= CENTER> 
            <B>HASIL KONVERSI DARI <I>$lambang $jumlah</I> adalah</TD></TR>";
    echo "<TR><TD ALIGN= CENTER>Rp ";
    echo number_format($total, 2, ',','.');
    echo "</B></TD></TR>";

    echo "<TR> <TD width=200>&nbsp;</TD> </TR>";


    echo "</TABLE><BR><BR>"
    ?>

    <H1 ALIGN = CENTER>DAFTAR KURS VALAS</H1>
    <TABLE BORDER='1'   ALIGN = CENTER  >
    <TR>
        <TH WIDTH='100'>Jumlah<BR><I>(Lembar)</I></TH>
        <TH WIDTH='100'>Dolar (US)</TH>
        <TH WIDTH='100'>Yen</TH>
        <TH WIDTH='100'>Euro</TH>
    </TR>
    <?php
    for ($i=5; $i<=100; $i=$i+5){
        $dolar = $i * 14367.10;
        $yen = $i * 115.91;
        $euro = $i * 15650.30;

        echo "<TR>  <TD ALIGN='center'>$i</TD>";

        echo "      <TD >$ ";
        echo number_format($dolar, 2, ',','.');
        echo "      </TD>";

        echo "      <TD>¥ ";
        echo number_format($yen, 2, ',','.');
        echo "      </TD>";

        echo "      <TD>€ ";
        echo number_format($euro, 2, ',','.');

        echo "</TD></TR>";
    }
    ?>
    </TABLE>
</BODY>

</HTML>