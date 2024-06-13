<h2>Produk</h2>
<?php
require_once 'koneksi.php';
// Ambil data dari database
$query = "SELECT * FROM tbl_produk";
$result = mysqli_query($koneksi, $query);
?>

<div class="tampilan">

<div class="input">
        <a href="index_admin.php?page=input_produk">Masukkan Produk Baru</a>
</div>

<div class="produk">
<!-- Tampilkan data dari database -->
<?php
// Pastikan ada data yang ditemukan sebelum menampilkan card
if (mysqli_num_rows($result) > 0) {
    // Tampilkan data dalam bentuk card
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<div class='card'>";
        echo "<img src='images/" . $row['gambar'] . "' alt='" . $row['judul'] . "'>";
        echo "<h2>" . $row['judul'] . "</h2>";
        echo "<p>" . $row['deskripsi'] . "</p>";
        echo "<a href='index_admin.php?page=edit_produk&id=" . $row['id'] . "'>Edit</a>";
        echo "    ";
        echo "<a href='delete_produk.php?id=" . $row['id'] . "' onclick=\"return confirm('Are you sure you want to delete this product?')\">Delete</a>";
        echo "</div>";
    }
} else {
    echo "<p>Tidak ada data yang ditemukan.</p>";
}
// Tutup koneksi
mysqli_close($koneksi);
?>
</div>
</div>
    


