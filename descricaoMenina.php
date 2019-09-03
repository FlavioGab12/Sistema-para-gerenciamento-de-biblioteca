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
	<title>Descrição A Menina que Rouba Livros</title>
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
		<h2 style="padding-top:30px;">A Menina que Roubava Livros - Markus Zusak</h2>
		<div class="row" style="padding-top:20px;">
			<div class="col-md-6">
				<figure>
					<img src="imagens/menina.jpeg" alt="Imagem" width="320" height="420">
				</figure>
			</div>
			<div class="col-md-6" id="texto">
				<p class="pa"><b>Titulo:</b> A Menina que Roubava Livros</p>
				<p class="pa"><b>Autor:</b> Markus Zusak</p>
				<p class="pa"><b>Editora:</b> Picador/Pan Macmillan/p>
				<p class="pa"><b>Ano de lançamento:</b> 01/09/2005</p>
				<p class="pa"><b>Gênero:</b> Drama</p>
			
				<b>Descrição:</b> 
				<p class="pa">
					Entre 1939 e 1943, Liesel Meminger encontrou a Morte três vezes. E saiu suficientemente viva das três ocasiões para que a própria, de tão impressionada, decidisse nos contar sua história, em "A Menina que Roubava Livros", livro há mais de um ano na lista dos mais vendidos do "The New York Times". Desde o início da vida de Liesel na rua Himmel, numa área pobre de Molching, cidade desenxabida próxima a Munique, ela precisou achar formas de se convencer do sentido da sua existência.<br><br>
					Horas depois de ver seu irmão morrer no colo da mãe, a menina foi largada para sempre aos cuidados de Hans e Rosa Hubermann, um pintor desempregado e uma dona de casa rabugenta. Ao entrar na nova casa, trazia escondido na mala um livro, "O Manual do Coveiro". Num momento de distração, o rapaz que enterrara seu irmão o deixara cair na neve. Foi o primeiro de vários livros que Liesel roubaria ao longo dos quatro anos seguintes. E foram estes livros que nortearam a vida de Liesel naquele tempo, quando a Alemanha era transformada diariamente pela guerra, dando trabalho dobrado à Morte.<br><br>
					O gosto de rouba-los deu à menina uma alcunha e uma ocupação; a sede de conhecimento deu-lhe um propósito. E as palavras que Liesel encontrou em suas páginas e destacou delas seriam mais tarde aplicadas ao contexto a sua própria vida, sempre com a assistência de Hans, acordeonista amador e amável, e Max Vanderburg, o judeu do porão, o amigo quase invisível de quem ela prometera jamais falar. Há outros personagens fundamentais na história de Liesel, como Rudy Steiner, seu melhor amigo e o namorado que ela nunca teve, ou a mulher do prefeito, sua melhor amiga que ela demorou a perceber como tal. Mas só quem está ao seu lado sempre e testemunha a dor e a poesia da época em que Liesel Meminger teve sua vida salva diariamente pelas palavras, é a nossa narradora. Um dia todos irão conhece-la. Mas ter a sua história contada por ela é para poucos. Tem que valer a pena.
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