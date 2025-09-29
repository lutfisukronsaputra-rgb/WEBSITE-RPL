<?php
// ===== Koneksi ke Database =====
$host = "localhost";     // biasanya localhost
$user = "root";          // username database, default: root
$password = "";          // password database, default kosong
$database = "websiterpl"; // nama database

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Jika berhasil, tidak perlu tampilkan apa-apa
// echo "Koneksi berhasil";
?>
