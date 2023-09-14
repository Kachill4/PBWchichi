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
  <h2>Input Data Obat</h2>
  <form METHOD="GET" ACTION="simpan1.php">
    <label for="tb1">Id Obat :</label>
    <input type="text" class="form-control" id="tb1" placeholder="Isikan Id Obat" name="id_obat">
	
    <br><label for="tb2">Nama Obat :</label>
    <input type="text" class="form-control" id="tb2" placeholder="Isikan Nama Obat" name="nama_obat">
	
	<br><label for="tb3">Harga Jual :</label>
    <input type="text" class="form-control" id="tb3" placeholder="Isikan Harga Jual" name="harga">
	
    <br><label for="tb4">Jumlah Stok :</label>
    <input type="text" class="form-control" id="tb4" placeholder="Isikan Jumlah Stok" name="stok">
	
	<br><button type="submit" class="btn btn-primary">Rekam</button>
	<button type="reset" class="btn btn-primary">Hapus Form</button>
  </form>
</div>
</body></html>