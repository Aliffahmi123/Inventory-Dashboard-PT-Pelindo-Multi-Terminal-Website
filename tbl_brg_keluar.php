<?php
session_start();
include_once "koneksi.php";
$query = "SELECT * FROM brg_keluar";
$tampil = mysqli_query($conn, $query);

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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="DataTables/datatables.min.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.5/css/dataTables.bootstrap5.min.css">
    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-profile.html" />
    <link rel="canonical" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <title>Pelindo Multi Terminal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="css/app.css" rel="stylesheet">
    <link href="css/baru.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
</head>

<body>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.php">
                    <center>
                        <img src="pelindo.png" class="avatar img-fluid rounded me-1" style="width: 180px; margin-left: -10px; height: 45px;"> </img>
                    </center>
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
                    <li class="sidebar-item active">
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
                            <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">log Out</span>
                        </a>
                    </li>
                </ul>


        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>
                <span class="card-title align-middle" style="letter-spacing: 0.5em; margin-top: 10px; font-family: Adlinnaka; color:red;">
                    <h2 style="color: #4e4e4e;"><b>TEKNOLOGI INFORMASI SPMT</b></h2>
                </span>
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
                <div class="container-fluid p-0" style="margin-top: -30px; border-radius:30px">
                    <div class="row">
                        <div class="card mb-3" style="height : 50px; border-radius:30px;">
                            <!-- <div class="card-body text-center"> -->
                            <img src="pelindo.png" class="avatar img-fluid rounded me-1" style="width: 180px; margin-top: 2px; margin-left: -10px; height: 45px;"> </img>
                            <h3 style="font-family: Helvetica; color : #4e4e4e; letter-spacing: 3px;  margin-top: -35px; opacity:50%;"><b>
                                    <center>TABEL BARANG KELUAR</center>
                                    <div style=" margin-top:-30px;">
									<a href="cetak2.php"><button type="button" class="btn btn-secondary" style="float:right;margin-right:20px; border-radius:10px;">Export PDF</button></a>
									</div>	
                                </b></h3>
                            <!-- <select name="go" class="form-select" style="width:200px; margin-top:-37px; margin-left:1050px; border-radius: 20px;">
								<option selected>Barang Masuk</option>
								<option>Barang Keluar</option>
								<option>Barang Pinjaman</option>
								<option>Barang Rusak</option>
							</select> -->
                            <!-- </div> -->
                        </div>
                        <div class="card" style="border-radius:20px">
                            <?php
                            if (isset($_SESSION['status'])) { ?>
                                <div class="alert alert-warning alert-dismissible fade show" role="alert" style="border-radius:20px; margin-top:10px;">
                                    <strong>DIHAPUS!</strong> Data barang telah di hapus.
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            <?php
                                unset($_SESSION['status']);
                            }
                            ?>
                            <div class="card-header" style="height: auto; width:auto;">
                                <table id="example" class="table table-striped hover" align="center" style="margin-top:20px">

                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th style="width:11%;">Nama Barang</th>
                                            <th style="width:11%;">Tipe</th>
                                            <th>Kualitas</th>
                                            <th style="width:10%;">Tanggal</th>
                                            <th>Jumlah</th>
                                            <th style="width:12%; word-break: break-all;">S/N</th>
                                            <th>Penginput</th>
                                            <th>Divisi</th>
                                            <th>Branch</th>
                                            <th style="width:12%; word-break: break-all;">Ket</th>
                                            <th style="width:11%;">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody style="word-break: break-all;">
                                        <?php $id = 1; ?>
                                        <?php while ($data = mysqli_fetch_assoc($tampil)) : ?>

                                            <tr style="word-break: break-all;">
                                                <td align="center"><?= $id ?></td>
                                                <td align="center"><?= $data['nama_brg']; ?></td>
                                                <td align="center"><?= $data['tipe_brg']; ?></td>
                                                <td align="center"><?= $data['kualitas_brg']; ?></td>
                                                <td align="center"><?= $data['tgl']; ?></td>
                                                <td align="center"><?= $data['jlh_brg']; ?></td>
                                                <td align="center" style="width:12%; word-break: break-all;"><?= $data['serial_num']; ?></td>
                                                <td align="center"><?= $data['nama_penginput']; ?></td>
                                                <td align="center"><?= $data['nama_divisi']; ?></td>
                                                <td align="center"><?= $data['nama_branch']; ?></td>
                                                <td align="center" style="word-break: break-all;"><?= $data['ket']; ?></td>
                                                <td align="center">
                                                    <img src="view.png" style="width:12%;" data-bs-toggle="modal" data-bs-target="#staticBackdrop<?= $data['id']; ?>">
                                                    <!-- Modal -->
                                                    <div class="modal fade" id="staticBackdrop<?= $data['id']; ?>" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                                        <div class="modal-dialog">
                                                            <div style="border-radius:20px;" class="modal-content">
                                                                <div class="modal-header">

                                                                    <h5 class="modal-title" id="staticBackdropLabel" style="font-family: poppins; opacity:60%"><b>VIEW DETAIL BARANG</b></h5>

                                                                </div>
                                                                <div class="modal-body">
                                                                    <div>
                                                                        <img style="width: 80%; height:auto; border-radius:20px;" src='<?php echo $data['gbr']; ?>'>
                                                                    </div></br></br>
                                                                    <div class=" row">
                                                                        <div class="col-sm-4" style="font-size: 15px; float:left;padding-left:30px;"><b>
                                                                                <p align="left">Nama Barang</br>
                                                                                    Tipe Barang</br>
                                                                                    S/N</br>
                                                                                    Kualitas</br>
                                                                                    Tanggal</br>
                                                                                    Jumlah Barang</br>
                                                                                    Penginput</br>
                                                                                    Divisi</br>
                                                                                    Branch</br>
                                                                                    Ket</br>
                                                                            </b></p>
                                                                        </div>
                                                                        <div class="col-sm-8" style="font-size: 15px;">
                                                                            <p align="left"> : <?php echo $data['nama_brg']; ?></br>
                                                                                : <?php echo $data['tipe_brg']; ?></br>
                                                                                : <?php echo $data['serial_num']; ?></br>
                                                                                : <?php echo $data['kualitas_brg']; ?></br>
                                                                                : <?php echo $data['tgl']; ?></br>
                                                                                : <?php echo $data['nama_penginput']; ?></br>
                                                                                : <?php echo $data['nama_divisi']; ?></br>
                                                                                : <?php echo $data['nama_branch']; ?></br>
                                                                                : <?php echo $data['jlh_brg']; ?></br>
                                                                                : <?php echo $data['ket']; ?></br></p>
                                                                        </div></br>
                                                                    </div>
                                                                </div>
                                                                <div class=" modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <a href="edit2.php?id=<?= $data['id']; ?>"><img src="edit.png" style="width:12%; margin-left:8px;"></a>
                                                    <a href="hapus2.php?id=<?= $data['id']; ?>"><img src="delete.png" style="width:10%; margin-left:10px;"></a>
                                                </td>
                                            </tr>
                                            <?php $id++; ?>
                                        <?php endwhile; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <footer class="footer" style="border-radius:30px">
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

                <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
                <script src="https://cdn.datatables.net/1.13.5/js/jquery.dataTables.min.js"></script>
                <script src="https://cdn.datatables.net/1.13.5/js/dataTables.bootstrap5.min.js"></script>
                <script src="js/app.js"></script>
                <script src="skripku.js"></script>
                <script>
                    new DataTable('#example');
                </script>
                <script>
                    var myModal = document.getElementById('myModal')
                    var myInput = document.getElementById('myInput')

                    myModal.addEventListener('shown.bs.modal', function() {
                        myInput.focus()
                    })
                </script>
</body>

</html>