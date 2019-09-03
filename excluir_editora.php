<!doctype html>
<html>
<head>
	<title>Excluir editora</title>
	<meta charset="UTF-9">
</head>
<body>
<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING); 
	include("db.php");
		$id = $_GET["id"];
		$editora = $_POST["editora"];
		$cidade = $_POST["cidade"];
		$cnpj= $_POST["cnpj"];
		$email = $_POST["email"];
		$alterar= mysqli_query($conexao,"delete from editora 	where id_editora = '$id'");
?>
<script language= "JavaScript">
	location.href="listar_editora.php";
</script>
</body>
</html>