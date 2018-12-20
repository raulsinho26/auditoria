<?php 
	$host = "localhost:3307";
	$user = "root";
	$pass = "";
	$banco = "agroconecta";
	$conn = new mysqli ($host, $user, $pass, $banco);
	if ($conn->connect_error){
		die ("Falha na conexão: ". $conn->connect_error);
	}
 ?>
