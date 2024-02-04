<?php
session_start(); // jika sudah login, akan diarahkan ke menu index, namun jika belum login, akan diarahkan ke login dahulu
include_once "koneksi.php"; //koneksi mencakup seluruhan database yang dipakai
if (!isset($_SESSION['log'])) {
    header('location: ui-buttons.php');
    exit();
}

$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM brg_masuk where id='$id'");
$queryupdate = mysqli_fetch_array($query);
?>

<?php
if (isset($_POST['update'])) {
    $nama_brg = $_POST['nama_brg'];
    $tipe_brg = $_POST['tipe_brg'];
    $kualitas_brg = $_POST['kualitas_brg'];
    $tgl = $_POST['tgl'];
    $serial_num = $_POST['serial_num'];
    $jlh_brg = $_POST['jlh_brg'];
    $satuan = $_POST['satuan'];
    $gbr = $_POST['gbr'];
    $ket = $_POST['ket'];

    $queryrun = mysqli_query($conn, "UPDATE brg_masuk SET nama_brg = '$nama_brg', tipe_brg = '$tipe_brg', kualitas_brg = '$kualitas_brg', tgl = '$tgl', serial_num = '$serial_num', jlh_brg = '$jlh_brg', satuan = '$satuan', gbr = '$gbr', ket = '$ket' where id='$id'")
        or die(mysqli_error($conn));
    if ($queryrun) {
        echo '<script>alert("Data Telah di Update"); document.location="pages-profile.php"; </script>';
    }
}
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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.all.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11.10.4/dist/sweetalert2.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="shortcut icon" href="img/icons/icon-48x48.png" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="canonical" href="https://demo-basic.adminkit.io/ui-forms.html" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Pelindo Multi Terminal</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link href="css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

</head>

<body>
    <div class="wrapper">
        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg" style="background-color: #222e3c; border-radius: 30px; width: 95%; margin-top: 20px; margin-left: 45px; height:50px;">
                <span class="card-title align-middle" style="letter-spacing: 0.5em; margin-top: 10px; font-family: poppins; margin-left: 33%;">

                    <h2 style="opacity: 40%; color:white;"><b>UPDATE DATA BARANG MASUK</b></h2>

                </span>
                <!-- <h2 style="font-family: Helvetica; color : lightgray; letter-spacing: 3px;  margin-top: 12px; margin-left: 380px;"><b>BARANG MASUK</b></h2> -->
                <div class="navbar-collapse collapse">
                    <ul class="navbar-nav navbar-align">
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

            <main class="content" style="margin-top: -10px;">

                <form action="" method="POST">
                    <div class="container-fluid p-0">
                        <div class="row">
                            <div class="col-12 col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Nama Barang</h5>
                                    </div>
                                    <div class="card-body" style="margin-top:-20px">
                                        <input type="text" class="form-control" value="<?php echo $queryupdate['nama_brg']; ?>" name="nama_brg">
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Tipe Barang</h5>
                                    </div>
                                    <div class="card-body" style="margin-top:-20px">
                                        <input type="text" class="form-control" value="<?php echo $queryupdate['tipe_brg']; ?>" name="tipe_brg">
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Kualitas</h5>
                                    </div>
                                    <div class="card-body" style="margin-top:-20px">
                                        <select class="form-select" name="kualitas_brg">
                                            <option selected value="<?php echo $queryupdate['tgl']; ?>">Masukkan Kualitas</option>
                                            <option>Baik</option>
                                            <option>Sedang</option>
                                            <option>Buruk</option>
                                        </select>
                                    </div>
                                </div>
                                <div class=" card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Tanggal Masuk</h5>
                                    </div>
                                    <div class="card-body" style="margin-top:-20px">
                                        <input type="Date" class="form-control" value="<?php echo $queryupdate['tgl']; ?>" name="tgl">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Serial Number (jika ada)</h5>
                                    </div>
                                    <div class="card-body" style="margin-top:-20px">
                                        <input type="text" class="form-control" value="<?php echo $queryupdate['serial_num']; ?>" name="serial_num">
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Jumlah Barang Masuk</h5>
                                    </div>
                                    <div class="card-body" style="margin-top:-20px">
                                        <input type="text" class="form-control" value="<?php echo $queryupdate['jlh_brg']; ?>" name="jlh_brg">
                                    </div>
                                </div>

                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Satuan</h5>
                                    </div>
                                    <div class="card-body" style="margin-top:-20px">
                                        <input type="text" class="form-control" value="<?php echo $queryupdate['satuan']; ?>" name="satuan">
                                    </div>
                                </div>
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Import Gambar (jika ada)</h5>
                                    </div>
                                    <div class="card-body" style="margin-top:-20px">
                                        <input type="file" accept="image/png,image/jpeg" class="form-control" value="<?php echo $queryupdate['gbr']; ?>" name="gbr">
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-lg-4">
                                <div class="card">
                                    <div class="card-header">
                                        <h5 class="card-title mb-0">Keterangan Barang Masuk</h5>
                                    </div>
                                    <div class="card-body" style="margin-top:-20px">
                                        <textarea class="form-control" rows="19" value="<?php echo $queryupdate['ket']; ?>" name="ket"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div><a href="pages-profile.php"><button type="button" class="btn btn-primary" style="height: 40px; border-radius: 10px;">Kembali</button>
                        </a>
                        <center>

                            <div class="mb-10" style="margin-top:30px">

                                <button type="submit" class="btn btn-primary btn-lg" style="width:300px; height: 40px; border-radius:10px; margin-top:-140px;" name="update">Update Data Masuk</button>
                            </div>
                        </center>
                </form>
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
    <script src="sweetalert/sweetalert2.min.js"></script>
    <script src="sweetalert/sweetalert2.all.min.js"></script>
    <script src="sweetalert/sweetalert2.min.js"></script>
    <script src="sweetalert"></script>
    <script src="skripku.js"></script>
    <!-- <?php
            if (isset($_SESSION['update_data']) && $_SESSION['update_data'] != '') {
            ?>

        <script>
            Swal.fire({
                title: "BERHASIL !!",
                text: "Data Barang Masuk telah di Update",
                icon: "success"
            });
        </script>
    <?php
                unset($_SESSION['update_data']);
            }
    ?> -->
    <!-- <script>
		const simpann = document.getElementById('simpann');
		simpann.addEventListener('click', function(){
			Swal.fire({
 			 title: "BERHASIL !!",
 			 text: "Data Masuk Berhasil di Simpan",
 			 icon: "success"
			});
		});
	</script> -->
</body>

</html>