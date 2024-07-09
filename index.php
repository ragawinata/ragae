<?php
include 'config.php';
session_start();
 
if (isset($_SESSION['username'])) {
    header("Location: biodata.php");
    exit();
}
 
if (isset($_POST['submit'])) {
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = $_POST['password']; // Hash the input password using SHA-256
 
    $sql = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    
    $result = mysqli_query($conn, $sql);
 
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['username'] = $row['username'];
        header("Location: biodata.php");
        exit();
    } else {
        echo "<script>alert('Username atau password Anda salah. Silakan coba lagi!')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>

  <!-- My CSS -->
  <link rel="stylesheet" href="style.css">

  <!-- My Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
  <div class="container">
    <form action="" method="POST" class="login-email">
      <h2>Sign in</h2>
      <div class="input-box">
        <input type="text" name="username" required="required">
        <span>Username</span>
        <i></i>
      </div>
      <div class="input-box">
        <input type="password" name="password" required="required">
        <span>Password</span>
        <i></i>
      </div>
      <div class="links">
        <a href="#">Forgot Password</a>
        <a href="#">Signup</a>
      </div>
      <button name="submit" class="btn">Login</button>
    </form>
  </div>
</body>

</html>