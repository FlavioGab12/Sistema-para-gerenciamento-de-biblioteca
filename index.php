<?php 
	session_start();
	error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
?>
<!doctype html>
 <html lang="pt-BR">
 <head>
 	<title>Pagina de login</title>
 	<meta charset="utf-8">
 	<link rel="stylesheet" href="css/bootstrap3.min.css" type="text/css">
 	<style>
 		#login{
 			width: 40%; 			
 		}
 		#senha{
 			width: 40%;
 		}
 		body{
			background-image: url("imagens-fundo/template-fundo-site-conseitos-opticos-4.jpg");
			background-repeat: no-repeat;
			background-size: cover; 
		}
 	</style>
 </head>
 <body>
 	
 	<div class="container">
 		<form class="form" action="sistema.php" method="post" id="form">
 			<div class="row">
 				<div class='col-md-12' align='center'>
 					<h1 style="padding-top:120px;">  LOGIN</h1>
 				</div>
 			</div>
 			<div class="row">
 				<div class='col-md-12' align='center'>
 					<input type='text' class="form-control" id='login' placeholder="Usuário" name='login' />
 				 	<input type='password' style="margin-top:20px;"class="form-control" id='senha' placeholder="Senha" name='senha'/>
 				</div>
 			</div>
			<div class='row'>
				<div class="col-md-12" align='center'>
					<input type="submit" style="margin-top:15px ;" class="form-group btn btn-primary" value="Entrar" name="entrar" id="entrar">
				</div>
			</div>
 		</form>
 	</div>
 </body>
 </html>