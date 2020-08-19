<?php
	include_once'connection.php';
	
	session_start();

?>


<!doctype html>

<html lang="pt-br">

<head>

    <!-- Required meta tags -->
	<meta charset="utf-8">
	
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
   
   <!-- Boostrapp -->
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">

	
	
	

	<title>Tabela Rquisitos</title>
	  
  </head>

  <body >

  

  	<nav class="navbar navbar-expand-lg cor rcorners ">
  		
  		<div class="container navbar-header">

			<div class="navbar-header ">

				<a class="navbar-brand" href="#">
					
					<img src="imagens/logo.png"> 

				</a>

			</div>			 

				<ul class="navbar-nav">

					<li class="nav-item">
						
						<a class="nav-link" href="#">HOME</a>

					</li>
						
					<li class="nav-item">
						
						<a class="nav-link" href="#">PERFIL</a>
					
					</li>
						
					<li class="nav-item">
						
						<a class="nav-link" href="#">AVALIAÇÕES</a>
					
					</li>
						
				</ul>		

		</div>
		  
  	</nav>


	

		
		<!-- ADD Modal -->
		<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

			<div class="modal-dialog" role="document">

				<div class="modal-content">

					<div class="modal-header">
						
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>

						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					
						<span aria-hidden="true">&times;</span>
					
						</button>
				
					</div>
				
				<div class="modal-body">

					<form>
						<div class="form-group">							
							
							<input type="text" class="form-control" id="" placeholder="Nome">							

						</div>

						<div class="form-group">							
							
							<input type="text" class="form-control" id="" placeholder="Descrição">							

						</div>

						<div class="form-group">							
							
							<input type="text" class="form-control" id="" placeholder="Tipo">							

						</div>

						<div class="form-group">							
							
							<input type="number" class="form-control" id="" placeholder="Prioridade">							

						</div>
											
					</form>


					
				
				</div>
				
				<div class="modal-footer">
					
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					
					<button type="button" class="btn btn-primary">Save changes</button>
				
				</div>
				
				</div>
			
			</div>
		
		</div>

		<!-- edit Modal -->
		<div class="modal fade" id="edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

			<div class="modal-dialog" role="document">

				<div class="modal-content">

					<div class="modal-header">
						
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>

						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					
						<span aria-hidden="true">&times;</span>
					
						</button>
				
					</div>
				
				<div class="modal-body">

					<form>
						<div class="form-group">							
							
							<input type="text" class="form-control" id="" placeholder="Nome">							

						</div>

						<div class="form-group">							
							
							<input type="text" class="form-control" id="" placeholder="Descriçãoo">							

						</div>

						<div class="form-group">							
							
							<input type="text" class="form-control" id="" placeholder="Tipo">							

						</div>

						<div class="form-group">							
							
							<input type="number" class="form-control" id="" placeholder="Prioridade">							

						</div>
											
					</form>


					
				
				</div>
				
				<div class="modal-footer">
					
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					
					<button type="button" class="btn btn-primary">Save changes</button>
				
				</div>
				
				</div>
			
			</div>
		
		</div>


		<!-- delete Modal -->
		<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

			<div class="modal-dialog" role="document">

				<div class="modal-content">

					<div class="modal-header">
						
						<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>

						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					
						<span aria-hidden="true">&times;</span>
					
						</button>
				
					</div>
				
				<div class="modal-body">

				<?php
				
				$conn = mysqli_connect($host, $usuario, $senha, $database);

					$sql = "SELECT * FROM  requisito";
					
					$result = $conn->query($sql);

					

					if($result->num_rows > 0){

						while($row = $result-> fetch_assoc()){

							echo "<a  href='apagar_utilizador.php?id=" .$row['id']."'>Apagar</a><br><hr>";
						}
						
					}
				
				
				
				?>

				</div>
				
				<div class="modal-footer">
					
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					
					<button type="button" class="btn btn-primary">Save che</button>
				
				</div>
				

				</div>
			
			</div>
		
		</div>
		 
  	
  	<div class="container ">

  		<div class="page-header">

			<h1 class="monospace">Requisitos</h1>
			  
		</div>

		

		<div class="row">
			
			<div class="col-md-10 text-right">
				
				<bottom class="btn btn-success badge-pill" data-toggle="modal" data-target="#add"> ADD </batton>				
				
			</div>

		</div>			  	
		<br>

		
	  		<div class="container col-md-12 marcador1">

			

	  			<table class="table table-dark table-hover table-bordered">

					<thead class="thead-dark">

						<tr>

							<th scope>id</th>

							<th scope>nome</th>

							<th scope>custo</th>

							<th scope>datainicio</th>

							<th scope>descricao</th>

							<th scope>tipo</th>

							<th scope>prioridade</th>

							<th scope>acao</th>
							

						</tr>

					 </thead>
					 
				<?php

					$conn = mysqli_connect($host, $usuario, $senha, $database);

					$sql = "SELECT * FROM  requisito";
					
					$result = $conn->query($sql);

					

					if($result->num_rows > 0){

						while($row = $result-> fetch_assoc()){

							echo"<tr><td>". $row["id"]. "</td><td>". $row["nome"]. "</td><td>". $row["custo"]. "</td><td>". $row["datainicio"]. "</td><td>". $row["descricao"]. "</td><td>". $row["tipo"]. "</td><td>". $row["prioridade"]. "</td><td>". $row["acao"]. "<button class ='btn btn-primary badge badge-pill badge-primary' data-toggle='modal' data-target='#edit'>editar</button><button class ='btn btn-danger badge badge-pill badge-primary' data-toggle='modal' data-target='#delete'>apagar</button>";
						}
						
					}
					
				
				?>

						
				
			</table>

	  		</div>

	  		<div class="col-md-12 marcador2">

			  <table class="table table-dark table-hover table-bordered">

				<thead class="thead-dark">

					<tr>

						<th scope>id</th>

						<th scope>nome</th>
						
						<th scope>email</th>

						<th scope>funcao</th>

						<th scope>#</th>
						

					</tr>

				</thead>
				
				<?php

				$conn = mysqli_connect($host, $usuario, $senha, $database);
				
				


				$sql = "SELECT * FROM   utilizador";

				$result = $conn->query($sql);

				

				if($result->num_rows > 0){

					while($row = $result-> fetch_assoc()){

						echo"<tr><td>". $row["id"]. "</td><td>". $row["nome"]. "</td><td>". $row["email"]. "</td><td>". $row["funcao"]. "</td><td>";
					}
					
				}				


				?>			

				</table>
				  
			</div>

			<div class="col-md-12 marcador2">				

			
			</div>


			<div class="col-md-12 marcador2">


				

				<script type="text/javascript">
					window.onload = function () {

					var chart = new CanvasJS.Chart("chartContainer", {
						theme: "light1", // "light2", "dark1", "dark2"
						animationEnabled: false, // change to true		
						title:{
							text: "Basic Column Chart"
						},
						data: [
						{
							// Change type to "bar", "area", "spline", "pie",etc.
							type: "column",
							dataPoints: [
								{ label: "apple",  y: 10  },
								{ label: "orange", y: 15  },
								{ label: "banana", y: 25  },
								{ label: "mango",  y: 30  },
								{ label: "grape",  y: 28  }
							]
						}
						]
					});
					chart.render();

					}
				</script>

			<div id="chartContainer" style="height: 370px; width: 100%;"></div>
			<script src="https://canvasjs.com/assets/script/canvasjs.min.js"> </script>		  			
	  	
 	 		</div>

    
  </body>
</html>