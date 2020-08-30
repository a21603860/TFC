<?php
    
    include_once'connection.php';
	include_once'index.php';
?>

<!DOCTYPE HTML>
<html lang="pt-pt">
	<head>

		<meta charset="UTF-8">		

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="X-UA-Compatible" content="ie=edge">
		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="estilo.css">
    	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	
		<script>
			// código javascript						
		</script>

		<title>Plataforma de Gestão de Requisitos</title>

	</head>

	<body class="imgfundo">
		
		<nav class="navbar navbar-default navbar-static-top rcorners marcador4 ">
		
	    <div class="container navbar-header ">

	        <div class="navbar-header">				
			
			<!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
			</button>-->
			  
	          <a class="navbar-brand " href="#">

			  	<img src="imagens/logo.png ">

			  </a>			 
			 
	        </div>
	        
	        <ul class="navbar-nav ml-auto">

	            <li class="nav-item">
					
					<a class="nav-link" href="inscrevase.php" >Inscrever-se</a>
				
				</li>
				
	            
	        </ul>
	        
		  </div>
		  
	    </nav>


	    <div class="container">

		<div class="row">

			<div class="col-sm-6">
			

				<div class="page-header">

					<h1 class="monospace">Plataforma de Gestão de Requisitos</h1>
					

				</div>

			</div>

			
		</div>

	    <!-- Main component for a primary marketing message or call to action -->
	    <div class="row ">
			  
		  	<div class="col-md-6  marcadorPaginaInicial imgright">
			  <br>
				<h2>Log In</h2>
					</br>

					
					<form method="post" action="validar_acesso.php" id="formLogin">

						<div class="form-group ">

							<input type="text" class="form-control" id="campo_utilizador" name="utilizador" placeholder="Utilizador" />
								
						</div>
								
						<div class="form-group">

							<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Password" />
								
						</div>
								
						<button  class="btn btn-primary" id="btn_login" name="login">Entrar</button>						
						<br></br>	

						<?php
						
						?>
						

					</form>
					
			</div>
			
			<div class="col-lg-4 order-1 order-lg-2 " data-aos="fade-left" data-aos-delay="200">
                <img src="imagens/hero-img.png" class="img-fluid animated" alt="">
            </div>
		
		  
	      </div>

		<div class="clearfix"></div>
		

		
		
	</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>