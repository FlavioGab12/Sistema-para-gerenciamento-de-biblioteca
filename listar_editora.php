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
	<title>Listar Editora</title>
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
		$consulta = mysqli_query($conexao, "select * from ediora");
		while ($exibe = mysqli_fetch_assoc($consulta)) {
		}
	?>

	<?php $consulta = mysqli_query($conexao, "select * from editora");?>
	<table class="table table-striped">
		<tr class="bg-primary">
			<th>EDITORA</th>
			<th>CIDADE</th>
			<th>CNPJ</th>
			<th>EMAIL</th>
			<th></th>
		</tr>
		<?php
			while ($exibe = mysqli_fetch_assoc($consulta)) {
				$id = $exibe["id_editora"];				
				$editora = $exibe ["editora"];
				$cidade = $exibe ["cidade"];
				$cnpj = $exibe ["cnpj"];
				$email = $exibe ["email"];
		?>
		<tr>
			<td><?php echo $editora; ?></td>
			<td><?php echo $cidade; ?></td>
			<td><?php echo $cnpj; ?></td>
			<td><?php echo $email; ?></td>
			<td><a href="alt_editora.php?id=<?php echo $id;?>"> Alterar/</a>
            	<a href="excluir_editora.php?id=<?php echo $id;?>"> Exluir</a>
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