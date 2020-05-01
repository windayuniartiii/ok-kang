<?php 
session_start();
include_once('db_connect.php');
$database = new database();
 
if(isset($_SESSION['login']))
{
    header('location:home.php');
}
 
if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(isset($_POST['remember']))
    {
      $remember = TRUE;
    }
    else
    {
      $remember = FALSE;
    }
 
    if($database->login($username,$password,$remember))
    {
      header('location:home.php');
    }
}
?>

<!DOCTYPE html>
<html>

<head>
  <title>Log-in</title>
  <link rel="stylesheet" type="text/css" href="stylee2.css">
</head>
<body>
  <div class="login-card">
    <center>
    <img src="logo.jpeg" style="width:200px;height:200px;border-radius: 40%;"></center>
    <h1>Log-in</h1><br>
  <form method="post" action="">
    <label for="username">Username</label>
    <input type="text" id="username" placeholder="Username" name="username">
    <label for="password">Password</label>
    <input type="password" id="password" placeholder="Password" name="password" >
    <input type="submit" name="login" class="login login-submit">
  </form>

  <div class="login-help">
    <a href="register1.php">Register</a> • <a href="#">Forgot Password</a>
  </div>
</div>

</body>

</html>
