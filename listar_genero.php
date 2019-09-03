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
	<title>Listar Gênero</title>
	<meta charset='UTF-8'>
	<style type="text/css">
		body{
 			background-image: url("imagens-fundo/FUNDO-DE-SITE.jpg");
 		}
	</style>
</head>
<body>
	<?php
		include("menu7.php");
		include("db.php");
	?>
	<?php
		$consulta = mysqli_query($conexao, "select * from genero");
		while ($exibe = mysqli_fetch_assoc($consulta)) {
			$id = $exibe ["id_genero"];			
			$genero = $exibe ["genero"];
		}
	?>

	<?php $consulta = mysqli_query($conexao, "select * from genero");?>
	<table class="table table-striped">
		<tr class="bg-primary">
			<th>GÊNERO</th>
			<th></th>
		</tr>
	<?php
		while ($exibe = mysqli_fetch_assoc($consulta)) {
				$id= 	$exibe ["id_genero"];					
				$genero = $exibe ["genero"];
	?>
		<tr>
			<td><?php echo $genero; ?></td>
            <td><a href="alt_genero.php?id=<?php echo $id;?>"> Alterar/</a>
               	<a href="excluir_genero.php?id=<?php echo $id;?>">Exluir</a>
           	</td>												
		</tr>
	<?php
		}
	?>
	</table>
	<footer class="footer-section">
     	<div class="container">
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