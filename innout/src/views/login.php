<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>In 'n Out</title>
	<link rel="stylesheet" href="assets/css/comum.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/icofont.min.css">
	<link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
	<form class="form-login" action="#" method="post">
		<div class="login-card card">
			<div class="card-header">
				<i class="icofont-travelling mr-2"></i>
				<span class= "font-weight-light">I </span>
				<span class= "font-weight-bold mx-2">N' </span>
				<span class= "font-weight-light ">Out</span>

				<i class="icofont-runner-alt-1 ml-2"></i>

				
			</div>
			<div class="card-body">
				<?php include(VIEW_TEMPLATE_PATH . '/message.php') ?>
				<div class="form-group">
					<label for="email">E-mail</label>
					<input class="form-control" type="email" name="email" id="email" placeholder="Informe seu email" value="<?= $email?>">
				</div>
				<div class="form-group">
					<label for="password">Senha</label>
					<input class="form-control" type="password" name="password" id="password" placeholder="Informe sua senha" >
				</div>				
			</div>
			<div class="card-footer">
				<button class="btn btn-lg btn-primary">Entrar</button>	
			</div>			
		</div>
	</form>
	
	
</body>
</html>