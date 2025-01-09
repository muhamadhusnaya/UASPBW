<?php
// Konfigurasi koneksi database
$server   = "localhost";
$user     = "root";
$password = "";
$database = "db_organicstation";

// Membuat koneksi
$conn = mysqli_connect($server, $user, $password, $database);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

// Mengatur karakter set agar mendukung UTF-8
if (!mysqli_set_charset($conn, "utf8")) {
    die("Gagal mengatur karakter set: " . mysqli_error($koneksi));
}

?>