<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
	session_start();
	$login=$_SESSION['login'];
	$senha=$_SESSION['senha'];
 
	if($_SESSION['login'] == '' or $_SESSION['senha'] == ''){
?>
<script type="text/javascript">
	window.location.href = "index.php";
</script>
<?php	
	}		
 ?>
<!doctype html>
<html lang="pt-BR">
<head>
	<title>Inserir Gênero</title>
	<meta charset='UTF-8'>
	<style type="text/css">
		body{
			background-image: url("imagens-fundo/FUNDO-DE-SITE.jpg");
			background-repeat: no-repeat;
			background-size: cover; 	
		}
		#foter{
 			padding-bottom: 5%;
 			width: 100%;
 			border-radius: 20px 20px 20px 20px;
 		}
 		#final{
 			background-position: center;
 			height: -100px;
 		}
	</style>
</head>
<body>
	<?php
		include("menu7.php");
	?>
	<div class="container">
		<form action="gnr.php" method="post" class="form">
			<div class="row">
				<div class="col-md-12" align="center">
					<h1 style="padding-top:50px;">Incluir Gênero</h1>
				</div>
			</div>
			<div class="row" style="padding-top:30px;">
				<div class="col-md-12" align="center">
					<select name='genero' class="form-control" required style="width:40%;">
						<option value="Acao">Ação</option>
                		<option value="Animacao">Animação</option>
                		<option value="Comédia">Comédia</option>
                		<option value="Documentario">Documentario</option>
                		<option value="Drama">Drama</option>
                		<option value="Fantasia">Fantasia</option>
                		<option value="Ficao Cientifica">Ficção Cientifica</option>
                		<option value="Ficção historica">Ficção Historica</option>
                		<option value="Romance">Romance</option>
                		<option value="Suspense">Suspense</option>
 						<option value="Terror">Terror</option>
					</select>
				</div>
			</div>
			<div class="row" style="padding-top:30px;">
				<div class="col-md-12" align="center">
					<button type="submit"class="form-group btn btn-primary">Enviar</button>
				</div>
			</div>
		</form>
	</div>
	<footer class="footer-section">
     	<div class="container">
        	<div class="row" style="padding-top: 30px;">
          		<div class="col-md-12">
            		<p>Durante a leitura a nossa cabeça é um campo de batalha de pensamentos alheios.</p>
        	  	</div>
        	</div>
        	<div class="row pt-5 mt-5 text-center" id="foter">
        		<div class="col-md-12">
            		<div class="border-top pt-5">
            			<p id="final">
        					Flávio Gabriel &copy;<script>document.write(new Date().getFullYear());</script> todos os direitos reservados <i class="icon-heart" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank" ></a>
      					</p>
            		</div>
         	 	</div>
       		</div>
      	</div>
    </footer>
</body>
</html>