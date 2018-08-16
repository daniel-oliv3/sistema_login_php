<?php
	session_start();

	if(!empty($_SESSION['id'])){
		echo "Olá ".$_SESSION['nome'].", Seja bem-Vindo!<br>";
		echo "<a href='sair.php'>Sair</a>";
	}else{
		$_SESSION['msg'] = "<div class='alert alert-danger'>Área restrita!</div>";
		header("Location: login.php");
	}	
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Administrativo</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta name="google-signin-client_id" content="973658282956-3bokoirfe3l55n22onsd1cu3sf3206p8.apps.googleusercontent.com">
</head>
	<body>
		
	

	</body>
</html>