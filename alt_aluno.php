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
	<title>Alterar Aluno</title>
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
			$consulta= mysqli_query($conexao, "select * from incluir_aluno where id_aluno='$id'");
			while ($exibe = mysqli_fetch_assoc($consulta)) {
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
			}
 		?>
 	<form action="alterar_aluno.php?id=<?php echo $id ?>" method="post" class="form">			
		<div class='row'>
			<div class='col-md-12' align='center'>
				<h1 style="padding-top:50px;">Alterar dados do Aluno</h1>
			</div>
		</div>
		<div class='row' style="padding-top:30px;">
			<div class='col-md-3' align='center'>
				Nome<input type='text' id='aluno' name="aluno" class="form-control" placeholder='Nome do aluno' required value="<?php echo $aluno;?>"/>
			</div>
			<div class='col-md-3' align='center'>
				CPF<input type='number' id='cpf' class="form-control" name="cpf" placeholder='CPF do aluno' value="<?php echo $cpf;?>"/><br>
			</div>
			<div class='col-md-3' align='center'>
				E-mail<input type='email' id='email' class="form-control" name="email" placeholder='E-mail do aluno' required value="<?php echo $email;?>"/>
			</div>
			<div class='col-md-3' align='center'>				
				Data <input type='date' id='data'  class="form-control" name="data" placeholder='dd/mm/aaaa' value="<?php echo $data;?>"/>
			</div>
		</div>
		<div class="row" style="padding-top:10px;">
			<div class="col-md-3" align='center'>
				Telefone <input type='number' id='telefone' class="form-control" name="telefone" placeholder='Telefone do aluno' required value="<?php echo $telefone;?>"/>
			</div>
			<div class="col-md-6" align='center'>					
				CEP <input type='number' id='cep' class="form-control" name='cep' placeholder='CEP do aluno' value="<?php echo $cep;?>"/>
			</div>
			<div class="col-md-3" align='center'>					
				Endereço <input type='text' id='endereco'class="form-control" name='endereco' placeholder='Rua/Av' value="<?php echo $endereco;?>"/>
			</div>
		</div>
		<div class='row' style="padding-top:20px;">
			<div class="col-md-3" align='center'>
					Numero <input type='number' id='numero' class='form-control' name="numero" placeholder='Numero' value="<?php echo $numero;?>"/>
			</div>
			<div class="col-md-6" align='center'>
					Bairro <input type='text' id='bairro' class='form-control' name="bairro" placeholder='Bairro' value="<?php echo $bairro;?>"/>
			</div>
			<div class="col-md-3" align='center'>
					Estado <input type="text" name='estado' class='form-control' value="<?php echo $estado;?>">
			</div>
		</div>
			<div class='row' style="padding-top:30px;">
				<div class="col-md-12" align='center'>
					<button ="submit" class="form-group btn btn-primary">Alterar</button>
				</div>
			<p><?php //echo $estado; ?></p>
			</div>
		</form>
	</div>
		<footer class="footer-section">
     			<div class="container">
     				<div class="row" style="padding-top: 30px;">
          				<div class="col-md-6">
            				<p>A leitura é o caminho para o conhecimento.</p>
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