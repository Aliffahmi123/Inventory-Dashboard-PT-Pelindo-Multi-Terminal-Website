<?php
session_start(); // jika sudah login, akan diarahkan ke menu index, namun jika belum login, akan diarahkan ke login dahulu
include_once "koneksi.php"; //koneksi mencakup seluruhan database yang dipakai
if (!isset($_SESSION['log'])) {
    header('location: ui-buttons.php');
    exit();
}

if (isset($_POST['submit'])) {
    $title = $_POST['title'];
    $isi = $_POST['isi'];
    $date_time = $_POST['date_time'];

    $query = "INSERT INTO todos VALUES ('','$title','$isi','$date_time','')";
    $queryrun = mysqli_query($conn, $query);
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
    <link href="todo.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

</head>

<body>
    <div class="wrapper">
        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg" style="background-color: #222e3c; border-radius: 30px; width: 95%; margin-top: 20px; margin-left: 45px; height:50px;">
                <span class="card-title align-middle" style="letter-spacing: 0.5em; margin-top: 10px; font-family: poppins; margin-left: 33%;">
                    <div class="mb-10" style="margin-top:28px; margin-left:-520px;">
                        <a href="index.php"><button class="btn btn-secondary btn-lg" style="width:100px; border-top-left-radius: 20px; border-bottom-left-radius: 20px;">Kembali</button></a>
                    </div>
                    <h2 style="opacity: 40%; color:white; margin-left:140px;"><b>CATATAN</b></h2>

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
                        <div class="col-12 col-lg-4" style="margin-top:-20px; border-radius:15px;">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">TULIS CATATAN</h5>
                                </div>
                                <div class="card-header" style="margin-top:-20px;">
                                    <input type="text" class="form-control" placeholder="Masukkan Judul" name="title" required>
                                </div>
                                <div class="card-body" style="margin-top:-20px">
                                    <textarea class="form-control" rows="19" placeholder="Ketik Catatan" name="isi" required></textarea>
                                </div>
                                <div class="card-body" style="margin-top:-20px">
                                    <input type="date" class="form-control"" name=" date_time" required></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="mb-10" style="margin-top:30px; margin-left:40px;">
                            <button type="submit" class="btn btn-primary btn-lg" style="width:400px; border-radius:10px;" name="submit">Tambah Catatan</button>
                        </div>

                </form>
                <div style="margin-top:-650px; float:right; width:65%; height: auto; background-color:white; border-radius:15px">
                    <?php
                    $todos = "SELECT * FROM todos ORDER BY id DESC";
                    $todos_run = mysqli_query($conn, $todos);
                    ?>
                    <?php if ($todos_run->num_rows <= 0) { ?>
                        <div class="show-todo-section">
                            <div class="todo-item">
                                <div class="empty">
                                    <img src="note.png" width="20%" />
                                </div>
                            </div>
                        <?php } ?>

                        <?php while ($todo = mysqli_fetch_assoc($todos_run)) { ?>
                            <div class="todo-item" style="background-color: #F0FFFF;">
                                <a href="hapus5.php?id=<?php echo $todo['id']; ?>" class="remove-to-do">x</span></a>
                                <h2 class="card-title mb-10" style="margin-left:30px; font-family: poppins;">"<?php echo $todo['title'] ?>"</h2>
                                <h5 style="margin-left:30px;"><?php echo $todo['isi'] ?></h5>
                                <br>
                                <small>Dibuat pada : <?php echo $todo['date_time'] ?></small>
                            </div>
                        <?php } ?>
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
    <script src="sweetalert/sweetalert2.min.js"></script>
    <script src="sweetalert/sweetalert2.all.min.js"></script>
    <script src="sweetalert/sweetalert2.min.js"></script>
    <script src="sweetalert"></script>
    <script src="skripku.js"></script>
</body>

</html>