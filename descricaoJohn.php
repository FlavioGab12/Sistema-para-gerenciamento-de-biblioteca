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
	<title>Descrição Querido John</title>
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
		<h2 style="padding-top:30px;">Querido John - Nicholas Sparks</h2>
		<div class="row" style="padding-top: 20px">
			<div class="col-md-6">
				<figure>
					<img src="imagens/queridojohn.jpg" alt="Imagem" width="320" height="420">
				</figure>
			</div>
			<div class="col-md-6"  id="texto">
				<p class="pa"><b>Titulo:</b> Querido John</p>
				<p class="pa"><b>Autor:</b> Nicholas Sparks</p>
				<p class="pa"><b>Editora:</b> Warner Books</p>
				<p class="pa"><b>Ano de lançamento:</b></p> 07/10/2007</p>
				<p class="pa"><b>Gênero:</b> Suspense</p>
			
				<b>Descrição:</b>
				<p class="pa">
					Traduzido para 50 idiomas, os livros de Nicholas Sparks já venderam mais de 100 milhões de livros no mundo. “Nicholas Sparks é sinônimo de histórias comoventes e finais agridoces.” – Booklist Comemorando dez anos de seu lançamento internacional, Querido John continua sendo um dos romances mais bem-sucedidos e amados de Nicholas Sparks, um especialista em tocar o coração dos leitores. Após uma juventude de rebeldia e bebedeira, John Tyree decidiu dar início a um novo capítulo em sua vida e se alistou no Exército. Um ano depois, agora um novo homem, ele retorna a Wilmington, na Carolina do Norte, para passar um tempo com o velho pai. Uma tarde, enquanto admira o pôr do sol da pequena cidade litorânea, ele conhece a garota de seus sonhos. Além de ser linda, Savannah é amigável, de sorriso fácil, um exemplo de boa conduta e altruísmo.<br><br>
					Curiosamente, esse contraste de personalidades não impede que um sentimento arrebatador nasça entre os dois. No entanto, John precisa voltar para a Alemanha a fim de concluir o serviço militar. Em nome do amor, Savannah decide esperar por ele, enquanto o jovem soldado promete que, após esse período, vai ficar para sempre ao lado da mulher que conquistou seu coração. O que nenhum dos dois poderia esperar eram os eventos do 11 de Setembro. Enquanto John entra em combate no Iraque, Savannah precisa reunir forças para superar a dor da distância. Nesse cenário de saudade e incertezas, uma simples carta pode mudar a vida dos dois para sempre.
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
						Data de empréstimo<input type="date" name="dataEM" class="form-control" required>
						</div>
					<div class="col-md-6" align="center">
						Data de devolução<input type="date" name="dataDEV" class="form-control" required>
					</div>
				</div>
				
				<div class="row"  style="padding-top:20px;">
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