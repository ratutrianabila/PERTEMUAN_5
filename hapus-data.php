<?php
include "koneksi.php";

$query = "DELETE FROM biodata WHERE id='$_GET[id]'";
$mysqli->query($query);
header('Location: index.php');
?>