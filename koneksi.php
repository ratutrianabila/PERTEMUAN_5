<?php
$mysqli = new mysqli("localhost", "root", "", "db_mahasiswa");
if ($mysqli->connect_error) {
    die("Koneksi gagal: " . $mysqli->connect_error);
}
?>