<?php
//Arquivo de conexão com o banco de dados
	$servidor = "localhost";
	$usuario = "root";
	$senha = "";
	$banco_dados = "bd_sistema_login";

	//Cria a conexão
	$conn = mysqli_connect($servidor, $usuario, $senha, $banco_dados);
?>