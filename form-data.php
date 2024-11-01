<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Data Mahasiswa</title>
</head>
<body>
    <h1>Form Tambah Data Mahasiswa</h1>
    <form action="tambah-data.php" method="get">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" /><br />

        <label for="alamat">Alamat:</label>
        <textarea name="alamat"></textarea><br />

        <label for="tmpt_lahir">Tempat Lahir:</label>
        <input type="text" name="tmpt_lahir" /><br />

        <label for="tgl_lahir">Tanggal Lahir:</label>
        <input type="date" name="tgl_lahir" /><br />

        <button>Simpan</button>
    </form>
    <?php

    $data_mahasiswa = array();


    
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $Nama = $_POST['Nama'];
    $Alamat = $_POST['Alamat'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $tempat_lahir = $_POST['tempat_lahir'];

    $harga = floatval($_POST['Nama']);  
     $total = $NAMA * $Nama;

   
    $_SESSION['data_Mahasiswa'][] = array(
        'nama' => $Nama,
        'Alamat' => $Alamat,
        'Tgl_lahir' => $tgl_lahir,
        'tempat_lahir' => $tempat_lahir,
        'total' => $total
    );
    }

   
    if (!empty($_SESSION['data_Mahasiswa']))  {
    echo "<h2>Tabel Data Mahasiswa</h2>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Tanggal</th><th>Produk</th><th>Jumlah</th><th>Harga</th><th>Total</th><th>Aksi</th></tr>";

    foreach ($_SESSION['data_Mahasiswa'] as $index => $data) {
        echo "<tr>";
        echo "<td>" . ($index + 1) . "</td>"; 
        echo "<td>" . $data['nama'] . "</td>";
        echo "<td>" . $data['alamat'] . "</td>";
        echo "<td>" . $data['tanggal_lahir'] . "</td>";
        echo "<td>Rp " . number_format($data['tempat_lahir'], 3, ',', '.') . "</td>";
        
        echo "<td>
                <button class='action-button edit-button' onclick='editData($index)'>Edit</button>
                <button class='action-button delete-button' onclick='deleteData($index)'>Hapus</button>
            </td>";
        echo "</tr>";
    }

    echo "</table>";
    }
    ?>
    <script>
        function editData(index) {
        // Implementasi fungsi edit
        alert('Edit data dengan index: ' + index);
        }

        function deleteData(index) {
        // Implementasi fungsi hapus
        if (confirm('hapus nih?')) {
            window.location.href = '<?php echo $_SERVER["PHP_SELF"]; ?>?delete=' + index;
        }
        }
    </script>
    

    </body>
    </html>
</body>
</html>