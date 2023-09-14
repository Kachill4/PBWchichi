<!DOCTYPE html>
<html lang="en">
<head>
  <title>Apotek Dago Farma</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="http://localhost/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <script src="http://localhost/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>

<body>
<!-- Set navbar fixed top --> 
<nav class="navbar navbar-expand-sm bg-success navbar-dark fixed-top"> 
  <div class="container-fluid">
	<!-- Tombol collapse bar -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
	<!-- Dropdown link with collapse bar -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="menu.php">Home</a>
        </li>	  
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Input Data</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Input1.php">Obat</a></li>
            <li><a class="dropdown-item" href="Input2.php">Penjualan</a></li>
          </ul>
        </li>
		<li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Laporan</a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="Laporan1.php">Laporan Stok Obat</a></li>
            <li><a class="dropdown-item" href="Laporan2.php">Laporan Penjualan Obat</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

<div class="container" style="margin-top:80px">
  <h3>Laporan Stok Obat</h3>
  <table class="table" style="width=400px">
    <thead class="table-success">
      <tr>
        <th>Id Obat</th>
        <th>Nama Obat</th>
        <th>Harga Jual</th>
		<th>Jumlah Stok</th>
      </tr>
    </thead>
	
<tbody>
<?php  
   // Buka koneksi database
   $koneksi = mysqli_connect("localhost","root","","pbw")
              or die("Koneksi database gagal : ". mysqli_connect_error());

   // Query untuk mengambil data registrasi
   $sql = "select id_obat, nama_obat, harga, stok from obat";
   $query = mysqli_query($koneksi,$sql)
            or die('SQL error: '. mysqli_error($koneksi));
			
   // Menampilkan hasil query
   while ($row = mysqli_fetch_array($query))
   {
	 echo "<tr>
	       <td>$row[id_obat]</td>
           <td>$row[nama_obat]</td>
	       <td>$row[harga]</td>
		   <td>$row[stok]</td>";
   }
   // Tutup koneksi database
   mysqli_close($koneksi);
?>	
</tbody>
</table>       
</div>
</body>
</html>