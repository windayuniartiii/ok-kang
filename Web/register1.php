<?php 
include_once('db_connect.php');
$database = new database();
if(isset($_POST['register1']))
{
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = password_hash($_POST['password'],PASSWORD_DEFAULT);
   
    if($database->register($nama,$username,$password))
    {
      header('location:login.php');
    }
}
 
?>


<!DOCTYPE html>
<html>

<head>
  <title>Register</title>
  <link rel="stylesheet" type="text/css" href="stylee2.css">
</head>
<body>
  <div class="login-card">
  	<center>
  	<img src="logo.jpeg" style="width:200px;height:200px;border-radius: 40%;"></center>
    <h1>Register</h1><br>
  <form method="post" action="">
    <label for="Nama">Nama</label>
    <input type="text" id="nama" placeholder="Nama" name="nama">
    <label for="username">Username </label>
    <input type="text" id="username" name="username" placeholder="Username">
    <label for="password">Password</label>
    <input type="password" id="password" placeholder="Password" name="password" >

    <input type="submit" name="register1" class="login login-submit">
  </form>

  <div class="login-help">
    <a href="#">Already have an account?</a> • <a href="login.php">Login</a>
  </div>
</div>

</body>

</html>
