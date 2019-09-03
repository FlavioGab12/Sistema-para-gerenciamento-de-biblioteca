<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
	include("db.php");
	$aluno= $_POST['aluno'];
	$cpf= $_POST['cpf'];
	$email = $_POST['email'];
	$data = $_POST['data'];
	$telefone = $_POST['telefone'];
	$cep = $_POST['cep'];
	$endereco = $_POST['endereco'];
	$numero = $_POST['numero'];
	$bairro = $_POST['bairro'];
	$estado = $_POST['Estado'];
	$sql = mysqli_query($conexao,"insert into incluir_aluno (aluno, cpf, email, data, telefone, cep, endereco, numero, bairro, estado) value
	 ('$aluno','$cpf','$email','$data','$telefone','$cep','$endereco','$numero','$bairro','$estado')");
?>
<script type="text/javascript">
	location.href="sistema.php";
</script>