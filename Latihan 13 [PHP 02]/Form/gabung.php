<?php
  $xnpm = $_POST['xnpm'];
  $xuji = $_POST['xuji'];
  if ($xuji>60)
     {$status="Lulus";}
  else
     {$status="Gagal";}
  print "Nomor Pokok Mahasiswa : $xnpm<BR>";
  print "Nilai Ujian : $xuji<BR>";
  print "Status Kelulusan : $status";
?>
