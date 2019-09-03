<!doctype html>
<html>
<head>
	<title>Alterar Livro</title>
	<meta charset="UTF-8">
</head>
<body>
<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING); 
	include("db.php");
		$id = $_GET["id"];
		$titulo = $_POST["titulo"];
		$autor = $_POST["autor"];
		$editora= $_POST["editora"];
		$ano = $_POST["ano"];
		$genero = $_POST["genero"];
		$idade = $_POST["idade"];
		$alterar= mysqli_query($conexao,"delete from cadastro_livro where id_titulo = '$id'");
?>
<script language= "JavaScript">
	location.href="listar_livro.php";
</script>
</body>
</html>