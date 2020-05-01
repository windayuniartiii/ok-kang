<?php 
class database{
	var $host = "localhost";
	var $username = "root";
	var $password = "";
	var $database = "mekar";
	var $koneksi;

	function __construct(){
		$this->koneksi = mysqli_connect($this->host, $this->username, $this->password,$this->database);
	}
 
 
	function register($nama,$username,$password)
	{	
		$insert = mysqli_query($this->koneksi,"insert into users values ('','$nama','$username','$password')");
		return $insert;
	}
 
	function login($username,$password,$remember)
	{
		$query = mysqli_query($this->koneksi,"select * from users where username='$username'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['password']))
		{
			$_SESSION['nama'] = $data_user['nama'];
			$_SESSION['username'] = $username;
			$_SESSION['login'] = TRUE;
			return TRUE;
		}
	}
 
	function relogin($username)
	{
		$query = mysqli_query($this->koneksi,"select * from users where username='$username'");
		$data_user = $query->fetch_array();
		$_SESSION['nama'] = $data_user['nama'];
		$_SESSION['username'] = $username;
		$_SESSION['login'] = TRUE;
	}
} 
 
?>
