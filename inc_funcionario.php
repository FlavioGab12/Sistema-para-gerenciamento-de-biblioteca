<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
	include("db.php");
		$nome = $_POST["nome"];
		$cpf = $_POST["cpf"];
		$email = $_POST["email"];
		$data = $_POST["data"];
		$cargo = $_POST["cargo"];
		$telefone = $_POST["telefone"];
		$cep = $_POST["cep"];
		$rua = $_POST["rua"];
		$numero = $_POST["numero"];
		$senha = $_POST["senha"];
		$bairro = $_POST["bairro"];
		$estado = $_POST["estado"];
		$sql = mysqli_query($conexao,"insert into inc_funcionario (nome, cpf, email, data, cargo, telefone, cep, rua, numero, senha, bairro, estado) value 
		('$nome','$cpf','$email','$data','$cargo','$telefone','$cep','$rua','$numero','$senha','$bairro','$estado')");
?>
<script type="text/javascript">
	location.href="sistema.php";
</script>