<?php
	$host = "localhost";
	$user = "admrent";
	$senha = "12345";
	$database = "rent";
	$conexao = mysqli_connect($host, $user, $senha, $database) or die("Houve um problema ao tentar se conectar a este banco de dados!");
?>