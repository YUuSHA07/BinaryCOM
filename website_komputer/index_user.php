<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
        <header>
        <img src="images/header.jpg" alt="">
        </header>

        <nav>
            <!-- ul>li*5>a -->
            <ul>
                <li><a href="index_user.php">Home</a></li>
                <li><a href="index_user.php?page=produk">Produk</a></li>
                <li><a href="index_user.php?page=visi">Visi & Misi</a></li>
                <li><a href="index_user.php?page=kontak">Kontak</a></li>
                <li><a href="index_user.php?page=daftar_klien">Daftar Klien</a></li>
                <li><a href="index_user.php?page=about">About</a></li>
                <li><a href="login.php">Logout</a></li>
                
            </ul>
        </nav>

        <main>
            <?php 
                if (isset($_GET['page'])) {
                    require $_GET['page'].".php";
                }else {
                    require "profile.php";
                }
            ?>
        </main>

        <footer>
                <center><p>copyright &copy; 2024.YUSA</p></center>
        </footer>
    </div>

    <script>
        function logout() {
            window.history.replaceState(null, null, window.location.pathname);
        }
    </script>
</body>
</html>