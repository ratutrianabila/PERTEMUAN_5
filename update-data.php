<?php
include "koneksi.php";
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$tempat_lahir = $_POST['tmpt_lahir'];
$tgl_lahir = $_POST['tgl_lahir'];
$query = "UPDATE biodata SET
            nama='$nama',
            alamat='$alamat',
            tempat_lahir='$tempat_lahir',
            tgl_lahir='$tgl_lahir'
            WHERE id='$_GET[id]'";
$mysqli->query($query);

header('Location: index.php');
?>