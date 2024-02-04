<?php
session_start(); // jika sudah login, akan diarahkan ke menu index, namun jika belum login, akan diarahkan ke login dahulu
include_once 'koneksi.php'; //koneksi mencakup seluruhan database yang dipakai
if (!isset($_SESSION['log'])) {
} else {
	header('location: index.php');
	exit();
}

if (isset($_POST['login'])) { //memanggil isi tabel dari admin yaitu username dan password jika menekan tombol login
	$user = mysqli_real_escape_string($conn, $_POST['id']);
	$pass = mysqli_real_escape_string($conn, $_POST['pass']);
	$queryuser = mysqli_query($conn, "SELECT * FROM admin where id='$user' AND pass='$pass'"); //memanggil tabel admin yang usernamenya sesuai database
	$cariuser = mysqli_fetch_assoc($queryuser); //mencari username yang ada di database

	if (password_verify($pass, $cariuser['pass'])) { //verifikasi password yang ada di tabel admin
		$_SESSION['id'] = $cariuser['id'];
		$_SESSION['pass'] = $cariuser['pass'];
		$_SESSION['log'] = 'login';
	}

	if (mysqli_num_rows($queryuser) > 0) {
		$_SESSION['id'] = $cariuser['id'];
		$_SESSION['pass'] = $cariuser['pass'];
		$_SESSION['log'] = 'login';
		echo '<script>alert("Login Berhasil !!"); document.location="index.php"; </script>';
	} else {
		echo '<script>alert("Username atau Password yang Anda Masukkan Salah, Silahkan Login Kembali !!"); document.location="pages-sign-in.php"; </script>';
	}
};
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<link href="DataTables/datatables.min.css" rel="stylesheet" />

	<script src="DataTables/datatables.min.js"></script>
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-profile.html" />

	<title>Pelindo Multi Terminal</title>

	<link href="css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main>
		<div class="main" style="background-image: url('19.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
			<center>
				<nav class="navbar navbar-expand navbar-light navbar-bg wrapper" style="height: 50px; border-radius: 30px; width: 95%; margin-top: 20px;">
					<a class="sidebar-toggle js-sidebar-toggle">
						<img src="pelindo.png" style="width: 160px; margin-left: -2px; height: 40px; margin-top: -8px;"> </img>
						<div class="navbar-collapse collapse">
							<ul class="sidebar-item" style="margin-top: -37px; margin-left: 1030px; list-style: none;">
								<li class="sidebar-item" style="float: left; margin-top: -2px">
									<a class="sidebar-link" href="awal.php" style="transition: 1s ease out;"><span class="align-middle">Home</span></a>
								</li>
								<li class="sidebar-item" style="float: left; margin-top: 25px; margin-left: -20px;">
									<a class="sidebar-link" href="about.php"><span class="align-middle">About Us</span>
									</a>
								</li>
								<li class="sidebar-item active" style="float: left; margin-top: 25px; margin-left: -20px;">
									<a class="sidebar-link" href="pages-sign-in.php"><span class="align-middle">Sign In</span>
									</a>
									<!-- <li class="sidebar-item" style="float: left; margin-top: 25px; margin-left: -20px;">
						<a class="sidebar-link" href="pages-sign-up.php"><span class="align-middle">Sign Up</span>
                    </a>
					</li> -->

							</ul>
						</div>
				</nav>
				<div class="container" style="height: 300px; margin-top: 430px;">
					<!-- <p style="font-size: 40px ;font-family: cambria; letter-spacing: 0.08em; color: white; margin-left: -515px;" align="center"><b>INVENTORY DASHBOARD<br>DIVISI TEKNOLOGI INFORMASI<br>PT PELINDO MULTI TERMINAL</b></p> -->
					<div style="margin-top: -20px;">

						<div class="container d-flex flex-column" style="margin-left: 380px; margin-top: -520px;">
							<div class="row vh-100">
								<div class="col-sm-5 col-md-2 col-lg-10 col-xl-4 mx-auto d-table h-100" style="margin-top: 35px;">
									<div class="d-table-cell align-middle">
										<!-- 	<div class="card" style="border-radius: 20px; margin-bottom: 10px;"><center>
									<h1 class="h2" style="font-family: gramound;"><b>PELINDO MULTI TERMINAL</b></h1>
									<p class="lead">
										Sign in to your account to continue
									</p></center>
								</div> -->
										<div class="card" style="border-radius: 20px; height:450px">
											<div class="card-body">
												<center>
													<img src="pelindo.png" style="width:240px; height:6	0px;">
													<div class="text-center mb-3 card-title" style="margin-top:20px;"><b>
															Sign in to your Inventory Dashboard</b>
													</div>
												</center>
												<div class="m-sm-3">
													<form method="POST" style="margin-top: 20px;">
														<div class="mb-3">
															<label for="id" class="form-label" style="margin-left: -272px;">Email</label>
															<input class="form-control form-control-lg" type="id" name="id" placeholder="Enter your email" required />
														</div>
														<div class="mb-3">
															<label for="pass" class="form-label" style="margin-left: -242px;">Password</label>
															<input class="form-control form-control-lg" type="password" name="pass" placeholder="Enter your password" required />
														</div>
														<div>
															<div class="form-check align-items-center">
																<input id="customControlInline" type="checkbox" class="form-check-input" value="remember-me" name="remember-me" checked>
																<label class="form-check-label text-small" for="customControlInline" style="margin-left: -190px ;">Remember me</label>
															</div>
														</div>
														<div class="d-grid gap-2 mt-3">
															<button href="index.php" class="btn btn-lg btn-primary" type="submit" name="login">Login</button>
														</div>
														<div class="text-center mb-3" style="margin-top:18px; color: red;">*Hanya admin yang dapat akses</div>
													</form>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	</main>
	</center>
	</div>
	<footer class="footer" style="height: 20px; margin-top: -30px; background-color: #222e3c">
		<div class="row text-muted">
			<div class="col-6 text-start" style="margin-top: -12px; margin-left: 30px;">
				<p class="mb-0">
					<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong style="font-size: 10px;">Pelindo Multi Terminal & mhdaliffahmi</strong></a><a class="text-muted" href="https://adminkit.io/" target="_blank"><strong></strong></a> &copy;
				</p>
			</div>
			<div class="col-20 text-end" style="margin-left: -48px;">
				<ul class="list-inline" style="margin-top: -17px; font-size: 10px;">
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
	</footer>
	<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
	<script src="https://code.iconify.design/iconify-icon/1.0.7/iconify-icon.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
	<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
	<script src="js/app.js"></script>
	<script>
		new DataTable('#example');
	</script>
</body>

</html>