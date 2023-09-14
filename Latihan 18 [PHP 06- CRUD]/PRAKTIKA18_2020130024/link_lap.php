<?php
  switch($_GET['jenis']){
    case '1' : // laporan per transaksi
	  switch($_GET['format']){
	    case 'D' : // format detil
	      header("location:lapbeli1.php?tg_aw=$_GET[awal]&tg_ak=$_GET[akhir]"); break;
		case 'R' : // format rekap
		  header("location:lapbeli2.php?tg_aw=$_GET[awal]&tg_ak=$_GET[akhir]"); break;
	  } break;
	  
    case '2' : // laporan per pemasok
	  switch($_GET['format']){
	    case 'D' : // format detil
	      header("location:lapbeli3.php?tg_aw=$_GET[awal]&tg_ak=$_GET[akhir]"); break;
		case 'R' : // format rekap
		  header("location:lapbeli4.php?tg_aw=$_GET[awal]&tg_ak=$_GET[akhir]"); break;
	  } break;
	  
    case '3' : // laporan per bahan baku
	  switch($_GET['format']){
	    case 'D' : // format detil
	      header("location:lapbeli5.php?tg_aw=$_GET[awal]&tg_ak=$_GET[akhir]"); break;
		case 'R' : // format rekap
		  header("location:lapbeli6.php?tg_aw=$_GET[awal]&tg_ak=$_GET[akhir]"); break;
	  }
  }
?>   