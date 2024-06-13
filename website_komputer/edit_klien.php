<?php
require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $nama_klien = $_POST['nama_klien'];
    $tingkatan_klien = $_POST['tingkatan_klien'];

    // Query untuk mengupdate data produk
    $query = "UPDATE tbl_klien SET nama_klien='$nama_klien', tingkatan_klien='$tingkatan_klien' WHERE id=$id";
    if (mysqli_query($koneksi, $query)) {
        echo "<p>Data berhasil diupdate.</p>";
        // Redirect ke halaman yang sama untuk menghindari data terupdate lagi saat refresh
        header('Location: index_admin.php?page=admin_klien');
        exit;
    } else {
        echo "<p>Gagal mengupdate data: " . mysqli_error($koneksi) . "</p>";
    }
} elseif(isset($_GET['id'])) {
    // Jika terdapat parameter ID, ambil data produk berdasarkan ID tersebut
    $id = $_GET['id'];
    $query = "SELECT * FROM tbl_klien WHERE id=$id";
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
    <input type="text" name="nama_klien" value="<?php echo $row['nama_klien']; ?>" required>
    <select name="tingkatan_klien">
    <option value="Klien Utama" <?php if($row['tingkatan_klien'] == 'Klien Utama') echo 'selected';?>>Klien Utama</option>
    <option value="Klien Korporat" <?php if($row['tingkatan_klien'] == 'Klien Korporat') echo 'selected';?>>Klien Korporat</option>
    <option value="Klien Individu" <?php if($row['tingkatan_klien'] == 'Klien Individu') echo 'selected';?>>Klien Individu</option>
</select>

    <button type="submit">Update</button>
</form>
</body>
</html>
