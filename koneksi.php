<?php
$host = "localhost";
$user = "root"; // username default XAMPP
$pass = "";
$db   = "db_ksi2025";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}
?>
