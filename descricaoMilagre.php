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
<!doctype>
<html>
<head>
	<?php
		include("db.php");
 		include("menu7.php"); 
 	?>
	<title>Descrição O Mialgreeeeeeeee</title>
	<meta charset="utf-8">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
	<style type="text/css">
		.pa{
			text-align: justify;

		}
		#texto{
			margin-left: -200px;
		}
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
	<div class="container">
		<div class="row">
			<div class="col-md-12" align="center">
				<h1 style="padding-top:20px;">Descrição</h1>
			</div>
		</div>
		<h2 style="padding-top:30px;">O Milagre - Nicholas Sparks</h2>
		<div class="row" style="padding-top: 20px;">
			<div class="col-md-6">
				<figure>
					<img src="imagens/omilagre.jpeg" alt="Imagem" width="320" height="420">
				</figure>
			</div>
			<div class="col-md-6" id="texto">
				<p class="pa"><b>Titulo:</b> O Milagre</p>
				<p class="pa"><b>Autor:</b> Nicholas Sparks</p>
				<p class="pa"><b>Editora:</b> Agir</p>
				<p class="pa"><b>Ano de lançamento:</b> 01/01/2005</p>
				<p class="pa"><b>Gênero:</b> Ficção</p>
			
				<b>Descrição:</b> 
				<p class="pa">
					Eremy Marsh precisa fazer uma escolha difícil: voltar para a vida que conhece ou fazer algo que nunca fez antes - deixar-se levar pela paixão? Falando dos riscos que devemos correr e dos caminhos ditados pelo coração, O milagre fará com que você também acredite no amor.
				</p>
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

		<div class="row" style="padding-top:20px;">
			<div class="col-md-12" align="center">
				<button ><a href="javascript:void(0);" onclick="return trocar(formulario);">Solcitar emprestimo</a></button>
			</div>
		</div>
		<div id="formulario" style="display:none">
			<form method="post" action="inc_emprestimo.php">
				<fieldset><legend style="padding-top:20px;">Emprestar livro</legend>
					<div class="row" style="padding-top:20px;">
						<div class="col-md-6" align="center">
							 Livro <select name="livro" class="form-control">
									<option>Escolha um livro</option>
								<?php
									$result_niveis_acessos = "SELECT * FROM cadastro_livro ORDER BY titulo";
									$resultado_niveis_acesso = mysqli_query($conexao, $result_niveis_acessos);
									while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
									<option value="<?php echo $row_niveis_acessos['titulo']; ?>"><?php echo $row_niveis_acessos['titulo']; ?></option> <?php
									}
								?>
							</select>
						</div>
						<div class="col-md-6" align="center">
							  Aluno <select name="aluno" class="form-control">
							  		<option>Escolha um aluno</option>
							  	<?php
									$result_niveis_acessos = "SELECT * FROM incluir_aluno ORDER BY aluno";
									$resultado_niveis_acesso = mysqli_query($conexao, $result_niveis_acessos);
									while($row_niveis_acessos = mysqli_fetch_assoc($resultado_niveis_acesso)){ ?>
									<option value="<?php echo $row_niveis_acessos['aluno']; ?>"><?php echo $row_niveis_acessos['aluno']; ?></option> <?php
									}
								?>
							  </select>
						</div>
					</div>
				</fieldset>
				<div class="row" style="padding-top:20px;">
					<div class="col-md-6" align="center">
						Data de empréstimo<input type="date" name="dataEM" class="form-control" required>
					</div>
					<div class="col-md-6" align="center">
						Data de devolução<input type="date" name="dataDEV" class="form-control" required>
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
	<footer class="footer-section">
     	<div class="container">
        	<div class="row pt-5 mt-5 text-center" id="foter">
        		<div class="col-md-12" align="center">
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