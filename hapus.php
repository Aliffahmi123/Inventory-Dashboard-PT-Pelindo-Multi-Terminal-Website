<?php
session_start();

include_once 'koneksi.php';
$id = $_GET['id'];
$query = "DELETE FROM brg_masuk where id='$id'";

if (mysqli_query($conn, $query)) {
    $_SESSION['status'] = "Data Telah Dihapus !!";
    header('location: pages-profile.php');
    // echo '<script>alert("Data berhasil di Hapus !!"); document.location="pages-profile.php"; </script>';
} else {
    echo '<script>alert("Data gagal di hapus !!"); document.location="pages-profile.php"; </script>';
};
