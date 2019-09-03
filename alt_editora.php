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
 	<title>Alterar Editora</title>
 	<meta charset="utf-8">	
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
			$consulta= mysqli_query($conexao, "select * from editora where id_editora='$id'");
			while ($exibe = mysqli_fetch_assoc($consulta)) {
				$editora = $exibe["editora"];
				$cidade = $exibe["cidade"];
	 			$cnpj = $exibe["cnpj"];
	 			$email = $exibe["email"];
			}
 		?>	 	
 		<form class="form" action="alterar_editora.php?id=<?php echo $id ?>" method="post"> 
 		<div class="row">
 			<div class='col-md-12' align='center'>
				<h1 style="padding-top:50px;">Alterar dados da Editora</h1>
			</div>
		</div>
		<div class="row" style="padding-top:30px;">
			<div class="col-md-6" align= "center">
 				Nome da Editora <input type='text' class="form-control" id='Editora' name='editora' required value="<?php echo $editora;?>"/>
 			</div>
	 		<div class="col-md-6" align='center'>
				Cidade <input type='text' id='cidade' class='form-control' name="cidade" value="<?php echo $cidade?>"/>
			</div>
	 	</div>
		<div class="row" style="padding-top:20px;">
	 		<div class="col-md-6" align='center'>
				CNPJ <input type='text' id='cnpj' class='form-control' name="cnpj" required value="<?php echo $cnpj;?>"/>
			</div>
			<div class="col-md-6" align= "center">
 				Email de contato <input type='text' class="form-control" id='email' name='email' value="<?php echo $email;?>"/>
 			</div>
      	</div>
      	<div class="row" style="padding-top:30px;">
        	<div class="col-md-12" align= 'center'>
   				<button style="margin-top:20px;"type="submit"class="form-group btn btn-primary">Alterar</button>
			</div>
		</div>
   		</form>
   </div>
   	<footer class="footer-section">
     	<div class="container">
     		<div class="row" style="padding-top: 30px;">
          		<div class="col-md-12">
            		<p>Quem escreve um livro cria um castelo.<br>Quem o lê, mora nele</p>
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