<?php
	$conexao = mysqli_connect("localhost","root","","biblioteca");

	if(!$conexao){
		die("Falha na conexao: " . mysqli_connect_error());
	}else{
		//echo "Conexao realizada com sucesso";
	}	
?>