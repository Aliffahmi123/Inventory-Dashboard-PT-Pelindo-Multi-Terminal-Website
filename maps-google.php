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

					<li class="sidebar-header" style="font-family: Helvetica; letter-spacing: 0.2em;">
						Summary
						<!-- <li  style="border: none; border-top: 2px solid darkslategrey; width:82%; margin: -3px auto;"></li> -->
						<hr class="my-2" style="border-width: 2px;" />
					</li>

					<li class="sidebar-item ">
						<a class="sidebar-link" href="pages-profile.php">
							<i class="align-middle" data-feather="truck"></i> <span class="align-middle">Tbl Barang Masuk</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="tbl_brg_keluar.php">
							<i class="align-middle" data-feather="truck"></i> <span class="align-middle">Tbl Barang Keluar</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="tbl_brg_pinjaman.php">
							<i class="align-middle" data-feather="truck"></i> <span class="align-middle">Tbl Barang Pinjaman</span>
						</a>
					</li>
					<li class="sidebar-item">
						<a class="sidebar-link" href="tbl_brg_rusak.php">
							<i class="align-middle" data-feather="truck"></i> <span class="align-middle">Tbl Barang Rusak</span>
						</a>
					</li>

					<!-- <li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-in.php">
              <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Sign In</span>
            </a>
					</li>

					<li class="sidebar-item">
						<a class="sidebar-link" href="pages-sign-up.php">
              <i class="align-middle" data-feather="user-plus"></i> <span class="align-middle">Sign Up</span>
            </a>
					</li> -->

					<!-- <li class="sidebar-item">
						<a class="sidebar-link" href="pages-blank.php">
              <i class="align-middle" data-feather="book"></i> <span class="align-middle">Blank</span>
            </a>
					</li> -->

					<li class="sidebar-header" style="font-family: Helvetica; margin-top: -10px; letter-spacing: 0.2em;">
						Inventories
						<hr class="my-2" style="border-width: 2px;" />
					</li>

					<li class="sidebar-item" style="margin-top: -10px;">
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

					<li class="sidebar-item">
						<a class="sidebar-link" href="kosong.php">
							<i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Kosong</span>
						</a>
					</li>

					<li class="sidebar-header" style="font-family: Helvetica; margin-top:-10px; letter-spacing: 0.2em;">
						About Us
						<hr class="my-2" style="border-width: 2px;" />
					</li>

					<li class="sidebar-item active" style="margin-top: -10px;">
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
				<!-- <h2 style="font-family: Helvetica; color : lightgray; letter-spacing: 3px;  margin-top: 12px; margin-left: 408px;"><b>SOSIAL MEDIA</b></h2> -->
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
							<a class="dropdown-item" href="index.php"><i class="align-middle me-1" data-feather="settings"></i> Dashboard</a>
							<a class="dropdown-item" href="maps-google.php"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="awal.php">Log out</a>
						</div>
						</li>
					</ul>
				</div>
			</nav>

			<main class="content">
				<div class="container-fluid p-0" style="margin-top: 10px;">
					<div class="row">
						<div class="col-12 col-lg-4">
							<div class="card" style="border-radius:50px 0px;">
								<div class="card-header" style="border-radius: 50px 0px;">
									<h5 class="card-title" style="margin-top:20px;">
										<center>Instagram Pelindo Multi Terminal</center>
									</h5>
								</div>
								<div class="card-body">
									<center>
										<img src="ig.jpg" style="margin-top:10px;">
										<a href="https://www.instagram.com/pelindomultiterminal/"><button class="btn btn-info btn-lg" style="width:250px; border-radius:30px; margin-top: 50px;">LIHAT INSTAGRAM</button></a>
									</center>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="card" style="border-radius:50px 0px;">
								<div class="card-header" style="border-radius:50px 0px;">
									<h5 class="card-title" style="margin-top:20px;">
										<center>Linked In Pelindo Multi Terminal</center>
									</h5>
								</div>
								<div class="card-body">
									<center>
										<img src="in.jpg" style="margin-top:10px;">
										<a href="https://www.instagram.com/pelindomultiterminal/"><button class="btn btn-info btn-lg" style="width:250px; border-radius:30px; margin-top: 50px;">LIHAT LINKED IN</button></a>
									</center>
								</div>
							</div>
						</div>
						<div class="col-12 col-lg-4">
							<div class="card" style="border-radius:50px 0px;">
								<div class="card-header" style="border-radius:50px 0px;">
									<h5 class="card-title" style="margin-top:20px;">
										<center>Twitter Pelindo Multi Terminal</center>
									</h5>
								</div>
								<div class="card-body">
									<center>
										<img src="twit.jpg" style="margin-top:-30px; width: 350px;">
										<a href="https://www.instagram.com/pelindomultiterminal/"><button class="btn btn-info btn-lg" style="width:250px; border-radius:30px; margin-top: 6px;">LIHAT TWITTER</button></a>
									</center>
								</div>
							</div>
						</div>
					</div>

				</div>
			</main>


			<footer class="footer">
				<div class="container-fluid">
					<div class="row text-muted">
						<div class="col-6 text-start">
							<p class="mb-0">
								<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>Pelindo Multi Terminal & mhdaliffahmi</strong></a><a class="text-muted" href="https://adminkit.io/" target="_blank"><strong></strong></a> &copy;
							</p>
						</div>
						<div class="col-6 text-end">
							<ul class="list-inline">
								<li class="list-inline-item">
									<a class="text-muted" href="#" target="_blank">Support</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#" target="_blank">Help Center</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#" target="_blank">Privacy</a>
								</li>
								<li class="list-inline-item">
									<a class="text-muted" href="#" target="_blank">Terms</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</div>
	<script src="js/app.js"></script>

</body>

</html>