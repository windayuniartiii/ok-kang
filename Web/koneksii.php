<?php
     $server = "localhost";
	 $username = "root";
	 $password = "";
	 $database = "mekar";
	
	$db = mysqli_connect($server, $username, $password, $database);

	if(!$db){
		die("Gagal :". mysqli_connect_error());
	}

?>
