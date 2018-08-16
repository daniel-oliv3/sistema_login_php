<?php
session_start();
include_once("conexao.php");

$email = filter_input(INPUT_POST, 'userEmail', FILTER_SANITIZE_STRING);

$result_usuario = "SELECT * FROM usuarios WHERE email='$email' LIMIT 1";
$resultado_usuario = mysqli_query($conn, $result_usuario);

//Encontrando usuario com o email
if(($resultado_usuario) AND ($resultado_usuario->num_rows != 0)){
	$row_usuario = mysqli_fetch_assoc($resultado_usuario);
	$userName = filter_input(INPUT_POST, 'userName', FILTER_SANITIZE_STRING);
	$_SESSION['id'] = $row_usuario['id'];
	$_SESSION['nome'] = $row_usuario['nome'];
	$resultado = 'administrativo.php';
	echo $resultado;
}else{//Nenhum usuário encontrado
	$resultado = 'erro';
	echo(json_encode($resultado));
}

?>