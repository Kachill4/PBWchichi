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

<div class="container-fluid" style="margin-top:80px">
  <h3>Aplikasi Penjualan Obat</h3>
  <p>Apotek Dago Farma Jl. Ir. Juanda No 9600 Bandung</p>  
</div>
</body>
</html>

