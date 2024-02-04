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
<style>
	.btnnn {
		width: 250px;
		height: 35px;
		border-radius: 8px;
		color: black;
		background-color: white;
		border-color: transparent;
		transition-duration: 0.5s;
	}

	.btnnn:hover {
		border-color: transparent;
		background-color: darkorchid;
		color: white;
	}

	.containerrr {
		width: 37%;
		height: 100%;
		position: absolute;
		overflow: hidden;
		margin-top: -10px;
		margin-left: 63%;
		/* box-shadow: 10px 25px 30px rgba(0,0,0,0.3); */
	}

	.wrapp {
		width: 100%;
		height: 97.4%;
		display: flex;
		animation: slide 16s infinite;
	}

	@keyframes slide {
		0% {
			transform: translateX(0);
		}

		25% {
			transform: translateX(0);
		}

		30% {
			transform: translateX(-100%);
		}

		50% {
			transform: translateX(-100%);
		}

		55% {
			transform: translateX(-200%);
		}

		75% {
			transform: translateX(-200%);
		}

		80% {
			transform: translateX(-300%);
		}

		100% {
			transform: translateX(-300%);
		}
	}

	img {
		width: 100%;
	}
</style>

<body>
	<div class="main" style="background-image: url('20.jpg'); background-size: cover; background-repeat: no-repeat; background-position: center;">
		<!-- <div class="containerrr">
				<div class="wrapp">
					<img src="g1.jpg" align="right">
					<img src="g2.jpg" align="right">
					<img src="g3.jpg" align="right">
					<img src="g4.jpg" align="right">
					<img src="g5.jpg" align="right">
				</div>
			</div> -->
		<center>
			<nav class="navbar navbar-expand navbar-light navbar-bg wrapper" style="height: 50px; border-radius: 30px; width: 95%; margin-top: 20px;">
				<a class="sidebar-toggle js-sidebar-toggle">
					<img src="pelindo.png" style="width: 160px; margin-left: -2px; height: 40px; margin-top: -8px;"> </img>
					<div class="navbar-collapse collapse">
						<ul class="sidebar-item" style="margin-top: -37px; margin-left: 1030px; list-style: none;">
							<li class="sidebar-item active" style="float: left; margin-top: -2px">
								<a class="sidebar-link" href="awal.php"><span class="align-middle">Home</span></a>
							</li>
							<li class="sidebar-item" style="float: left; margin-top: 25px; margin-left: -20px;">
								<a class="sidebar-link" href="about.php"><span class="align-middle">About Us</span>
								</a>
							</li>
							<li class="sidebar-item" style="float: left; margin-top: 25px; margin-left: -20px;">
								<a class="sidebar-link" href="pages-sign-in.php"><span class="align-middle">Sign In</span>
								</a>
								<!-- <li class="sidebar-item" style="float: left; margin-top: 25px; margin-left: -20px;">
						<a class="sidebar-link" href="pages-sign-up.php"><span class="align-middle">Sign Up</span>
                    </a>
					</li> -->

						</ul>
					</div>
			</nav>
			<div class="container" style="margin-top: 80px;">
				<p style="font-family: Garamond; font-size: 43px ; letter-spacing: 0.08em; color: white; margin-left: -90px;" align="justify"><b>MANAGE GOODS<br><span class="auto-type" style="font-family: Garamond; color:yellow;"></span></b>
				<p>
				<p style="font-size: 39px ;font-family: POPPINS; letter-spacing: 0.08em; color: white; margin-left: -90px; margin-top:100px;" align="justify"><b>INVENTORY DASHBOARD<br>TEKNOLOGI INFORMASI SPMT</b>
				<p>
				<p style="font-size: 13px ;font-family: arial; letter-spacing: 0.08em; color: white; margin-left: -85px;margin-top: -10px;" align="justify">Inventory Dashboard PT Pelindo Multi Terminal digunakan untuk pengelolaan persediaan<br>
					dengan terstruktur secara efektif pada ruang lingkup SPMT dengan dikelola langsung oleh<br> Divisi Teknologi Informasi.
				</p>
			</div>
			<div style="margin-left: -1110px; margin-top: 12px;">
				<a href="pages-sign-in.php">
					<button class="btn btn-outline-light">Masuk ke Inventory Dashboard -></button></a>
			</div>
	</div>
	</center>
	<footer class="footer" style="height: 20px; margin-top: -30px; background-color: #222e3c;">
		<div class="row text-muted">
			<div class="col-6 text-start" style="margin-top: -12px; margin-left: 30px;">
				<p class="mb-0">
					<a class="text-muted" href="https://adminkit.io/" target="_blank"><strong style="font-size: 10px;">Pelindo Multi Terminal & mhdaliffahmi</strong></a><a class="text-muted" href="https://adminkit.io/" target="_blank"><strong></strong></a> &copy;
				</p>
			</div>
			<div class="col-20 text-end" style="margin-left: -48px; color:white;">
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
	<script src="https://code.jquery.com/jquery-3.7.0.js"></script>
	<script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
	<script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
	<script src="js/app.js"></script>
	<script>
		new DataTable('#example');
	</script>
	<script src="https://unpkg.com/typed.js@2.1.0/dist/typed.umd.js"></script>
	<script>
		var typed = new Typed(".auto-type", {
			strings: ["EFFICIENTLY.", "EFFECTIVELY.", "PERFECTLY."],
			typeSpeed: 150,
			backSpeed: 150,
			loop: true
		})
	</script>
</body>

</html>