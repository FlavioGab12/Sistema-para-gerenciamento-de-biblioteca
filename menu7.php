<?php 
session_start();
	$_SESSION['login']= $login;
 	$_SESSION['senha']= $senha;

?>

  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
  <meta charset="utf-8">
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark navbar-hidden-lg">
        <a class="navbar-brand" href="sistema.php"><img width="35" height="35" src="imagens-fundo/home-2741413_960_720.png"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
            <ul class="navbar-nav mr-auto">
               <li class="nav-item dropdown">
        				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          				Listas
        				</a>
        				<div class="dropdown-menu" aria-labelledby="navbarDropdown">
          				<a class="dropdown-item" href="listar_aluno.php">Lista de Alunos</a>
          				<div class="dropdown-divider"></div>
          				<a class="dropdown-item" href="listar_funcionario.php">Lista de Funcionarios</a>
          				<div class="dropdown-divider"></div>
          				<a class="dropdown-item" href="listar_livro.php">Lista de Livros</a>
          				<div class="dropdown-divider"></div>
          				<a class="dropdown-item" href="listar_editora.php">Lista de Editoras</a>
          				<div class="dropdown-divider"></div>
          				<a class="dropdown-item" href="listar_genero.php">Lista de Gêneros</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="listar_emprestimo.php">Lista de Empréstimos</a>
        				</div>
      			   </li>
				    </ul>
				  <ul class="navbar-nav">
			  		<li class="nav-item active">
          			 <a class="nav-link" href="inc_aluno.php">Cadastrar Aluno</a>         			 
			  		</li>
			  		<li class="nav-item active">
          			 <a class="nav-link" href="incluir_funcionario.php">Cadastrar Funcionário</a>         			 
			  		</li>
			  		<li class="nav-item active">
          			 <a class="nav-link" href="inc_livros.php">Cadastrar Livro</a>         			 
			  		</li>
			  		<li class="nav-item active">
          			 <a class="nav-link" href="inc_editora.php">Cadastrar Editora</a>         			 
			  		</li>
			  		<li class="nav-item active">
          			 <a class="nav-link" href="inc_genero.php">Cadastrar Gênero</a>         			 
			  		</li>
			 	  </ul>
			 	  <ul class="navbar-nav">
			 	  	<li class="nav-item active">
			  			<a class="nav-link" href="matar_sessao.php"><img width="35" height="35" src="imagens-fundo/botao-sair (1).png"></a>
			  		</li>
			 	  </ul>
  </nav>
<script src="js/jquery-3.3.1.slim.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>