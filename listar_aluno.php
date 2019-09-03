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
	<title>Listar Aluno</title>
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
		$consulta = mysqli_query($conexao, "select * from incluir_aluno");
		while ($exibe = mysqli_fetch_assoc($consulta)) {
			//$id = $exibe ["id_aluno"];			
			//$genero = $exibe ["incluir_aluno"];
			//echo "<br>".$incluir_aluno;
		}
	?>
	<?php $consulta= mysqli_query($conexao,"select * from incluir_aluno");?>
	<table class= "table table-striped">
		<tr class="bg-primary">
			<th>ALUNO</th> 
	  	   	<th>CPF</th>
			<th>EMAIL</th>
	 		<th>DATA</th>  
	 		<th>TELEFONE</th>
			<th>CEP</th>
	 		<th>ENDEREÇO</th>
	 		<th>NÚMERO</th>
	 		<th>BAIRRO</th>
			<th>ESTADO</th>
			<th></th>
	 	</tr>
	<?php
	 	while ($exibe = mysqli_fetch_assoc($consulta)) {
            $id = $exibe["id_aluno"];	 				
	 		$aluno = $exibe["aluno"];
	 		$cpf = $exibe["cpf"];
	 		$email = $exibe["email"];
	 		$data = $exibe["data"];
	 		$telefone = $exibe["telefone"];
	 		$cep = $exibe["cep"];
	 		$endereco = $exibe["endereco"];
	 		$numero = $exibe["numero"];
			$bairro = $exibe["bairro"];
			$estado = $exibe["estado"];
	?>
		<tr>
			<td><?php echo $aluno ?></td>
			<td><?php echo $cpf ?></td>
			<td><?php echo $email ?></td>
			<td><?php echo date('d/m/Y', strtotime($data)) ?></td>
	 		<td><?php echo $telefone ?></td>						
	 		<td><?php echo $cep ?></td>
	 		<td><?php echo $endereco ?></td>
	 		<td><?php echo $numero ?></td>
	 		<td><?php echo $bairro ?></td>
	 		<td><?php echo $estado ?></td>
	 		<td><a href="alt_aluno.php?id=<?php echo $id;?>"> Alterar/</a>
               	<a href="excluir_aluno.php?id=<?php echo $id;?>"> Exluir</a>
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