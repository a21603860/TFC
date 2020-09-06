<?php

  include_once'regista_equipa.php';
  include_once'connection.php';
    
	$conn = mysqli_connect($host, $usuario, $senha, $database);

	$sql = "SELECT * FROM  requisito";
					
  $result = $conn->query($sql);
   
	
?>


<!doctype html>

<html lang="pt-br" >

  <head>
    
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <!-- Boostrapp -->
    <link rel="stylesheet" type="text/css" href="estilo.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/5.4.1/css/all.css">

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

        
    <!-- <img src="imagens/logo.png"> -->

  
  <title>Projeto</title>
  
  <script type="text/javascript" src="https://gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);
      function drawChart(){
        var data = google.visualization.arrayToDataTable([
          ['Tipo', 'Prioridade'],
          <?php
          while ($row = mysqli_fetch_array($result)){
            echo "['".$row["tipo"]."', ".$row["prioridade"]."],";
          }
          ?>
        ]);
        var options = {
          title: 'Número de Requisitos e Prioridade'
          };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'))
        chart.draw(data, options)
        } 

  </script> 

  </head> 

  <body > 
    
    <nav class="navbar fixed-top  navcor rcorners">          
        <a class="navbar-brand" href="#"><img src="imagens/logo.png"></a>
        <ul class="av justify-content-end">
          <a type="button" class="btn" style="color: white;" href="projeto.php">HOME </a>
          <a type="button" class="btn" style="color: white;" href="avaliacao.php">AVALIAÇÃO</a>
        </ul>
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

      <a type="button" class=" btn btn-info gotopbtn" href="#dashboard" id="fixedbutton">Go  top</a>        

      <br></br>
        
        <div class="row">
            
            <div class="col-md-3 border border-dark">
            
                <br>    

                <div class="list-group ">
                <a href="#dashboard" class="cor3 list-group-item">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-grid-1x2-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path d="M0 1a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v14a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1V1zm9 0a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1V1zm0 9a1 1 0 0 1 1-1h5a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1h-5a1 1 0 0 1-1-1v-5z"/>
                </svg>  Dashboard
                </a>
                </div>

                <div class="dropdown list-group">          
                <a class="cor3 btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-folder-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M9.828 3h3.982a2 2 0 0 1 1.992 2.181l-.637 7A2 2 0 0 1 13.174 14H2.826a2 2 0 0 1-1.991-1.819l-.637-7a1.99 1.99 0 0 1 .342-1.31L.5 3a2 2 0 0 1 2-2h3.672a2 2 0 0 1 1.414.586l.828.828A2 2 0 0 0 9.828 3zm-8.322.12C1.72 3.042 1.95 3 2.19 3h5.396l-.707-.707A1 1 0 0 0 6.172 2H2.5a1 1 0 0 0-1 .981l.006.139z"/>
                  </svg> Projeto  
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                    <a class="dropdown-item" href="#projeto">Criar Projeto</a>
                    <a class="dropdown-item" href="#">Criar Requisitos</a>
                    <a class="dropdown-item" href="#tabelaprojetos">Verificar Projetos</a>
                  </div>
                </div>

                <div class="list-group">
                <a href="#definiçao" class="cor3 list-group-item ">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-gear-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 0 0-5.86 2.929 2.929 0 0 0 0 5.858z"/>
                </svg> Definições
                </a>
                </div>

                <div class="list-group">
                <a  href="#team" class="cor3 list-group-item ">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-people-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M7 14s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H7zm4-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5.784 6A2.238 2.238 0 0 1 5 13c0-1.355.68-2.75 1.936-3.72A6.325 6.325 0 0 0 5 9c-4 0-5 3-5 4s1 1 1 1h4.216zM4.5 8a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5z"/>
                </svg> Equipas
                </a>
                </div>

                <div class="list-group">
                <a  href="#team" class="cor3 list-group-item ">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-hourglass-split" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1h-11zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2h-7zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48V8.35zm1 0c0 .701.478 1.236 1.011 1.492A3.5 3.5 0 0 1 11.5 13s-.866-1.299-3-1.48V8.35z"/>
                </svg> Avaliação
                </a>
                </div>

            </div>

            <section class="col-md-8 border border-dark"  id="dashboard">

            <div id="piechart" style="width: 500px; height: 500px;">
               
            </div><br>
              
              <br>                       
            </section>

        </div>
        
        <br>
        <div class="row">
          
        <section class="col-lg-11 border border-dark" name="projeto" id="projeto">         

          <br>                
          <div class="card col-lg-12 espacobaixo">
            <div class="card-body">
              <h4 class="card-title">Criar Projeto</h4><br>

                <form method="POST" action="regista_projeto.php" id="formProjeto">

                  <div class="form-group col-md-5">
                    <label for="exampleInputName1">Nome Projeto</label>
                    <input type="text" id="nome" name="nome" class="form-control">
                  </div>
                  <div class="form-group col-md-5">
                    <label for="exampleInputName1">Tipo de Projeto</label>
                    <select class="form-control" id="" ></select>
                      <option></option>
                      <option></option>
                      <option></option>
                  </div>
                  <div class="form-group col-md-5">
                    <label for="exampleInputName1">Data Inicio</label>
                    <input type="date" id="datainicio" name="datainicio" class="form-control">
                  </div>
                  <div class="form-group col-md-5">
                    <label for="exampleInputName1">Data Fim</label>
                    <input type="date" id="datafim" class="form-control" name="datafim">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputName1">Custo</label>
                    <input type="number" id="custo" name="custo" class="form-control" >                                                
                  </div><br>
                  <button type="submit" class="btn btn-primary ">Criar Projeto</button>
                  <br></br>

                </form>
            </div>
          </div> 

          <br>            
          <table class="table border border-dark" id="tabelaprojetos">
            <thead class="thead-dark">
              <tr>
                <th scope="col">id</th>
                <th scope="col">Nome</th>
                <th scope="col">Data-Início</th>
                <th scope="col">Data-Fim</th>
                <th scope="col">Custo</th>                        
                <th scope="col">Ação</th>  
              </tr>
            </thead>
            <tbody>
              <tr>
                <?php
                
                  $conn = mysqli_connect($host, $usuario, $senha, $database);

                  $sql = "SELECT * FROM  projeto";
                        
                  $record = mysqli_query($conn, $sql);
                        
                  while ($row =mysqli_fetch_array($record)){

                    echo"<tr>";
                    echo"<td>".$row['id']."</td>";
                    echo"<td>".$row['nome']."</td>";
                    echo"<td>".$row['datainicio']."</td>";
                    echo"<td>".$row['datafim']."</td>";
                    echo"<td>".$row['custo']."</td>";
                    echo "<td><a href=apagar_projeto.php?id=".$row['id'].">Delete</a><a class='btn btn-primary badge badge-pill badge-primary' data-toggle='modal' data-target='#edit'>Edit</td>";
                          
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

                <div class="col-md-4 grid-margin stretch-card ">
                    <div class="card bg-dark text-white" >
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
                    </div><br>

                </div>
                

          </div>

        </section><br>

        <div class="row">

          <section class="col-lg-11 border border-dark" id="team">
            
            <br>
            <div class="text-right">
              <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#modalteam" >Criar Equipa</button>
            </div>
            <br>

            <div id="modalteam" class="modal fade " tabindex="-1" role="dialog" aria-labelledby="myExtraLargeModalLabel" aria-hidden="true">>
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title">Novo Equipa</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">

                    <form method="POST" action="regista_equipa.php" id="formEquipa">                                            
                      
                      <div class="form-group row espaco">
                        <label for="Input1" class="col-sm-2 col-form-label">nome</label>
                        <div class="col-sm-5">
                          <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome da equipa">                                
                        </div>
                      </div>

                      
                      <div class="form-group">
						            <input type="file" class="custom-file" id="img" name="img" required="requiored">	
					            </div>
                    

                      <button name="uploadfilesub" type="submit" class="btn btn-primary">Carregar</button>
                       <br></br>

                    </form>                                

                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                  </div>
                </div>
              </div>
              
              

            <form action="" method="post" enctype="multipart/form-data">
                <table class="table border border-dark">
                  <thead class="thead-dark">
                    <tr>
                      <th>Id</th>
                      <th>Nome</th>
                      <th>Img</th>
                      <th>Action</th>
                    </tr>
                  </thead>

                  <tbody>
                  
                  <?php
                
                $conn = mysqli_connect($host, $usuario, $senha, $database);

                  $sql = "SELECT * FROM  equipa";
                  
                  $record = mysqli_query($conn, $sql);
                  
                  while ($row =mysqli_fetch_array($record)){

                    echo"<tr>";
                    echo"<td>".$row['id']."</td>";
                    echo"<td>".$row['nome']."</td>";
                    echo"<td>".$row['img']."</td>";
                    echo "<td><a href=apagar_equipa.php?id=".$row['id'].">Delete</a><a class='btn btn-primary badge badge-pill badge-primary' data-toggle='modal' data-target='#edit'>Edit</td>";
                    
                  }                
                
                ?> 

                  </tbody>
                </table>
            </form>

            <div class="col-md-4 grid-margin stretch-card ">
                    <div class="card bg-dark text-white" >
                        <div class="card-body pb-0">

                            <div class="d-flex justify-content-between">
                                <h4 class="card-title mb-0">Total de Equipas</h4>
                            </div>
                            <h3 class="font-weight-medium">
                            
                              <?php
                              
                                $sql= "SELECT * FROM equipa";
                                $result = $conn->query($sql);
                                $total = $result->num_rows;
                                echo $total.'</b>';
                          
                              ?> 
                            
                            
                            </h3>
                        </div>
                        <canvas class="mt-n3" height="90" id="total-transaction"></canva>
                    </div><br>

                </div>

          </section>
            
        </div><br>
        
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




