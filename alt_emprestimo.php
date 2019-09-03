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
	<title>Alterar livro</title>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
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
		include("db.php");
 		include("menu7.php"); 
 	?>
	<div class="container">

	<?php
		$id= $_GET["id"];
		$consulta= mysqli_query($conexao, "select * from emprestimo where id_emprestimo='$id'");
		while ($exibe = mysqli_fetch_assoc($consulta)) {
			$livro = $exibe["livro"];
			$aluno = $exibe["aluno"];
	 		$dataEM = $exibe["dataEM"];
	 		$dataDEV = $exibe["dataDEV"];
		}
	?>

		<div class="row">
			<div class="col-md-12" align="center">
				<h1 style="padding-top:50px;">Alterar Empréstimo</h1>
			</div>
		</div>
		
	<script type="text/javascript">
		function trocar(obj){
			if(obj.style.display == "none"){
				obj.style.display = "block";
			}else{
				obj.style.display = "none";
			}
		}
	</script>

		<div class="row">
			<div class="col-md-12" align="center">
				<button ><a href="javascript:void(0);" onclick="return trocar(formulario);">Alterar data do livro</a></button>
			</div>
		</div>
		<div id="formulario" style="display:none">
			<form action="alterar_emprestimo.php?id=<?php echo $id ?>" method="post" >
				<div class="row" style="padding-top:20px;">
					<div class="col-md-6" align="center">
						Livro <input type="text" name='livro' class='form-control' value="<?php echo $livro;?>">
					</div>
					<div class="col-md-6" align="center">
						Aluno <input type="text" name='aluno' class='form-control' value="<?php echo $aluno;?>">
					</div>
				</div>
				
				<div class="row" style="padding-top:20px;">
					<div class="col-md-6" align="center">
						Data de empréstimo<input type="date" name="dataEM" class="form-control" value="<?php echo $dataEM;?>">
					</div>
					<div class="col-md-6" align="center">
						Data de devolução<input type="date" name="dataDEV" class="form-control" value="<?php echo $dataDEV; ?>">
					</div>
				</div>
				
	
				<div class="row" style="padding-top:20px;">
						<div class="col-md-12" align="center">
							<button type="submit" class="btn btn-primary">Confirmar</button>
						</div>
					</div>
			</form>
		</div>
	</div>	
</body>
</html>