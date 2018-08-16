<?php
	session_start();
	unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['email'], $_SESSION['face_access_token']); //destroir as sessões

	$_SESSION['msg'] = "<div class='alert alert-success'>Deslogado com sucesso!</div>";
	header("Location: login.php");
?>