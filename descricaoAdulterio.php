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
	<title>Descrição Adulterio</title>
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
				<h1 style="padding-top:50px;">Descrição</h1>
			</div>
		</div>
		<h2 style="padding-top:30px;">Adulterio - Paulo Coelho</h2>
		<div class="row" style="padding-top: 20px;">
			<div class="col-md-6">
				<figure>
					<img src="imagens/adulterio.jpg" alt="Imagem" width="320" height="420">
				</figure>
			</div>
			<div class="col-md-6" id="texto">
				<p class="pa"><b>Titulo:</b> Adulterio</p>
				<p class="pa"><b>Autor:</b> Paulo Coelho</p>
				<p class="pa"><b>Editora:</b> Sextante</p>
				<p class="pa"><b>Ano de lançamento:</b> 21/11/2012</p>
				<p class="pa"><b>Gênero:</b> Ficção</p>
			
				<b>Descrição:</b> 
				<p class="pa">
					Uma mulher de cerca de 30 anos começa a questionar a rotina e a previsibilidade de seus dias. Aos olhos de todos, ela tem uma vida perfeita: um casamento sólido e estável, um marido amoroso, filhos doces e bem-comportados, um emprego como jornalista do qual não pode se queixar. Porém já não consegue mais suportar o esforço que precisa fazer para fingir felicidade quando tudo o que sente pela vida é uma enorme apatia.<br><br>
					Tudo isso muda quando ela encontra um ex-namorado da adolescência. Jacob agora é um político bem-sucedido e, durante uma entrevista, acaba
					despertando nela algo que havia muito ela não sentia: paixão. Agora ela fará de tudo para conquistar esse amor impossível, e terá que descer até
					o fundo do poço das emoções humanas para enfim encontrar sua redenção.
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
				<button><a href="javascript:void(0);" onclick="return trocar(formulario);">Solcitar emprestimo</a></button>
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
						Data de empréstimo<input type="date" id="dataEM" name="dataEM" class="form-control" required>
					</div>
					<div class="col-md-6" align="center">
						Data de devolução<input type="date" id="dataDEV" name="dataDEV" class="form-control" required>
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