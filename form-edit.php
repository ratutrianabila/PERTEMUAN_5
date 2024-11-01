<?php
include "koneksi.php";

$query = "SELECT * FROM biodata WHERE id='$_GET[id]'";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Edit Data</title>
</head>
<body>
    <h1>Form Edit Data Mahasiswa</h1>
    <form action="<?= 'update-data.php?id='.$row['id'];?>" method="post">
        <label for="nama">Nama</label>
        <input type="text" name="nama" value="<?= $row['nama'];?>" /><br />
        <label for="alamat">Alamat</label>
        <textarea name="alamat"><?= $row['alamat'];?></textarea><br />

        <label for="tmpt_lahir">Tempat Lahir</label>
        <input type="text" name="tmpt_lahir" value="<?= $row['tempat_lahir'];?>" /><br />
        <label for="tgl_lahir">Tanggal Lahir</label>
        <input type="date" name="tgl_lahir" value="<?= $row['tgl_lahir'];?>" /><br />
        <button type="submit">Update</button>
    </form>
</body>
</html>