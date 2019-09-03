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
	<title>Listar empréstimos</title>
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
		$consulta = mysqli_query($conexao,"select * from emprestimo");
		while ($exibe = mysqli_fetch_assoc($consulta)) {
		} 
	?> 
	<?php $consulta = mysqli_query($conexao, "select * from emprestimo");?>

	<table class= "table table-striped">
	<tr class="bg-primary">
		<th>LIVRO</th>
		<th>ALUNO</th>
		<th>DATA EMPRÉSTIMO</th>
		<th>DATA DEVOLUÇÃO</th>
		<th></th>
	</tr>
	<?php
		while ($exibe = mysqli_fetch_assoc($consulta)) {
			$id =	$exibe ["id_emprestimo"];		
			$livro = $exibe ["livro"];
			$aluno = $exibe ["aluno"];
			$dataEM = $exibe ["dataEM"];
			$dataDEV = $exibe ["dataDEV"];
	?>
	<tr>
		<td><?php echo $livro; ?></td>
		<td><?php echo $aluno; ?></td>
		<td><?php echo date('d/m/Y', strtotime($dataEM)) ?></td>
		<td><?php echo date('d/m/Y', strtotime($dataDEV)) ?></td>
		<td><a href="alt_emprestimo.php?id=<?php echo $id;?>"> Alterar/</a>
         	<a href="excluir_emprestimo.php?id=<?php echo $id;?>"> Exluir</a>
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