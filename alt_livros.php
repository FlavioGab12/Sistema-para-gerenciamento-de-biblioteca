<?php
    error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING);  
    session_start();
    $login=$_SESSION['login'];
	  $senha=$_SESSION['senha'];
 
    if($_SESSION['login'] == '' or $_SESSION['senha'] == ''){
?>

<script type="text/javascript">
    window.location.href = "index.php";
</script>

<?php	
    }		
?>
<!doctype html>
<html>
<head>
    <title>Pagina de cadastro de livro</title>
 	  <meta charset="utf-8">	
 	  <style type="text/css">
		    body{
			       background-image: url("imagens-fundo/FUNDO-DE-SITE.jpg");
			       background-repeat: no-repeat;
			       background-size: cover;
		    }
		    #foter{
 			      padding-bottom: 5%;
 			      width: 100%;
 			      border-radius: 20px 20px 20px 20px;
 		   }
 		   #final{
 			    background-position: center;
 			    height: -100px;
 		   }
	  </style>
</head>
<body>
 	<?php
 	    include("menu7.php");
 	    include("db.php");
 	?>

	<div class="container">
	<?php
	   $id= $_GET["id"];
	   $consulta= mysqli_query($conexao, "select * from cadastro_livro where id_titulo='$id'");
	   while ($exibe = mysqli_fetch_assoc($consulta)) {
		    $titulo = $exibe["titulo"];
				$autor = $exibe["autor"];
	 			$editora = $exibe["editora"];
	 			$ano = $exibe["ano"];
	 			$genero = $exibe["genero"];
	 			$idade = $exibe["idade"];
	 	  }
	?>

 	<form class="form" action="alterar_livro.php?id=<?php echo $id ?>" method="post">
 	    <div class="row">
 			    <div class="col-md-12" align="center">
 				     <h1 style="padding-top:50px;">Alterar dados do livro</h1>
 			    </div>
 		  </div>
 		  <div class="row" style="padding-top:30px;">
 			    <div class="col-md-3" align="center">
 	  			   Titulo <input type='text'class='form-control'  name='titulo' required value="<?php echo $titulo;?>"/>
 	  		  </div>
 	  		  <div class="col-md-6" align="center">
	  			    Autor <input type='text' class='form-control'  name='autor' required value="<?php echo $autor;?>"/>
	  		  </div>
	  		  <div class="col-md-3"align="center">
     			    Editora <input type='text' class='form-control'  name='editora' value="<?php echo $editora;?>"/>
     		  </div>
     	</div>
     	<div class="row" style="padding-top:20px;">
     	    <div class="col-md-6" align="center">
     			    Ano de lançamento <input type='date' class='form-control' name='ano' value="<?php echo $ano;?>"/>
     		  </div>
     			<div class="col-md-6" align="center">
 	 			      Gênero <input type="text" class='form-control' name="genero" value="<?php echo $genero;?>">
  	  		</div>
 	    </div>
 	    <div class="row" style="padding-top:30px;"> 
 	  	   <div class="col-md-12" align="center">
 	  		    <button type="submit"class="form-group btn btn-primary">Alterar</button>
         </div>
      </div>
 	</form>
 	</div>
 	<footer class="footer-section">
     	<div class="container">
     		<div class="row" style="padding-top: 30px;">
          		<div class="col-md-12">
            	   <p>Tanto o tempo para ler como o tempo para amar dilatam o tempo de viver.</p>
        	  	</div>
        </div>
        <div class="row pt-5 mt-5 text-center" id="foter">
        		<div class="col-md-12">
            		<div class="border-top pt-5">
            			<p id="final">
        					   Flávio Gabriel &copy;<script>document.write(new Date().getFullYear());</script> todos os direitos reservados <i class="icon-heart" aria-hidden="true"></i><a href="https://colorlib.com" target="_blank" ></a>
      					  </p>
            		</div>
         	 	</div>
       		</div>
      </div>
  </footer>
 </body>
 </html> 