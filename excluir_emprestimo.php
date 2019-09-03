<!doctype html>
<html>
<head>
	<title>Excluir empréstimo</title>
	<meta charset="UTF-8">
</head>
<body>
<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING); 
	include("db.php");
		$id = $_GET["id"];
		$livro = $_POST["livro"];
		$aluno = $_POST["aluno"];
		$dataEM= $_POST["dataEM"];
		$dataDEV = $_POST["dataDEV"];
		$alterar= mysqli_query($conexao,"delete from emprestimo where id_emprestimo = '$id'");
?>
<script language= "JavaScript">
	location.href="listar_emprestimo.php";
</script>
</body>
</html>