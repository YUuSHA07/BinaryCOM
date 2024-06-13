<?php
session_start();
require_once 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST['username'];
  $password = $_POST['password'];

  $query = "SELECT * FROM tbl_login WHERE username = '$username' AND password = '$password'";
  $result = mysqli_query($koneksi, $query);
  $row = mysqli_fetch_assoc($result);

  if ($row) {
      $_SESSION['id'] = $row['id'];
      $_SESSION['username'] = $username;
      $_SESSION['level'] = $row['level'];

      if ($row['level'] == 'admin') {
          header("location: index_admin.php");
      } else {
          header("location: index_user.php");
      }
  } else {
      $error = "Username atau password salah.";
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="container">
    <header>
        <img src="images/header.jpg" alt="">
    </header>

    <div class="card-login">
    <h2 class="judul">Login</h2>
    <?php if (isset($error)) echo "<div>$error</div>"; ?>
    <form action="" method="post">
        <table >
            <tr><label for="username">Username:</label></tr>
            <tr><input type="text" id="username" name="username" required></tr>
            <tr><label for="password">Password:</label></tr>
            <tr><input type="password" id="password" name="password" required ></tr>
            <tr><input type="submit" value="Login"></tr>
        </table>
    </form>
    </div>
    </div>
    
</body>
</html>
