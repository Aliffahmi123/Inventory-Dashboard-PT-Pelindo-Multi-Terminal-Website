<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/ui-forms.html" />

	<title>Pelindo Multi Terminal</title>
	<link href="css/baru.css" rel="stylesheet">
	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		<nav id="sidebar" class="sidebar js-sidebar">
			<div class="sidebar-content js-simplebar">
				<a class="sidebar-brand" href="index.php">
					<center>
						<img src="pelindo.png" class="avatar img-fluid rounded me-1" style="width: 180px; margin-left: -10px; height: 45px;"> </img>
					</center>
					<!-- <span class="align-middle">Pelindo Multi Terminal</span> -->
				</a>

				<ul class="sidebar-nav" style="margin-top: -25px;">
					<li class="sidebar-header" style="font-family: Helvetica; letter-spacing: 0.2em;">
						Reports
						<!-- <li  style="border: none; border-top: 2px solid darkslategrey; width:82%; margin: -3px auto;"></li> -->
						<hr class="my-2" style="border-width: 2px;" />
					</li>
					<li class="sidebar-item" style="margin-top: -10px;">
						<a class="sidebar-link" href="index.php">
							<i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-profile.php">
							<i class="align-middle" data-feather="user"></i> <span class="align-middle">Summary</span>
						</a>
					</li>



					<!-- <li class="sidebar-item">
						<a class="sidebar-link" href="pages-blank.php">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
            </a>
					</li> -->

					<li class="sidebar-header" style="font-family: Helvetica; margin-top: -10px; letter-spacing: 0.2em;">
						Inventories
						<hr class="my-2" style="border-width: 2px;" />
					</li>

					<li class="sidebar-item " style="margin-top: -10px;">
						<a class="sidebar-link" href="ui-buttons.php">
							<i class="align-middle" data-feather="square"></i> <span class="align-middle">Barang Masuk</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-forms.php">
							<i class="align-middle" data-feather="check-square"></i> <span class="align-middle">Barang Keluar</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-cards.php">
							<i class="align-middle" data-feather="grid"></i> <span class="align-middle">Barang Pinjaman</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="ui-typography.php">
							<i class="align-middle" data-feather="align-left"></i> <span class="align-middle">Barang Rusak</span>
						</a>
					</li>

					<li class="sidebar-item active">
						<a class="sidebar-link" href="icons-feather.php">
							<i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Kosong</span>
						</a>
					</li>

					<li class="sidebar-header" style="font-family: Helvetica; margin-top:-10px; letter-spacing: 0.2em;">
						About Us
						<hr class="my-2" style="border-width: 2px;" />
					</li>

					<li class="sidebar-item" style="margin-top: -10px;">
						<a class="sidebar-link" href="maps-google.php">
							<i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Social Media</span>
						</a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="awal.php">
							<i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Log Out</span>
						</a>
					</li>
				</ul>
		</nav>

		<div class="main">
			<nav class="navbar navbar-expand navbar-light navbar-bg">
				<a class="sidebar-toggle js-sidebar-toggle">
					<i class="hamburger align-self-center"></i>
				</a>
				<span class="card-title align-middle" style="letter-spacing: 0.5em; margin-top: 10px; font-family: Adlinnaka;">
					<h2 style="color: #4e4e4e;"><b>TEKNOLOGI INFORMASI SPMT</b></h2>
				</span>
				<!-- <h2 style="font-family: Helvetica; color : lightgray; letter-spacing: 3px;  margin-top: 12px; margin-left: 384px;"><b>KOSONG</b></h2> -->
				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						<a href="create_surat.php">
							<div class="aturan">
								<img src="create.png" style="width: 30px; height: 30px;">
							</div>
						</a>
						<a class="nav-link d-none d-sm-inline-block card-title" href="#" data-bs-toggle="dropdown">
							<div class="aturan" style="margin-top: -8px;">
								<img src="settings.png" style="width: 30px; height: 30px;">
							</div>
						</a>
						<div class="dropdown-menu dropdown-menu-end">
							<a class="dropdown-item" href="pages-sign-in.php"><i class="align-middle me-1" data-feather="user"></i> Admin</a>
							<!-- <a class="dropdown-item" href="pages-sign-up.php"><i class="align-middle me-1" data-feather="pie-chart"></i> User</a> -->
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="index.php"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
							<a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Log out</a>
						</div>
						</li>
					</ul>
				</div>
			</nav>
			<center>
				<h1 style="margin-top: 300px;"><b>MASIH KOSONG</b></h1>
			</center>
			<!-- <main class="content" style="margin-top:-30px;">
				<div class="container-fluid p-0">
					<div class="row">
						<div class="col-12 col-lg-4">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Nama Barang</h5>
								</div>
								<div class="card-body" style="margin-top:-20px">
									<input type="text" class="form-control" placeholder="Masukkan Nama Barang">
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Jumlah Barang yang Rusak</h5>
								</div>
								<div class="card-body" style="margin-top:-20px">
									<input type="text" class="form-control" placeholder="Masukkan Jumlah Barang">
								</div>
							</div>
							<div class="card" >
								<div class="card-header">
									<h5 class="card-title mb-0">Kualitas</h5>
								</div>
								<div class="card-body" style="margin-top:-20px">
									<select class="form-select">
          					<option selected>Masukkan Kualitas</option>
          					<option>Baik</option>
          					<option>Sedang</option>
          					<option>Buruk</option>
       					 </select>
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Tanggal</h5>
								</div>
								<div class="card-body" style="margin-top:-20px">
									<input type="date" class="form-control" placeholder="Masukkan tanggal sekarang">
								</div>
							</div>
						</div>
							<div class="col-12 col-lg-4">
								<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Nama Penginput</h5>
								</div>
								<div class="card-body" style="margin-top:-20px">
									<input type="text" class="form-control" placeholder="Masukkan Nama Penginput">
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Nama Divisi</h5>
								</div>
								<div class="card-body" style="margin-top:-20px">
									<input type="text" class="form-control" placeholder="Masukkan Nama Divisi">
								</div>
							</div>
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Nama Branch</h5>
								</div>
								<div class="card-body" style="margin-top:-20px">
									<input type="text" class="form-control" placeholder="Masukkan Nama Branch">
								</div>
							</div>		
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Nama Ruangan/Lantai Gedung</h5>
								</div>
								<div class="card-body" style="margin-top:-20px">
									<input type="text" class="form-control" placeholder="Masukkan Nama Branch">
								</div>
							</div>	
						</div>
							<div class="col-12 col-lg-4">
							<div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Keterangan Barang</h5>
								</div>
								<div class="card-body" style="margin-top:-20px">
									<textarea class="form-control" rows="20" placeholder="Keterangan Barang"></textarea>
								</div>
							</div>
						</div>
					</div>
								<center>
								<div class="mb-10" style="margin-top:30px">
										<button class="btn btn-primary btn-lg" style="width:300px; border-radius:30px;">Tambah Data Rusak</button>
								</div>
							</center>
					</main> -->

			<!-- <footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Pelindo Multi Terminal</strong></a><a class="text-muted" href="https://adminkit.io/" target="_blank"><strong></strong></a>								&copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="https://adminkit.io/" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div> -->
			<script src="js/app.js"></script>

</body>

</html>