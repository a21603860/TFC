<?php
	include_once'db.class.php';
	
	
?>


<!DOCTYPE HTML>

<html lang="pt-pt">

	<head>

		<meta charset="UTF-8">

		<title>Inscrição</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<!-- Boostrapp -->
		<link rel="stylesheet" type="text/css" href="estilo.css">
		<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		
	
	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar fixed-top  navcor rcorners"> 
	        <a class="navbar-brand"><img src="imagens/logo.png" /></a>         
			<ul class="nav justify-content-end">
	        	<a type="button" class="btn" style="color: white;" href="index.php">Voltar para Home</a>
			</ul>	
	    </nav>


	    <div class="container">
	    	
	    	<br /><br />

			<div class="col-md-4"></div>
			
	    	<div class="col-md-4">

				<h3 class="monospace">Inscreva-se já.</h3>
				
				<br />
				
				<form method="POST" action="regista_utilizador.php" id="formCadastrarse">

					<div class="form-group">

						<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required="requiored">

					</div>

					<div class="form-group">

						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">

					</div>
					
					<div class="form-group">

						<input type="password" class="form-control" id="senha" name="senha" placeholder="Password" required="requiored">

					</div>

					<div class="form-group">						
						
						<input type="file" class="custom-file" id="img" name="img" required="requiored">						
					
					</div>
					<br>

					<div class="form-group row">

					<button type="submit" class="btn btn-primary form-control">Inscreva-se</button>

					</div>

				</form>

			</div>

			

		</div>


	    </div>
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>