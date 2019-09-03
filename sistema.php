<?php 
	session_start();
	error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
?>
<!doctype html>
 <html lang="pt-BR">
 <head>
 	<title>Página de Sistema</title>
 	<meta charset="utf-8">
 	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
 	<style type="text/css">
 		#foter{
 			background-image: url("imagens-fundo/foter.jpg");
 			padding-bottom: 5%;
 			width: 100%;
 			border-radius: 20px 20px 20px 20px;
 		}
 		#final{
 			background-position: center;
 			height: -100px;
 			
 		}
 		body{
 			background-image: url("imagens-fundo/FUNDO-DE-SITE.jpg");
 		}
 	</style>
 </head>
 	<?php
 		include("db.php");
 		if($_POST){
			$login = $_POST["login"];
			$senha = $_POST["senha"];
			$_SESSION['login']= $login;
 			$_SESSION['senha']= $senha;
		}
		$login=$_SESSION['login'];
 		$senha=$_SESSION['senha'];
		if($login == '' or $senha==''){
		
	?>
<script type="text/javascript">
	alert("Usuário ou senha invalidos");
	window.location.href = "index.php";
</script>
	<?php	
		}
		$consulta = mysqli_query($conexao, "select * from login where login='$login'");
		while ($exibe = mysqli_fetch_assoc($consulta)) {
			$busca_login = $exibe ["login"];			
			$busca_senha = $exibe ["senha"];	
		}
		if($_SESSION['login'] != $busca_login or $_SESSION['senha'] != $busca_senha){
	?>
<script type="text/javascript">
	alert("Usuario ou senha invalidos");
	window.location.href = "index.php";
</script>
	<?php	
		}		
 		include("menu7.php");
	?>
	<div class="container">
		<div class="row">
			<div class="col-md-12" align="center">
				<h1 style="padding-top:50px;" >BIBLIOTECA BRUFLÁ</h1>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-12" align="center">
				<figure style="padding-top:30px;">
					<a href="descricaoAdulterio.php" style="padding-right:10px;"><img src="imagens/adulterio.jpg" alt="Imagem" width="220" height="320"></a>
					<a href="descricaoinvocador.php" style="padding-right:10px;"><img src="imagens/invocadores.jpeg" alt="imagem" width="220" height="320"></a>
					<a href="descricaoHarry.php" style="padding-right:10px;"><img src="imagens/harrypotter.jpg" alt="Imagem" width="220" height="320"></a>
					<a href="descricaoJohn.php" style="padding-right:10px;"><img src="imagens/queridojohn.jpg" alt="Imagem" width="220" height="320"></a>
				</figure>
			</div>
		</div>	
		
		<div class="row">
			<div class="col-md-12" align="center">
				<figure>
					<a href="descricaoMilagre.php" style="padding-right:10px;"><img src="imagens/omilagre.jpeg" alt="Imagem" width="220" height="320"></a>	
					<a href="descricaoGueixa.php" style="padding-right:10px;"><img src="imagens/gueixa.jpeg" alt="Imagem" width="220" height="320"></a>
					<a href="descricaoIt.php" style="padding-right:10px;"><img src="imagens/it.jpeg" alt="Imagem" width="220" height="320"></a>
					<a href="descricaoMenina.php" style="padding-right:10px;"><img src="imagens/menina.jpeg" alt="Imagem" width="220" height="320"></a>
				</figure>
			</div>
		</div>		
	</div>
	<br>
	<br>
	<br>
	<footer class="footer-section">
    	<div class="container">
        	<div class="row">
          		<div class="col-md-6 ml-auto">
            		<h3>Contatos</h3>
            		<ul class="list-unstyled footer-links">
              			<li>
              				<a href="https://www.facebook.com/flavio.gabriel.90834" target="_blank"><img src="imagens-fundo/face1.png" width="35" height="35"></a>
              	  			<a href="https://www.instagram.com/flavio.gf/?hl=pt-br" target="_blank"><img src="imagens-fundo/insta3.png" width="35" height="35"></a>
                  			<a href="#" onclick="email();" ><img src="imagens-fundo/gmail1.ico" width="35" height="35"></a>
                  			<p id="email"></p>
              			</li>
            		</ul>
          		</div>

         		<div class="col-md-6">
            		<h3>Biblioteca BruFlá</h3>
            		<p>Sistema de gerenciamento de biblioteca desenvlvido pelos alunos Flávio Gabriel e Bruna Estefane como projeto para conclusão de curso.</p>
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
    <script type="text/javascript">
    	function email() {
    		var x = document.getElementById('email').value;
    		document.getElementById("email").innerHTML = "Flaviogabriel747@gmail.com"
    	}
    </script>
 </body>
 </html>