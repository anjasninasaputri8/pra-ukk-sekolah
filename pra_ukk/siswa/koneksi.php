<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "pra_ukk";

$koneksi = new mysqli($host, $username, $password, $database);

if ($koneksi->connect_error) {
    echo "Database tidak terkoneksi: " . $koneksi->connect_error;
    exit;
}
?>
