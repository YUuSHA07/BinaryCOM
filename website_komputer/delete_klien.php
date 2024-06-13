<?php
require_once 'koneksi.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    // Query untuk menghapus data produk dari database
    $sql = "DELETE FROM tbl_klien WHERE id=?";
    $stmt = mysqli_prepare($koneksi, $sql);
    mysqli_stmt_bind_param($stmt, "i", $id);
    mysqli_stmt_execute($stmt);

    if(mysqli_stmt_affected_rows($stmt) > 0) {
        echo "Data produk berhasil dihapus.";
    } else {
        echo "Gagal menghapus data produk.";
    }
    mysqli_stmt_close($stmt);
}

// Redirect kembali ke halaman utama setelah menghapus produk
header('Location: index_admin.php?page=admin_klien');
?>
