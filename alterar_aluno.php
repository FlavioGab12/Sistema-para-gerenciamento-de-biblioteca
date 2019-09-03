<!doctype html>
<html>
<head>
	<title>Alterar aluno</title>
	<meta charset="UTF-8">
</head>
<body>

<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING); 
	include("db.php");
		$id = $_GET["id"];
		$aluno = $_POST["aluno"];
		$cpf = $_POST["cpf"];
		$email= $_POST["email"];
		$data = $_POST["data"];
		$telefone = $_POST["telefone"];
		$cep = $_POST["cep"];
		$endereco = $_POST["endereco"];
		$numero = $_POST["numero"];
		$bairro = $_POST["bairro"];
		$estado = $_POST["Estado"];
		$alterar= mysqli_query($conexao,"update incluir_aluno set aluno= '$aluno', cpf= '$cpf', email= '$email', data= '$data',
		telefone ='$telefone', cep= '$cep', endereco= '$endereco', numero= '$numero', bairro ='$bairro' where id_aluno = '$id'");
?>

<script language= "JavaScript">
	location.href="listar_aluno.php";
</script>
</body>
</html>