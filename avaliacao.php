<?php
	include_once'connection.php';
	
?>


<!doctype html>

<html lang="pt-br">

  <head>
    
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <!-- Boostrapp -->
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
  <title>Avaliação</title>

  </head> 

  <body class="" >
    
      <nav class="navbar fixed-top  navcor rcorners">          
        <a class="navbar-brand" href="#"><img src="imagens/logo.png"></a>
        <ul class="av justify-content-end">
          <a type="button" class="btn" style="color: white;" href="projeto.php">HOME </a>
          <a type="button" class="btn" style="color: white;" href="#">AVALIAÇÃO</a>
        </ul>
      </nav>
    
    <div class="container "> 

      <div class="page-header">

        <?php
        session_start();
        if(isset($_SESSION['User']))
        {
          echo ' Well Come ' . $_SESSION['User'].'<br/>';
          echo '<a href="index.php?logout">Logout</a>';
        }else{
            header("location:index.php");
        }
        ?>

        <h1 class="monospace">Avaliação</h1>

      </div>     

      <div class="row">
      
        <br><br>
        <br><br>
      
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" style="text-right">
          Adicionar requisito
        </button>

        
        <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                
              <form method="POST" action="regista_requisito.php" id="formRequisito">            
        
                <div class="form-group row espaco">

                  <label for="Input1" class="col-sm-2 col-form-label">nome</label>

                    <div class="col-sm-10">

                      <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome do Requisito">
              
                    </div>
                </div>

                <div class="form-group row espaco">

                  <label for="Input1" class="col-sm-2 col-form-label">custo</label>

                    <div class="col-sm-10">

                      <input type="number" class="form-control" id="custo" name="custo" placeholder="Insira o custo do Requisito">
              
                    </div>
                </div>

                <div class="form-group row espaco">

                  <label for="Input1" class="col-sm-2 col-form-label">datainicio</label>

                    <div class="col-sm-10">

                      <input type="date" class="form-control" id="datainicio" name="datainicio" >
              
                    </div>
                </div>

                <div class="form-group row">

                  <label for="ControlTextarea1" class="col-sm-2 col-form-label">descricao</label>

                    <div class="col-sm-7">

                      <textarea class="form-control" id="descricao" rows="3" name="descricao"></textarea>

                    </div>

                </div>

                <div class="form-group row">

                  <label for="Select1" class="col-sm-2 col-form-label">tipo</label>

                    <div class="col-sm-5">

                      <select class="form-control" id="tipo" name="tipo">

                        <option>Negócio</option>

                        <option>Funcional</option>

                        <option>Não Funcional</option>
                                  
                      </select>

                    </div>

                </div>

                <div class="form-group row">

                  <label for="Select1" class="col-sm-2 col-form-label">prioridade</label>

                    <div class="col-sm-5">

                      <select class="form-control" id="prioridade" name="prioridade">

                        <option>1</option>

                        <option>2</option>

                        <option>3</option>

                        <option>4</option>

                        <option>5</option>
                                  
                      </select>

                    </div>

                </div>

                <button type="submit" class="btn btn-primary ">Carregar</button>
                <br></br>
              </form>
              </div>


              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Understood</button>
              </div>
            </div>
          </div>
        </div>


        <div class="modal fade bd-example-modal-xl" id="edit" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">

			<div class="modal-dialog modal-xl" role="document">

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
						$row = $result-> fetch_assoc();
	
						
					?>
					
					<table>

						<tr>
						
							<th>id</th>
							<th>nome</th>
							<th>custo</th>
							<th>datainicio</th>
							<th>descricao</th>
							<th>tipo</th>
							<th>prioridade</th>
						
						</tr>

						<?php

						while ($row= $result-> fetch_assoc()){

							echo "<tr><form action='update.php' method=post>";
							
							echo "<tr><input type=text name=id value='".$row['id']."'></td>";
							echo "<tr><input type=text name=nome value='".$row['nome']."'></td>";
							echo "<tr><input type=text name=custo value='".$row['custo']."'></td>";
							echo "<tr><input type=text name=datainicio value='".$row['datainicio']."'></td>";
							echo "<tr><input type=text name=descricao value='".$row['descricao']."'></td>";
							echo "<tr><input type=text name=tipo value='".$row['tipo']."'></td>";
							echo "<tr><input type=text name=prioridade value='".$row['prioridade']."'></td>";
							echo "<td><input type=submit>";
							echo"</form></tr>";
						}

						?>

					</table>
				
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
          
          $record = mysqli_query($conn, $sql);
					
					while ($row =mysqli_fetch_array($record)){

            echo"<tr>";
            echo"<td>".$row['id']."</td>";
            echo"<td>".$row['prioridade']."</td>";
            echo"<td>".$row['custo']."</td>";
            echo"<td>".$row['nome']."</td>";
            echo"<td>".$row['descricao']."</td>";
            echo"<td>".$row['tipo']."</td>";
            echo "<td><a href=apagardadb.php?id=".$row['id'].">Delete</a></td>";
            
          }
				
				
				?>

				</div>
				
				<div class="modal-footer">
					
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					
					<button type="button" class="btn btn-primary">Save </button>
				
				</div>
				

				</div>
			
			</div>
		
		</div>

        <div class="col-lg-12 border border-dark" style="margin-top: 10px;">        			

          <table class="table table-dark table-hover table-bordered">

          <thead class="thead-dark">

            <tr>

              <th scope>ID</th>

              <th scope>Nome</th>

              <th scope>Custo</th>

              <th scope>Data Inicio</th>

              <th scope>Descrição</th>

              <th scope>Tipo</th>

              <th scope>Prioridade</th>

              <th scope>Ação</th>
              

            </tr>

          </thead>
          
          <?php

          $conn = mysqli_connect($host, $usuario, $senha, $database);

          $sql = "SELECT * FROM  requisito";

          $result = $conn->query($sql);



          if($result->num_rows > 0){

            while($row = $result-> fetch_assoc()){

              echo"<tr><td>". $row["id"]. "</td><td>". $row["nome"]. "</td><td>". $row["custo"]. "</td><td>". $row["datainicio"]. "</td><td>". $row["descricao"]. "</td><td>". $row["tipo"]. "</td><td>". $row["prioridade"]. "</td><td>". $row["acao"]. "<a class ='btn btn-primary badge badge-pill badge-primary' data-toggle='modal' data-target='#edit'>editar</a><a class ='btn btn-danger badge badge-pill badge-primary' data-toggle='modal' data-target='#delete'>apagar</a>";
            }
            
          }


          ?>

            

          </table>      

        </div>

        <div class="col-lg-12">
          <table class="table">
            <thead >
              <tr class="bg-primary">
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Custo</th>
                <th scope="col">Data Inicio</th>
                <th scope="col">Descricao</th>
                <th scope="col">Tipo</th>
                <th scope="col">Prioridade</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            
            <tbody>   
            <?php
                
                $conn = mysqli_connect($host, $usuario, $senha, $database);

                  $sql = "SELECT * FROM  requisito";
                  
                  $record = mysqli_query($conn, $sql);
                  
                  while ($row =mysqli_fetch_array($record)){

                    echo"<tr>";
                    echo"<td>".$row['id']."</td>";
                    echo"<td>".$row['nome']."</td>";
                    echo"<td>".$row['custo']."</td>";
                    echo"<td>".$row['datainicio']."</td>";
                    echo"<td>".$row['descricao']."</td>";
                    echo"<td>".$row['tipo']."</td>";
                    echo"<td>".$row['prioridade']."</td>";
                    echo "<td><a href=apagardadb.php?id=".$row['id'].">Delete</a><a class='btn btn-primary badge badge-pill badge-primary' data-toggle='modal' data-target='#edit'>Edit</td>";
                    
                  }                
                
                ?> 

          </tbody>
        </table>


        </div>

      </div>

    </div>

    
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    <br></br>
    

    <!-- Footer -->
