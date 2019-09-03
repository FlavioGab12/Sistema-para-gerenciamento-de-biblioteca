<?php
	include("db.php");
	$editora= $_POST['editora'];
	$cidade= $_POST['cidade'];
	$cnpj = $_POST['cnpj'];
	$email = $_POST['email'];
	$sql = mysqli_query($conexao,"insert into editora(editora, cidade, cnpj, email) value ('$editora','$cidade','$cnpj','$email')");
?>
<script type="text/javascript">
	location.href="sistema.php";
</script>