<?php
require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $judul = $_POST['judul'];
    $deskripsi = $_POST['deskripsi'];
    $gambar = $_POST['gambar']; // Misalnya sementara menggunakan link gambar

    // Query untuk mengupdate data produk
    $query = "UPDATE tbl_produk SET judul='$judul', deskripsi='$deskripsi', gambar='$gambar' WHERE id=$id";
    if (mysqli_query($koneksi, $query)) {
        echo "<p>Data berhasil diupdate.</p>";
        // Redirect ke halaman yang sama untuk menghindari data terupdate lagi saat refresh
        header('Location: index_admin.php?page=produk_admin');
        exit;
    } else {
        echo "<p>Gagal mengupdate data: " . mysqli_error($koneksi) . "</p>";
    }
} elseif(isset($_GET['id'])) {
    // Jika terdapat parameter ID, ambil data produk berdasarkan ID tersebut
    $id = $_GET['id'];
    $query = "SELECT * FROM tbl_produk WHERE id=$id";
    $result = mysqli_query($koneksi, $query);
    $row = mysqli_fetch_assoc($result);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Produk</title>
</head>
<body>
    <!-- Form untuk mengisi data -->
<form method="post" class="input-klien">
    <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
    <input type="text" name="judul" value="<?php echo $row['judul']; ?>" placeholder="Judul" required>
    <textarea name="deskripsi" placeholder="Deskripsi" required><?php echo $row['deskripsi']; ?></textarea>
    <input type="text" name="gambar" value="<?php echo $row['gambar']; ?>" placeholder="Link Gambar" required>
    <button type="submit">Update</button>
</form>
</body>
</html>
