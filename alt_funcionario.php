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
	<title>Alterar Funcionario</title>
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
		$consulta= mysqli_query($conexao, "select * from inc_funcionario where id_funcionario='$id'");
			while ($exibe = mysqli_fetch_assoc($consulta)) {
				$nome = $exibe["nome"];
				$cpf = $exibe["cpf"];
	 			$email = $exibe["email"];
				$data = $exibe["data"];
	 			$cargo = $exibe["cargo"];
	 			$telefone = $exibe["telefone"];
				$cep = $exibe["cep"];
				$rua = $exibe["rua"];
	 			$numero = $exibe["numero"];
	 			$senha = $exibe["senha"];
				$bairro = $exibe["bairro"];
				$estado = $exibe["estado"];
			}
 	?>
	<form action="alterar_funcionario.php?id=<?php echo $id ?>" method="post" class="form">
	<div class="row">
		<div class="col-md-12" align="center">
			<h1 style="padding-top:50px;">Alterar dados do Funcionário</h1>	
		</div>
	</div>
	<div class="row" style="padding-top:30px;">
		<div class="col-md-3" align='center'>
			Nome <input type='text' class='form-control' id='nome' name="nome" placeholder='Nome do Funcionario' required value="<?php echo $nome;?>"/>
		</div>
			<div class="col-md-3" align='center'>
			CPF <input type='number' class='form-control' id='cpf' name="cpf" placeholder='CPF do Funcionario' required value="<?php echo $cpf;?>"/>
			</div>
		<div class="col-md-3" align='center'>
			E-mail <input type='text' class='form-control' id='email' name="email" placeholder='E-mail do Funcionario' required value="<?php echo $email;?>"/>
		</div>
		<div class="col-md-3" align='center'>
			Data <input type='date' class='form-control' id='data' name="data" placeholder='dd/mm/aaaa' value="<?php echo $data;?>"/>
		</div>
	</div>
	<div class="row" style="padding-top:20px;">
		<div class="col-md-3" align='center'>
			Cargo <input type='text' class='form-control' id='cargo' name='cargo' placeholder='Cargo do funcionario' required value="<?php echo $cargo;?>"/>	
		</div>
		<div class="col-md-3" align='center'>
			Telefone <input type='number' class='form-control' id='telefone' name="telefone" placeholder='Telefone do funcionário' value="<?php echo $telefone;?>"/>
		</div>
		<div class="col-md-3" align='center'>
			CEP <input type='number' class='form-control' id='cep' name='cep' placeholder='CPF do funcionário' required value="<?php echo $cep;?>"/>
		</div>
		<div class="col-md-3" align='center'>
			Rua <input type='text' class='form-control' id='rua' name='rua' placeholder='Rua/Av' value="<?php echo $rua;?>"/>
		</div>
	</div>
	<div class="row" style="padding-top:20px;">
		<div class="col-md-3" align="center">		
			Numero <input type='number' class='form-control' id='numero' name="numero" placeholder='Número' value="<?php echo $numero;?>"/>
		</div>
		<div class="col-md-3" align="center">
			Senha <input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required value="<?php echo $senha;?>"/>
		</div>
		<div class="col-md-3" align='center'>
			Bairro <input type='text' class='form-control' id='bairro'name="bairro" placeholder='Bairro' value="<?php echo $bairro;?>"/>
		</div>
		<div class="col-md-3" align='center'>
			Estado <input type="text" name="estado" class='form-control' value="<?php echo $estado;?>">	
		</div>
	</div>
			
		<div class="row" style="padding-top:30px;">
				<div class="col-md-12" align='center'>
					<button style="margin-top:15px;"type="submit"class="form-group btn btn-primary">Alterar</button>
				</div>
			</div>
	</form>
	</div>
	<footer class="footer-section">
     	<div class="container">
     		<div class="row" style="padding-top: 30px;">
          		<div class="col-md-6">
            		<p>Você ja leu um livro hoje?</p>
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