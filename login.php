<?php
	//session_start();
	include_once 'face.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Sistema - Login</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta http-equiv="X-UA-Compatible" content="IE-edge">
	<meta name="viewport" content="width-device-width, initial-scale=1">
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/signin.css" rel="stylesheet">
	<script src="https://apis.google.com/js/platform.js" async defer></script>
	<meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">  <!--alterar-->
</head>
	<body>
		<div class="container">
			<div class="form-signin" style="background: #87CEEB;">	
				<h2 class="text-center">Login</h2>
				<p id='msg'></p>
				<?php
					if(isset($_SESSION['msg'])){
						echo $_SESSION['msg'];
						unset($_SESSION['msg']);
					}
					if(isset($_SESSION['msgcad'])){
						echo $_SESSION['msgcad'];
						unset($_SESSION['msgcad']);
					}
				?>
				<form method="POST" action="valida.php">
					<!--<label>Usuário:</label>-->
					<input type="text" name="usuario" placeholder="Digite o seu usuário" class="form-control"><br>
					
					<!--<label>Senha:</label>-->
					<input type="password" name="senha" placeholder="Digite a sua senha" class="form-control"><br>

					<input type="submit" name="btnLogin" value="Acessar" class="btn btn-success btn-block">

					<div class="row text-center" style="margin-top: 20px;">
						<h4>Você não possui uma conta?</h4>
						<a href="cadastrar.php">Crie grátis</a>
					</div>

					
					<div class="row text-center" style="margin-top: 20px;">
						<div class="col-xs-6 col-sm-6 col-md-6">
							<span class="g-signin2" data-onsuccess="onSignIn" data-theme="dark" style="margin-top: 20px;"></span>
						</div>

						<div class="col-xs-6 col-sm-6 col-md-6">
							<a href="<?php echo $loginUrl; ?>">
								<button type="button" class="btn btn-primary">Facebook</button>
							</a>
						</div>
					</div>
				</form>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script>
			function onSignIn(googleUser) {
			  var profile = googleUser.getBasicProfile();
			  var userID = profile.getId(); 
			  var userName = profile.getName();
			  var userPicture = profile.getImageUrl();
			  var userEmail = profile.getEmail(); 
			  var userToken = googleUser.getAuthResponse().id_token;

			  //document.getElementById('msg').innerHTML = userEmail;
			  if(userEmail !== ''){
			  	var dados = {
			  		userID:userID,
			  		userName:userName,
			  		userPicture:userPicture,
			  		userEmail:userEmail
			  	};
			  	$.post('valida_google.php', dados, function(retorna){
			  		if(retorna === '"erro"'){
			  			var msg = "<div class='alert alert-danger'>Usuário não encontrado com esse e-mail!</div>"
			  			document.getElementById('msg').innerHTML = msg;
			  		}else{
			  			window.location.href = retorna;
			  		}	
			  	});
			  }else{
			  	var msg = "Usuario não encontrado!";
			  	document.getElementById('msg').innerHTML = msg;
			  }
			}
		</script>
	</body>
</html>