<?php
	include ("db.php");
	$genero= $_POST["genero"];
	$sql = mysqli_query($conexao,"insert into genero (genero) value ('$genero')");
?>
<script type="text/javascript">
	location.href="sistema.php";
</script>