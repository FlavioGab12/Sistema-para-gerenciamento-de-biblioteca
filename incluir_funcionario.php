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
	<title>Incluir Funcionario</title>
	<meta charset='UTF-8'>
	<style type="text/css">
		body{
			background-image: url("imagens-fundo/FUNDO-DE-SITE.jpg" );
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
 	?>
<div class="container">	
	<form class='form' action="inc_funcionario.php" method="post">
	<div class="row">
		<div class="col-md-12" align="center">
			<h1 style="padding-top:50px;">Incluir Funcionário</h1>	
		</div>
	</div>
	<div class="row" style="padding-top:30px;">
		<div class="col-md-3" align='center'>
			Nome <input type='text' class='form-control' id='nome' name="nome" placeholder='Nome do Funcionario' required />
		</div>
		<div class="col-md-3" align='center'>
			CPF <input type='text' class='form-control' id='cpf' name="cpf" placeholder='CPF do Funcionario' required />
		</div>
		<div class="col-md-3" align='center'>
			E-mail <input type='text' class='form-control' id='email' name="email" placeholder='E-mail do Funcionário' required />
		</div>
		<div class="col-md-3" align='center'>
			Data <input type='date' class='form-control' id='data' name="data" placeholder='dd/mm/aaaa'/>
		</div>
	</div>

	<div class="row" style="padding-top:20px;">
		<div class="col-md-3" align='center'>
			Cargo <input type='text' class='form-control' id='cargo' name='cargo' placeholder='Cargo do Funcionário' required />	
		</div>
		<div class="col-md-3" align='center'>
			Telefone <input type='number' class='form-control' id='telefone' name="telefone" placeholder='Telefone do Funcionário'/>
		</div>
		<div class="col-md-3" align='center'>
			CEP <input type='number' class='form-control' id='cep' name='cep' placeholder='CEP do Funcionário' required/>
		</div>
		<div class="col-md-3" align='center'>
			Rua <input type='text' class='form-control' id='rua' name='rua' placeholder='Rua/Av' />
		</div>
	</div>

	<div class="row" style="padding-top:20px;">
		<div class="col-md-3" align="center">		
			Numero <input type='number' class='form-control' id='numero' name="numero" placeholder='Número da residencia'/>
		</div>
		<div class="col-md-3" align="center">
			Senha <input type='password' class='form-control' id='senha' name='senha' placeholder='Senha' required/>
		</div>
		<div class="col-md-3" align='center'>
			Bairro <input type='text' class='form-control' id='bairro'name="bairro" placeholder='Bairro'/>
		</div>
		<div class="col-md-3" align='center'>
			Estado <select name='estado' class='form-control'>
						<option value="AC">Acre</option>
						<option value="AL">Alagoas</option>
						<option value="AMAP">Amapa</option>
						<option value="AMAZ">Amazonas</option>
						<option value="BA">Bahia</option>
						<option value="CE">Ceará</option>
						<option value="DIS">Distrito Federal</option>
						<option value="ES">Espirito Santo</option>
						<option value="GO">Goias</option>
						<option value="MA">Maranhão</option>
						<option value="MTG">Mato Grosso</option>
						<option value="MTGS">Mato Grosso do Sul</option>
						<option value="MG" selected>Minas Gerais</option>
						<option value="PARA">Pará</option>
						<option value="PARAI">Paraíba</option>
						<option value="PARAN">Paraná</option>
						<option value="PE">Pernambuco</option>
						<option value="PI">Piauí</option>
						<option value="RJ">Ria de janeiro</option>
						<option value="RGS">Rio Grande do Sul</option>
						<option value="RON">Rondónia</option>
						<option value="ROR">Roraima</option>
						<option value="ST">Santa Catarina</option>
						<option value="SP">São Paulo</option>
						<option value="SE">Sergipe</option>
						<option value="TO">Tocantins</option>
					</select>
		</div>
	</div>
			
		<div class="row" style="padding-top:30px;">
			<div class="col-md-12" align='center'>
				<button "type="submit" class="form-group btn btn-primary" style="margin-top:20px";>Enviar</button>
			</div>
		</div>
		</form>
</div>	

	<footer class="footer-section">
     	<div class="container">
        	<div class="row" style="padding-top: 30px;">
          		<div class="col-md-6">
            		<p>Ler para ver o mundo além das aparências.</p>
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