<!doctype html>
<html>
<head>
	<title>Alterar gênero</title>
	<meta charset="UTF-8">
</head>
<body>
	<?php
		error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING); 
		include("db.php");
			$id = $_GET["id"];
			$genero= $_POST["genero"];
			$alterar= mysqli_query($conexao,"update genero set genero= '$genero' where id_genero = '$id'");
	?>
<script language= "JavaScript">
	location.href="listar_genero.php";
</script>
</body>
</html>