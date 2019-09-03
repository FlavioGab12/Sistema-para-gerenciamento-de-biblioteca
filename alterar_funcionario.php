<!doctype html>
<html>
<head>
	<title>Alterar Funcionario</title>
	<meta charset="UTF-8">
</head>
<body>
<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING); 
	include("db.php");
		$id = $_GET["id"];
		$nome = $_POST["nome"];
		$cpf = $_POST["cpf"];
		$email= $_POST["email"];
		$data = $_POST["data"];
		$cargo = $_POST["cargo"];
		$telefone = $_POST["telefone"];
		$cep = $_POST["cep"];
		$rua = $_POST["rua"];
		$numero = $_POST["numero"];
		$senha = $_POST["senha"];
		$bairro = $_POST["bairro"];
		$estado = $_POST["estado"];
		$alterar= mysqli_query($conexao,"update inc_funcionario set nome= '$nome', cpf= '$cpf', email= '$email', data= '$data',
		cargo ='$cargo', telefone ='$telefone', cep= '$cep', rua= '$rua', numero= '$numero', senha= '$senha', bairro ='$bairro', estado ='$estado' where id_funcionario = '$id'");
?>
<script language= "JavaScript">
	location.href="listar_funcionario.php";
</script>
</body>
</html>