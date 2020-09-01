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

		<title>Plataforma de Gestão de Requisitos</title>

	</head>

	<body class="" style="color: white;">

		<section id="barraNav">
			<nav class="navbar fixed-top  navcor rcorners">
			<a class="navbar-brand" href="index.html"><img src="imagens/logo.png "></a>
			<ul class="nav justify-content-end">
				<a type="button" class="btn" style= "color: white;" href="#Sobre">Sobre</a>
				<a type="button" class="btn" style= "color: white;" href="inscrevase.php">Inscrever-se </a>				
			</ul>
			</nav>
		</section>

		<div class="modal fade" id="janela" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"	aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header" style="background-color: #03989e; color: white;">
						<h5 class="modal-title" id="exampleModalLabel">Fazer Login</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<span aria-hidden="true">&times;</span>
						</button>
					</div>
        			<div class="modal-body">

					<form method="post" action="validar_acesso.php" id="formLogin">

						<div class="form-group ">
							<input type="text" class="form-control" id="campo_utilizador" name="utilizador" placeholder="Utilizador" />					
						</div>
					
						<div class="form-group">
							<input type="password" class="form-control red" id="campo_senha" name="senha" placeholder="Password" />					
						</div>
					
						<button  class="btn btn-primary" id="btn_login" name="login">Entrar</button>						
						<br></br>

					</form>
        		</div>
		
				<div class="modal-footer">
          			<button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          			<a href="opcoes_login.html"><button type="button" class="btn btn-capa">Entrar</button></a>
        		</div>
      		</div>
    	</div>
  </div>

	    <div class="container">	

	    	<div class="row" style="margin-top:10%; height: 100%;">
			  
		  		<div class="col-lg-7 font-texto"  >
			  
			  		<h3 style="color: black; font-size: 60px; font-weight: bold;  letter-spacing:-0.05en;">PLATAFORMA DE GESTÃO DE REQUISITOS</h3>
			  		<h3 style="color: black; ">Universidade Lusófona de Humanidades E Tecnologia</h3>
			  
			  		<button type="button" class="btn btn-custom btn-lg" data-toggle="modal"	data-target="#janela">Login</button>				
					
					<a href="https://www.ulusofona.pt">						
						<button type="button" class="btn btn-custom btn-lg">Saber Mais</button>
     			 	</a>
				</div>

				<div class="col-lg-1">

			</div>
			
			<div class="col-lg-4 order-1 order-lg-2 " data-aos="fade-left" data-aos-delay="200">
                <img src="imagens/hero-img.png" class="img-fluid animated" alt="">
            </div>
		
		  
	    </div>

		<br><br>
		<br><br>
		<br><br>
		
		<section id="Sobre" style="margin-top:10%" >
    		<div class="container">
      			<div class="row">
        			<h2 style="color: white; margin-left: 15px;">Sobre</h2>
      			</div>
      			<div class="row">
        			<div class="col-md-5">
						<p style="text-align: justify; color: white;">
							Porque é que o usamos?
							É um facto estabelecido de que um leitor é distraído pelo conteúdo legível de uma página quando
							analisa a sua mancha gráfica. Logo, o uso de Lorem Ipsum leva a uma distribuição mais ou menos
							normal de letras, ao contrário do uso de "Conteúdo aqui, conteúdo aqui", tornando-o texto
							legível. Muitas ferramentas de publicação electrónica e editores de páginas web usam actualmente
							o Lorem Ipsum como o modelo de texto usado por omissão, e uma pesquisa por "lorem ipsum" irá
							encontrar muitos websites ainda na sua infância. Várias versões têm evoluído ao longo dos anos,
							por vezes por acidente, por vezes propositadamente (como no caso do humor).
						</p>
        			</div>

        			<div class="col-md-6">

          				<p style="text-align: justify;  color: white;">
							Porque é que o usamos?
							É um facto estabelecido de que um leitor é distraído pelo conteúdo legível de uma página quando
							analisa a sua mancha gráfica. Logo, o uso de Lorem Ipsum leva a uma distribuição mais ou menos
							normal de letras, ao contrário do uso de "Conteúdo aqui, conteúdo aqui", tornando-o texto
							legível. Muitas ferramentas de publicação electrónica e editores de páginas web usam actualmente
							o Lorem Ipsum como o modelo de texto usado por omissão, e uma pesquisa por "lorem ipsum" irá
							encontrar muitos websites ainda na sua infância. Várias versões têm evoluído ao longo dos anos,
							por vezes por acidente, por vezes propositadamente (como no caso do humor).
						</p>

        			</div>
      			</div>

    		</div>

  		</section>
		
	</div>

	</div>
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
</body>
</html>