<footer class="page-footer font-small mdb-color pt-4 cor">

<!-- Footer Links -->
<div class="container text-center text-md-left">

  <!-- Footer links -->
  <div class="row text-center text-md-left mt-3 pb-3">

    
    <!-- Grid column -->

    <hr class="w-100 clearfix d-md-none">

    
    <!-- Grid column -->

    <hr class="w-100 clearfix d-md-none">

    <!-- Grid column -->
    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
      <p>
        <a href="#!">Your Account</a>
      </p>
      <p>
        <a href="#!">Become an Affiliate</a>
      </p>     
      <p>
        <a href="#!">Help</a>
      </p>
    </div>

    <!-- Grid column -->
    <hr class="w-100 clearfix d-md-none">

    <!-- Grid column -->
    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
      <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
      <p>
        <i class="fas fa-home mr-3"></i> Lisboa PT</p>
      <p>
        <i class="fas fa-envelope mr-3"></i> clintonx2013@hotmail.com</p>
      <p>
        <i class="fas fa-phone mr-3"></i> +351 964 920 595</p>
      
    </div>
    <!-- Grid column -->

  </div>
  <!-- Footer links -->

  <hr>

  <!-- Grid row -->
  <div class="row d-flex align-items-center">

    <!-- Grid column -->
    <div class="col-md-7 col-lg-8">

      <!--Copyright-->
      <p class="text-center text-md-left">© 2020 Copyright</p>

    </div>
        
  </div>
  <!-- Grid row -->
</div>
<!-- Footer Links -->
</footer>
<!-- Footer -->
    
        
    
    
  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    



  </body>

</html>