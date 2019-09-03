<?php
	error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);
	include("db.php");
	$dataem = $_POST['dataEM'];
	$datadev = $_POST['dataDEV'];
	if ($datadev > $dataem) {
		$livro= $_POST['livro'];
		$aluno= $_POST['aluno'];
		$dataEM = $_POST['dataEM'];
		$dataDEV = $_POST['dataDEV'];
		$sql = mysqli_query($conexao,"insert into emprestimo (livro, aluno, dataEM, dataDEV) value ('$livro','$aluno','$dataEM','$dataDEV')");
		header("location: sistema.php");
	}else{
		header("location: sistema.php");
	}
?>



