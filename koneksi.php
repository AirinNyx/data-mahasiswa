<?php
// Koneksi ke database
$host = "localhost";
$user = "root";
$password = "";
$database = "db_mahasiswa"; // Pastikan ini sesuai dengan nama database kamu

$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
