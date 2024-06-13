<?php
require_once 'koneksi.php';

// Kode untuk menyimpan data ke database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar']; // Misalnya sementara menggunakan link gambar

    // Query untuk menyimpan data ke database
    $query = "INSERT INTO tbl_produk (judul, deskripsi, gambar) VALUES ('$judul', '$deskripsi', '$gambar')";
    if (mysqli_query($koneksi, $query)) {
        echo "<p>Data berhasil disimpan.</p>";
        // Redirect ke halaman yang sama untuk menghindari data terinput lagi saat refresh
        header('Location: index_admin.php?page=produk_admin');
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
    <input type="text" name="judul" placeholder="Judul" required>
    <textarea name="deskripsi" placeholder="Deskripsi" required></textarea>
    <input type="text" name="gambar" placeholder="Link Gambar (png/jpg/jpeg)" required>
    <button type="submit">Simpan</button>
</form>
</body>
</html>