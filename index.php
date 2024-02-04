<?php
session_start();
include_once 'koneksi.php';
if (!isset($_SESSION['log'])) {
	header('location: pages-sign-in.php');
	exit();
}
$query = "SELECT * FROM brg_pinjaman ORDER BY tgl";
$tampil = mysqli_query($conn, $query);

$rusak_biasa = mysqli_query($conn, "SELECT * FROM brg_rusak WHERE kualitas_brg='Rusak Biasa'");
$butuh_perbaikan = mysqli_query($conn, "SELECT * FROM brg_rusak WHERE kualitas_brg='Butuh Perbaikan'");

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

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />

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
					<li class="sidebar-item active" style="margin-top: -10px;">
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

					<!-- <li class="sidebar-item">
						<a class="sidebar-link" href="kosong.php">
							<i class="align-middle" data-feather="coffee"></i> <span class="align-middle">Kosong</span>
						</a>
					</li> -->

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

				<div class="navbar-collapse collapse">
					<ul class="navbar-nav navbar-align">
						</a>
						<a href="create_surat.php">
							<div class="aturan dropdown">
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
				<div class="container-fluid p-0" style="margin-top: -30px;">

					<!-- <h1 class="h3 mb-3"><strong>Analytics</strong> Dashboard</h1> -->

					<div class="row">
						<div class="col-xl-6 col-xxl-5 d-flex">
							<div class="w-100">
								<div class="row">
									<div class="col-sm-6">
										<div class="card" style="border-radius:30px">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Barang Masuk</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary">
															<i class="align-middle" data-feather="truck"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">
													<?php
													$barang_masuk = mysqli_query($conn, "SELECT * FROM brg_masuk");
													echo mysqli_num_rows($barang_masuk);
													?>
												</h1>
												<div class="mb-0">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right">Total Masuk</i></span>
												</div>
											</div>
										</div>
										<div class="card" style="border-radius:30px">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Barang Pinjaman</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary" style="background-color: #00FF7F;">
															<i class="align-middle" data-feather="truck"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3"><?php
																		$barang_pinjaman = mysqli_query($conn, "SELECT * FROM brg_pinjaman");
																		echo mysqli_num_rows($barang_pinjaman);
																		?></h1>
												<div class="mb-0">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right">Total Pinjaman</i></span>
												</div>
											</div>
										</div>
										<div class="card" style="border-radius:30px; width: 210%;x">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Total Barang Keseluruhan</h5>
													</div>
												</div>
												<h1 class="mt-1 mb-3">
													<?php
													$total_brg = mysqli_query($conn, "SELECT SUM(total_items) AS total_all_items
													 FROM (
													 SELECT COUNT(id) AS total_items FROM brg_pinjaman
													 UNION ALL
													 SELECT COUNT(id) AS total_items FROM brg_rusak
													 UNION ALL
													 SELECT COUNT(id) AS total_items FROM brg_masuk
													 UNION ALL
													 SELECT COUNT(id) AS total_items FROM brg_keluar
													 ) AS combined_totals;");
													while ($data = mysqli_fetch_assoc($total_brg)) {
														echo $data['total_all_items'];
													}
													?>
												</h1>
												<div class="mb-0">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right"></i>Dari Keseluruhan Jenis Barang</span>
													<!-- <span class="text-muted">Since last week</span> -->
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-6">
										<div class="card" style="border-radius:30px">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Barang keluar</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary" style="background-color: yellow">
															<i class="align-middle" data-feather="truck"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">
													<?php
													$barang_keluar = mysqli_query($conn, "SELECT * FROM brg_keluar");
													echo mysqli_num_rows($barang_keluar);
													?></h1>
												<div class="mb-0">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right">Total Keluar</i></span>
												</div>
											</div>
										</div>
										<div class="card" style="border-radius:30px">
											<div class="card-body">
												<div class="row">
													<div class="col mt-0">
														<h5 class="card-title">Barang Rusak</h5>
													</div>

													<div class="col-auto">
														<div class="stat text-primary" style="background-color: #CC9900;">
															<i class="align-middle" data-feather="truck"></i>
														</div>
													</div>
												</div>
												<h1 class="mt-1 mb-3">
													<?php
													$barang_rusak = mysqli_query($conn, "SELECT * FROM brg_rusak");
													echo mysqli_num_rows($barang_rusak);
													?>
												</h1>
												<div class="mb-0">
													<span class="text-success"> <i class="mdi mdi-arrow-bottom-right">Total Rusak</i></span>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-xl-6 col-xxl-7">
							<div class="card flex-fill w-100" style="border-radius:30px; height: 95%;">
								<div class="card-header" style="border-radius:30px">

									<h5 class="card-title mb-0">Grafik Perbandingan Barang</h5>
								</div>
								<div class="card-body py-3">
									<div class="chart chart-sm">
										<canvas id="chartjs-dashboard-line"></canvas>
									</div></br></br>
									<center>
										<p>Keterangan :</p>
									</center>
									<div style="margin-left: 25%;">
										<div style="width: 80px; height:10px; background-color: #CCCCFF;">
											<div style="width: 80px; height:10px; background-color: yellow; margin-left:100px; ">
												<div style="width: 80px; height:10px; background-color: #00FF7F; margin-left:100px;">
													<div style="width: 80px; height:10px; background-color: #CC9900;  margin-left:100px;"></div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="row">
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-2 order-xxl-3">
							<div class="card flex-fill w-100" style="border-radius:30px">
								<div class="card-header" style="border-radius:30px">

									<h5 class="card-title mb-0">
										<center>Diagram Kondisi Barang Masuk</center>
									</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="py-3">
											<div class="chart chart-xs">
												<canvas id="chartjs-dashboard-pie"></canvas>
											</div>
										</div>

										<table class="table mb-0">
											<tbody>
												<tr>
													<td>Baik
													</td>
													<td class="text-end">
														<?php
														$baik = mysqli_query($conn, "SELECT * FROM brg_masuk WHERE kualitas_brg='baik'");
														echo mysqli_num_rows($baik);
														?>
													</td>
												</tr>
												<tr>
													<td>Sedang</td>
													<td class="text-end">
														<?php
														$sedang = mysqli_query($conn, "SELECT * FROM brg_masuk WHERE kualitas_brg='sedang'");
														echo mysqli_num_rows($sedang);
														?>
													</td>
												</tr>
												<tr>
													<td>Buruk</td>
													<td class="text-end">
														<?php
														$buruk = mysqli_query($conn, "SELECT * FROM brg_masuk WHERE kualitas_brg='buruk'");
														echo mysqli_num_rows($buruk);
														?>
													</td>
												</tr>
											</tbody>
										</table>
									</div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-12 col-xxl-6 d-flex order-3 order-xxl-2">
							<div class="card flex-fill w-100" style="border-radius:30px">
								<div class="card-header" style="border-radius:30px">

									<h5 class="card-title mb-0">PT Pelindo Multi Terminal</h5>
								</div>
								<div class="card-body px-4">
									<div id="world_map" style="height:350px;"></div>
								</div>
							</div>
						</div>
						<div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
							<div class="card flex-fill" style="border-radius:30px">
								<div class="card-header" style="border-radius:30px">

									<h5 class="card-title mb-0">Calendar</h5>
								</div>
								<div class="card-body d-flex">
									<div class="align-self-center w-100">
										<div class="chart">
											<div id="datetimepicker-dashboard"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-12 col-lg-8 col-xxl-9 d-flex">
							<div class="card flex-fill" style="border-radius:30px">
								<div class="card-header" style="border-radius:30px">

									<h5 class="card-title mb-0">
										<center>Urutan Tabel Berdasarkan Peminjaman Terakhir</center>
									</h5>
								</div>
								<table class="table table-hover my-0">
									<thead>
										<tr>
											<th>NIPP</th>
											<th>Nama User</th>
											<th>Nama Barang</th>
											<th>Serial Number</th>
											<th class="d-none d-xl-table-cell">Tanggal Peminjaman</th>
											<th class="d-none d-xl-table-cell">Divisi</th>
											<th class="d-none d-md-table-cell">Branch</th>
										</tr>
									</thead>
									<tbody>
										<?php while ($data = mysqli_fetch_assoc($tampil)) : ?>
											<tr>
												<td><?= $data['nipp']; ?></td>
												<td><?= $data['nama_user']; ?></td>
												<td class="d-none d-xl-table-cell"><?= $data['nama_brg']; ?></td>
												<td class="d-none d-xl-table-cell"><?= $data['serial_num']; ?></td>
												<td class="d-none d-xl-table-cell"><?= $data['tgl']; ?></td>
												<td class="d-none d-md-table-cell"><?= $data['nama_divisi']; ?></td>
												<td class="d-none d-md-table-cell"><?= $data['nama_branch']; ?></td>
											</tr>
										<?php endwhile; ?>
									</tbody>
								</table>
							</div>
						</div>
						<div class="col-12 col-lg-4 col-xxl-3 d-flex">
							<div class="card flex-fill w-100" style="border-radius:30px">
								<div class="card-header" style="border-radius:30px">

									<h5 class="card-title mb-0">Perbandingan Barang Rusak</h5>
								</div>
								<div class="card-body d-flex w-100">
									<div class="align-self-center chart chart-lg">
										<canvas id="chartjs-dashboard-bar"></canvas>
									</div>
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

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var ctx = document.getElementById("chartjs-dashboard-line").getContext("2d");
			var gradient = ctx.createLinearGradient(0, 0, 0, 225);
			gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
			gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
			// Line chart
			new Chart(document.getElementById("chartjs-dashboard-line"), {
				type: "polarArea",
				data: {
					labels: ["Barang Masuk", "Barang Keluar", "Barang Pinjaman", "Barang Rusak"],
					datasets: [{
						label: ["Sales ($)"],
						fill: true,
						backgroundColor: ['#CCCCFF', 'yellow',
							'#00FF7F', '#CC9900'
						],
						borderColor: window.theme.primary,
						data: [
							<?php echo mysqli_num_rows($barang_masuk); ?>,
							<?php echo mysqli_num_rows($barang_keluar); ?>,
							<?php echo mysqli_num_rows($barang_pinjaman); ?>,
							<?php echo mysqli_num_rows($barang_rusak); ?>
						]
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					tooltips: {
						intersect: false
					},
					hover: {
						intersect: true
					},
					plugins: {
						filler: {
							propagate: false
						}
					},
					scales: {
						xAxes: [{
							reverse: true,
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}],
						yAxes: [{
							ticks: {
								stepSize: 1000
							},
							display: true,
							borderDash: [3, 3],
							gridLines: {
								color: "rgba(0,0,0,0.0)"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Pie chart
			new Chart(document.getElementById("chartjs-dashboard-pie"), {
				type: "pie",
				data: {
					labels: ["Baik", "Sedang", "Buruk"],
					datasets: [{
						data: [
							<?php
							echo mysqli_num_rows($baik);
							?>,
							<?php
							echo mysqli_num_rows($sedang);
							?>,
							<?php
							echo mysqli_num_rows($buruk);
							?>
						],
						backgroundColor: [
							window.theme.primary,
							window.theme.warning,
							window.theme.danger
						],
						borderWidth: 5
					}]
				},
				options: {
					responsive: !window.MSInputMethodContext,
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					cutoutPercentage: 75
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			// Bar chart
			new Chart(document.getElementById("chartjs-dashboard-bar"), {
				type: "bar",
				data: {
					labels: ["Rusak Biasa", "Butuh Perbaikan"],
					datasets: [{
						label: "This year",
						backgroundColor: window.theme.primary,
						borderColor: window.theme.primary,
						hoverBackgroundColor: window.theme.primary,
						hoverBorderColor: window.theme.primary,
						data: [
							<?php echo mysqli_num_rows($rusak_biasa); ?>,
							<?php echo mysqli_num_rows($butuh_perbaikan); ?>

						],
						barPercentage: .75,
						categoryPercentage: .5
					}]
				},
				options: {
					maintainAspectRatio: false,
					legend: {
						display: false
					},
					scales: {
						yAxes: [{
							gridLines: {
								display: false
							},
							stacked: false,
							ticks: {
								stepSize: 20
							}
						}],
						xAxes: [{
							stacked: false,
							gridLines: {
								color: "transparent"
							}
						}]
					}
				}
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var markers = [{
					coords: [3.786280, 98.688780],
					name: "Kantor Pusat Belawan"
				},
				{
					coords: [3.786482907508546, 98.6900570973871],
					name: "Branch Belawan"
				},
				{
					coords: [1.677930176268318, 101.45515578487544],
					name: "Branch Dumai"
				},
				{
					coords: [-7.737745769388103, 108.99650952363912],
					name: "Tanjung Intan"
				},
				{
					coords: [-2.625351893143522, 111.80092038310055],
					name: "Bumiharjo"
				},
				{
					coords: [-2.717487424409447, 112.92539178969831],
					name: "Bagendang"
				},
				{
					coords: [-3.3267717912456733, 114.55961936961539],
					name: "Tri Sakti"
				},
				{
					coords: [-7.051149325019835, 112.76504521828299],
					name: "Jamrud"
				},
				{
					coords: [-8.126087169710226, 114.39763211993925],
					name: "Tanjung Wangi"
				},
				{
					coords: [-1.2711211981348192, 116.80775556954737],
					name: "Balikpapan"
				},
				{
					coords: [-5.108293244197931, 119.42108052442973],
					name: "Makassar"
				}
			];
			var map = new jsVectorMap({
				map: "world",
				selector: "#world_map",
				zoomButtons: true,
				markers: markers,
				markerStyle: {
					initial: {
						r: 9,
						strokeWidth: 7,
						stokeOpacity: .4,
						fill: window.theme.primary
					},
					hover: {
						fill: window.theme.primary,
						stroke: window.theme.primary
					}
				},
				zoomOnScroll: false
			});
			window.addEventListener("resize", () => {
				map.updateSize();
			});
		});
	</script>
	<script>
		document.addEventListener("DOMContentLoaded", function() {
			var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
			var defaultDate = date.getUTCFullYear() + "-" + (date.getUTCMonth() + 1) + "-" + date.getUTCDate();
			document.getElementById("datetimepicker-dashboard").flatpickr({
				inline: true,
				prevArrow: "<span title=\"Previous month\">&laquo;</span>",
				nextArrow: "<span title=\"Next month\">&raquo;</span>",
				defaultDate: defaultDate
			});
		});
	</script>

</body>

</html>