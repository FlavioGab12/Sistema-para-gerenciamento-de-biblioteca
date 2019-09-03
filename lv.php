<?php
	include("db.php");
		$titulo= $_POST['titulo'];
		$autor= $_POST['autor'];
		$editora = $_POST['editora'];
		$ano = $_POST['ano'];
		$genero = $_POST['genero'];
		$sql = mysqli_query($conexao,"insert into cadastro_livro (titulo, autor, editora, ano, genero) value ('$titulo','$autor','$editora','$ano','$genero')");
?>
<script type="text/javascript">
	window.location.href = "sistema.php";
</script>