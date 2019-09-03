<!doctype html>
<html>
<head>
	<title>Alterar Livro</title>
	<meta charset="UTF-8">
</head>
<body>
<?php
	include("db.php");
	error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING); 
		$id = $_GET["id"];
		$titulo = $_POST["titulo"];
		$autor = $_POST["autor"];
		$editora= $_POST["editora"];
		$ano = $_POST["ano"];
		$genero = $_POST["genero"];
		$idade = $_POST["idade"];
		$alterar= mysqli_query($conexao,"update cadastro_livro set titulo= '$titulo', autor= '$autor', editora= '$editora', ano= '$ano',
		genero ='$genero' where id_titulo = '$id'");
?>
<script language= "JavaScript">
	location.href="listar_livro.php";
</script>
</body>
</html>