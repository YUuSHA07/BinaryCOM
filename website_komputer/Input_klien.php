<?php
require_once 'koneksi.php';

// Kode untuk menyimpan data ke database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_klien = $_POST['nama_klien'];
    $tingkatan_klien = $_POST['tingkatan_klien']; // Misalnya sementara menggunakan link gambar

    // Query untuk menyimpan data ke database
    $query = "INSERT INTO tbl_klien (nama_klien, tingkatan_klien) VALUES ('$nama_klien', '$tingkatan_klien')";
    if (mysqli_query($koneksi, $query)) {
        echo "<p>Data berhasil disimpan.</p>";
        // Redirect ke halaman yang sama untuk menghindari data terinput lagi saat refresh
        header('Location: index_admin.php?page=admin_klien');
        exit;
    } else {
        echo "<p>Gagal menyimpan data: " . mysqli_error($koneksi) . "</p>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- Form untuk mengisi data -->
<form method="post" class="input-klien">
    <input type="text" name="nama_klien" placeholder="Nama Klien" required>
    <select name="tingkatan_klien" id="paket" require>
                <option value="">--Tingkatan Klien--</option>
                <option value="Klien Utama">Klien Utama</option>
                <option value="Klien korporat">Klien korporat</option>
                <option value="Klien Individu">Klien Individu"</option>
    </select>
    <button type="submit">Simpan</button>
</form>
</body>
</html>