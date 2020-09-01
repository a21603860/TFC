<?php
    include_once'connection.php';
    
	$conn = mysqli_connect($host, $usuario, $senha, $database);

	$sql = "SELECT * FROM  requisito";
					
  $result = $conn->query($sql);
   
	
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

        
    <!-- <img src="imagens/logo.png"> -->

  
  <title>Projeto</title>

  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    

  </head> 

  <body >
    
  <nav class="navbar navbar-expand-lg cor rcorners ">    
    
    <div class="container navbar-header" id="navbarNav">

      <div class="navbar-header ">

				<a class="navbar-brand" href="projeto.php">
					
					<img src="imagens/logo.png"> 

				</a>

			</div>

      <ul class=" navbar-nav ml-auto">

        
        <li class="nav-item">

          <a class="nav-link" href="projeto.php">PERFIL</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="avaliacao.php">AVALAIÇÃO</a>

        </li>

      
      </ul>

    </div>

  </nav>
    
    <div class="container "> 

      <div class="page-header">

      <?php
        session_start();
        if(isset($_SESSION['User']))
        {
          echo ' Bem Vindo ' . $_SESSION['User'].'<br/>';
          echo '<a href="index.php?logout">Logout</a>';
        }else{
            header("location:index.php");
        }
        ?>

        <h1 class="monospace">Projeto</h1>

      </div> 

      <div class="card">
        
        <div class="card-body">
            This is some text within a card body.
        </div>

      </div>
      <br></br>

        <div class="row">

            
            <div class="col-md-3 border border-dark">
            
                <br>

                <div class="list-group">
                <a href="#dashboard" class="cor3 list-group-item">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-grid-1x2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-5z"/>
                </svg>  Dashboard
                </a>
                </div>

                <div class="list-group">          
                <a href="#projeto" class="cor3 list-group-item ">        
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                </svg> Projeto  
                </a>
                </div>

                <div class="list-group">
                <a href="#definiçao" class="cor3 list-group-item ">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
                </svg> Definições
                </a>
                </div>

                <div class="list-group">
                <a id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false" class="cor3 list-group-item ">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                </svg> Equipas
                </a>
                </div>

            </div>

            <div class="col-md-8 border border-dark">

                

                
                
                <table class="table border border-dark ">

                <thead class="thead-dark">

                  <tr>

                    <th scope>id</th>

                    <th scope>nome</th>
                    
                    <th scope>email</th>

                    <th scope>funcao</th>
                    

                  </tr>

                </thead>
                
                <?php

                  $conn = mysqli_connect($host, $usuario, $senha, $database);

                  $sql = "SELECT * FROM   utilizador";

                  $result = $conn->query($sql);

                  if($result->num_rows > 0){

                    while($row = $result-> fetch_assoc()){

                      echo"<tr><td>". $row["id"]. "</td><td>". $row["nome"]. "</td><td>". $row["email"]. "</td><td>". $row["funcao"];
                    }
                    
                  }				


                ?>			

                </table><br>

                       
            </div>

        </div>
        
        <br>
        <div class="row">
          
          <div class="col-lg-11 border border-dark" name="projeto" id="projeto">

          <div id="modal" class="modal fade bd-example-modal-xl" tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">>
                    <div class="modal-dialog modal-xl" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title">Novo Projeto</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">

                                <form method="POST" action="regista_projeto.php" id="formProjeto">            
            
                                    
                                            
                                    <div class="form-group row espaco">

                                        <label for="Input1" class="col-sm-2 col-form-label">nome</label>

                                            <div class="col-sm-4">

                                                <input type="text" class="form-control" id="nomeproject" name="nomeproject" placeholder="Insira o nome do Requisito">
                                
                                            </div>
                                    </div>

                                    <div class="form-group row espaco">

                                        <label for="Input1" class="col-sm-2 col-form-label">custo</label>

                                            <div class="col-sm-3">

                                                <input type="number" class="form-control" id="custo" name="custo" placeholder="Insira o custo do Requisito">
                                
                                            </div>
                                    </div>

                                    <div class="form-group row espaco">

                                        <label for="Input1" class="col-sm-2 col-form-label">datainicio</label>

                                            <div class="col-sm-3">

                                                <input type="date" class="form-control" id="datainicio" name="datainicio" >
                                
                                            </div>
                                    </div>

                                    <div class="form-group row espaco">

                                        <label for="Input1" class="col-sm-2 col-form-label">datafinal</label>

                                            <div class="col-sm-3">

                                                <input type="date" class="form-control" id="datafim" name="datafim" >
                                
                                            </div>
                                    </div>

                                    <button type="submit" class="btn btn-primary ">Carregar</button>
                                    <br></br>

                                </form>                                

                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                
                            </div>
                        </div>
                    </div>
                </div>

                <br>
            
                <table class="table border border-dark">
                    <thead class="thead-dark">
                        <tr>
                        <th scope="col">id</th>
                        <th scope="col">NOME</th>
                        <th scope="col">CUSTO</th>
                        <th scope="col">DATA-INICIO</th>
                        <th scope="col">DATA-FIM</th>
                        

                        </tr>
                    </thead>
                    <tbody>
                        <tr>

                           <?php

                            $conn = mysqli_connect($host, $usuario, $senha, $database);

                            $sql = "SELECT * FROM  projeto";
                            
                            $result = $conn->query($sql);                            

                            if($result->num_rows > 0){

                              while($row = $result-> fetch_assoc()){

                                echo"<tr><td>". $row["idproject"]. "</td><td>". $row["nomeproject"]. "</td><td>". $row["custo"]. "</td><td>".  $row["datainicio"]. "</td><td>". $row["datafim"];
                              }
                              
                            }
                            
                          
                          ?> 
                            

                        </tr>
                        
                    </tbody>                    
                    
                </table>

                <br>

                <div class="text-right">
                  <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modal" >Criar Projeto</button>
                </div>

                <br>

                <div class="col-md-6 grid-margin stretch-card ">
                    <div class="card">
                        <div class="card-body pb-0">
                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mb-0">Total de Projectos</h4>
                            </div>
                            <h3 class="font-weight-medium">
                            
                              <?php
                              
                                $sql= "SELECT * FROM projeto";
                                $result = $conn->query($sql);
                                $total = $result->num_rows;
                                echo $total.'</b>';
                          
                              ?> 
                            
                            
                            </h3>
                        </div>
                        <canvas class="mt-n3" height="90" id="total-transaction"></canva>
                    </div>
                </div>

                <div class="col-md-6 grid-margin stretch-card ">
                    <div class="card">
                        <div class="card-body pb-0">

                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mb-0">Total de Requisitos</h4>
                            </div>

                            <h3 class="font-weight-medium mb-4">
                            
                            <?php
                            
                              
                              
                              $sql= "SELECT * FROM requisito";
                              $result = $conn->query($sql);
                              $total = $result->num_rows; 

                              echo $total.'</b>';
                            
                            ?>                           
                            
                            </h3>
                        </div>

                        <canvas class="mt-n4" height="90" id="total-revenue"></canva>
                        
                     </div>
                     <br>
                </div>

          </div>

        </div>

        <br>
        <div class="row">

          <div class="col-lg-11 border border-dark">

              <div class="col-lg-10 border border-dark margemleft">
                          
              <div class="col-md-3 marcador1">
          
          <div class="card border border-dark" style="width: 22rem;">

            <div class="card-body" href="#">

              <h3 class="card-title ">

              <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-folder-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
              </svg>
            
              </h3>
            
              <h2><p class="card-text monospace">Projeto</p></h2>
            
            </div>

          </div>

        </div>        

        <div class="col-md-3 marcador1">
          
          <div class="card border border-dark" style="width: 22rem;">

            <div class="card-body" href="#">

              <h3 class="card-title ">

              <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-gear-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
              </svg>
            
              </h3>
            
              <h2><p class="card-text monospace">Definições</p></h2>
            
            </div>

          </div>

        </div>

        <div class="col-md-3 marcador1">
          
          <div class="card border border-dark" style="width: 22rem;">

            <div class="card-body" href="#">

              <h3 class="card-title ">

              <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
              </svg>
            
              </h3>
            
              <h2><p class="card-text monospace">Equipa</p></h2>
            
            </div>

          </div>

        </div>
                                    
              
              </div>

          </div>

        </div>

        <br>
        <div class="row">

          <div class="col-lg-11 border border-dark" id="team" name="team">
          <?php
          $query = " SELECT * FROM utilizador";
          $stmt = $conn->prepare($query);
          $stmt->execute();
          $result = $stmt->get_result();
          ?>
          <form action="" method="post" enctype="multipart/form-data">
              <table class="table table-dark table-hover table-bordered">
                <thead class="thead-dark">
                  <tr>
                    <th>img</th>
                    <th>id</th>
                    <th>nome</th>
                    <th>funcao</th>
                    <th>action</th>
                  </tr>
                </thead>
                <tbody>
                
                  <?php  while ($row = $result->fetch_assoc()) { ?>
                    
                    <tr>
                      <td><img src="<?= $row['img']; ?>" width="30"></td>
                      <td><?= $row['id']; ?></td>
                      <td><?= $row['nome']; ?></td>
                      <td><?= $row['funcao']; ?></td>
                      <td>
                        <a href="#" class="badge badge-primary p-2"> Delete</a>
                      </td>
                    </tr>

                  <?php } ?>

                </tbody>
              </table>


          </form>

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




