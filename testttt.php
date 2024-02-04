<?php
session_start(); // jika sudah login, akan diarahkan ke menu index, namun jika belum login, akan diarahkan ke login dahulu
include_once "koneksi.php"; //koneksi mencakup seluruhan database yang dipakai

if(isset($_POST['submit'])){
	mysqli_query($conn, "insert into brg_masuk set
	nama_brg = '$_POST[nama_brg]'
	");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
    <div class="card">
								<div class="card-header">
									<h5 class="card-title mb-0">Nama Barang</h5>
								</div>
								<div class="card-body" style="margin-top:-20px">
									<input type="text" class="form-control" placeholder="Masukkan Nama Barang" name="nama_brg">
								</div>
							</div>
        <tr>
            <td>Nama Barang</td>
            <td><input type="submit" name="submit">submit</td>
        </tr>
    </form>
</body>
</html>