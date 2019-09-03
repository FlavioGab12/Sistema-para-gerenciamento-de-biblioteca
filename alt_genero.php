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
<html>
<head>
	<title>Alterar Gênero</title>
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
		include("db.php");
	?>
	<div class="container">

	<?php
		$id= $_GET["id"];
		$consulta= mysqli_query($conexao, "select * from genero where id_genero='$id'");
		while ($exibe = mysqli_fetch_assoc($consulta)) {
			$genero = $exibe["genero"];
		}
	?>

		<form action="alterar_genero.php?id=<?php echo $id ?>" method="post" class="form" >
			<div class="row">
				<div class="col-md-12" align="center">
					<h1 style="padding-top:50px;">Alterar Gênero</h1>
				</div>
			</div>
			<div class="row" style="padding-top:30px;">
				<div class="col-md-12" align="center">
					<input type="text" name='genero' class="form-control" required style="width:60%;" value="<?php echo $genero;?>">
				</div>
			</div>
			<div class="row" style="padding-top:30px;">
				<div class="col-md-12" align="center">
					<button type="submit"class="form-group btn btn-primary">Alterar</button>
				</div>
			</div>
		</form>
	</div>
	<footer class="footer-section">
     	<div class="container">
     		<div class="row" style="padding-top: 30px;">
          		<div class="col-md-12">
            		<p>A leitura de um bom livro é um dialogo incessante: o livro fala e a alma responde.</p>
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