<?php

  include_once'regista_equipa.php';
  include_once'connection.php';
  session_start();
  
    
	$conn = mysqli_connect($host, $usuario, $senha, $database);

	$sql = "SELECT tipo, count(*) as number from requisito group by prioridade" ;
					
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
          ['tipo', 'Prioridade'],
          <?php
          $sql = "SELECT * FROM requisito";
          $fire = mysqli_query($con ,$sql);
          while ($result = mysqli_fetch_array($fire)){
            echo "['".$result["tipo"]."', ".$result["prioridade"]."],";
          }
          ?>
        ]);
        var options = {
          title: 'Número de Requisitos e Prioridade'
          };
        var chart = new google.visualization.PieChart(document.getElementById('piechart'));
        chart.draw(data, options);
        } 

  </script> 

  </head> 

  <body > 
    
    <nav class="navbar fixed-top  navcor rcorners">          
        <a class="navbar-brand" href="#"><img src="imagens/logo.png"></a>
        <ul class="av justify-content-end">
          <a type="button" class="btn" style="color: white;" href="projetoco.php" disabled=true>HOME </a>
        </ul>
      </nav>
    
    <div class="container "> 

      <div class="page-header">

      <?php
        if(isset($_SESSION['User']))
        {
          echo ' Bem Vindo ' . $_SESSION['User'].'<br/>';
          echo '<a href="index.php?logout">Logout</a>';
        }else{
            header("location:index.php");
        }
        ?>

        <h1 class="monospace">Home</h1>

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
                <a class="text-dark cor3 btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                <a  href="#avaliacao" class="cor3 list-group-item ">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-clipboard-data" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                  <path fill-rule="evenodd" d="M4 1.5H3a2 2 0 0 0-2 2V14a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V3.5a2 2 0 0 0-2-2h-1v1h1a1 1 0 0 1 1 1V14a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1V3.5a1 1 0 0 1 1-1h1v-1z"/>
                  <path fill-rule="evenodd" d="M9.5 1h-3a.5.5 0 0 0-.5.5v1a.5.5 0 0 0 .5.5h3a.5.5 0 0 0 .5-.5v-1a.5.5 0 0 0-.5-.5zm-3-1A1.5 1.5 0 0 0 5 1.5v1A1.5 1.5 0 0 0 6.5 4h3A1.5 1.5 0 0 0 11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3z"/>
                  <path d="M4 11a1 1 0 1 1 2 0v1a1 1 0 1 1-2 0v-1zm6-4a1 1 0 1 1 2 0v5a1 1 0 1 1-2 0V7zM7 9a1 1 0 0 1 2 0v3a1 1 0 1 1-2 0V9z"/>
                </svg> Requisitos
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
        
        <div class="modal fade" id="modalrequisito" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Criar Requisito</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">                
              <form method="POST" action="regista_requisito_id.php" id="formRequisito">  
                
                <div class="form-group row espaco">                
                  <label for="Input1" class="col-sm-2 col-form-label">Nome</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome do Requisito">              
                  </div>
                </div>

                <div class="form-group row espaco">
                  <label for="Input1" class="col-sm-2 col-form-label">Custo</label>
                  <div class="col-sm-10">
                    <input type="number" class="form-control" id="custo" name="custo" placeholder="Insira o custo do Requisito">              
                  </div>
                </div>

                <div class="form-group row espaco">
                  <label for="Input1" class="col-sm-2 col-form-label">Data Início</label>
                  <div class="col-sm-10">
                    <input type="date" class="form-control" id="datainicio" name="datainicio" >              
                  </div>
                </div>

                <div class="form-group row">
                  <label for="ControlTextarea1" class="col-sm-2 col-form-label">Descricao</label>
                  <div class="col-sm-7">
                    <textarea class="form-control" id="descricao" rows="3" name="descricao"></textarea>
                  </div>
                </div>

                <div class="form-group row">
                  <label for="Select1" class="col-sm-2 col-form-label">Tipo</label>
                    <div class="col-sm-5">
                      <select class="form-control" id="tipo" name="tipo">
                        <option>Negócio</option>
                        <option>Funcional</option>
                        <option>Não Funcional</option>                                  
                      </select>
                    </div>
                </div>

                <div class="form-group row">
                  <label for="Select1" class="col-sm-2 col-form-label">Prioridade</label>
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
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>                
                </div>
              </div>
            </div>
          </div>        

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
                    <label for="exampleInputName1">Data Inicio</label>
                    <input type="date" id="datainicio" name="datainicio" class="form-control">
                  </div>
                  <div class="form-group col-md-5">
                    <label for="exampleInputName1">Data Fim</label>
                    <input type="date" id="datafim" class="form-control" name="datafim">
                  </div>
                  <div class="form-group col-md-5">
                    <label for="exampleInputName1">Criado Por</label>
                    <input type="text" id="criadopor" class="form-control" name="criadopor" value="<?php echo $_SESSION['User']; ?>" disabled="true">
                  </div>
                  <div class="form-group col-md-4">
                    <label for="exampleInputName1">Custo</label>
                    <input type="number" id="custo" name="custo" class="form-control" >                                                
                  </div><br>
                  <button type="submit" class="btn btn-primary ">Criar Projeto</button>
                  <br></br>

                </form>
            </div>
          </div><br> 

          <div class="text-right text-primary" style="font-weight: bold">
          Ativo = 0  Projeto encontra-se apagado(indisponivel para alterações)<p>
          Ativo = 1  Projeto encontra-se ativo(disponivel para alterações)
          </div>

          <br>            
          <table class="table border border-dark" id="tabelaprojetos">
            <thead class="thead-dark">
              <tr>
                <th scope="col">id</th>
                <th scope="col">Criado Por</th>
                <th scope="col">Nome</th>
                <th scope="col">Data-Início</th>
                <th scope="col">Data-Fim</th>                
                <th scope="col">Ativo</th>
                <th scope="col">Custo</th>                        
                <th scope="col">Ação</th>  
              </tr>
            </thead>
            <tbody>
              <tr>

                
                <script>
                  function myFunction() {
                    confirm("Press a button!");
                  }
                </script>

                <?php

                
                
                  $conn = mysqli_connect($host, $usuario, $senha, $database);
                  

                  $sql = "SELECT * FROM  projeto ";
                  
                  
                  //CRIAR UMA COLUNA QUE DIZ Q O PROJETO TA ATIVO//ALTER TABLE projecto ADD COLUMN activo BIT;UPDATE projeto SET ACTIVO = 1
                  //Para N apagar PROJETO, DESETIVA: tiras DELETE UPDATE projeto SET activo = 0 WHERE id = '$_GET[id]'
                  //ALTER TABLE projecto ADD COLUMN activo BIT DEFAULT 1;
                  
                  //CRIA A FOREIGN KEY DE REQUITITO PARA PROJETO//ALTER TABLE requisito ADD CONSTRAINT fj_requisito_projecto FOREIGN KEY [requisito].[projecto] REFERENCES [projeto].[id]
                  //ATRIBUI OS REQUISITOS A UM PROJETO EXISTENTE//UPDATE requisito SET projecto = ?
                  //VERIFICA SE O PROJETO TEM REQUISITOS //SELECT COUNT(ID) FROM requisito WHERE projeto = '$_GET[id]'
                  
                  //EX
                  //$reqs = mysqli_query($conn,$sql)
                  //$sql = "SELECT COUNT(ID) FROM requisito WHERE projeto = '$_GET[id]'"
                  //if @reqs >0 then {"projecto tem requistos, não pode ser apagado"} else UPDATE...echo "ALERT()"

                  //VERIDICAR REQUISITOS DO PROJETO
                  //SELECT * FROM requisito WHERE projeto = '$_GET[id]'



                        
                  $record = mysqli_query($conn, $sql);


                        
                  while ($row =mysqli_fetch_array($record)){
                    

                    echo"<tr>";
                    echo"<td>".$row['id']."</td>";
                    echo"<td>".$row['criadopor']."</td>";
                    echo"<td>".$row['nome']."</td>";
                    echo"<td>".$row['datainicio']."</td>";
                    echo"<td>".$row['datafim']."</td>";                    
                    echo"<td>".$row['activo']."</td>";
                    echo"<td>".$row['custo']."</td>";
                    echo "<td><a onclick='myFunction()' class='btn btn-primary badge badge-pill badge-danger' href=apagar_projeto.php?id=".$row['id'].">Apagar</a>
                    <a class='btn btn-primary badge badge-pill badge-primary' href=editar_projeto.php?id=".$row['id']." >Editar</td>";
                          
                    }                
                      
                ?> 
                                  

              </tr>                        
            </tbody>                    
          </table>
          <br>
         

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
          <section id="avaliacao" class="col-lg-11 border border-dark"><br>

          <table class="table border border-dark">
            <thead class="cor2 text-white">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Custo</th>
                <th scope="col">Data Inicio</th>
                <th scope="col">Descricao</th>
                <th scope="col">Tipo</th>
                <th scope="col">Prioridade</th>
                <th scope="col">Estado</th>
                <th scope="col">voto</th>
              </tr>
            </thead>
            
            <tbody>   
              <?php
                
                $conn = mysqli_connect($host, $usuario, $senha, $database);

                  $sql = "SELECT * FROM requisito where estado = 'Aprovado'  ORDER BY voto DESC";
                  
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
                    echo "<td>".$row['estado']."</td>";
                    echo "<td>".$row['voto']."</td>";
                    
                  }                
                
                ?> 

            </tbody>
          </table><br>

          <div class="col-md-4 grid-margin stretch-card ">
            <div class="card cor2 text-white">
              <div class="card-body pb-0">

                <div class="d-flex justify-content-between ">
                  <h4 class="card-title mb-0">Total de Requisitos Aprovados</h4>
                </div>

                <h3 class="font-weight-medium mb-4">
                            
                <?php

                  $sql= "SELECT estado FROM requisito where estado = 'Aprovado'";
                  $result = $conn->query($sql);
                  $total = $result->num_rows; 

                  echo $total.'</b>';
                              
                ?>                           
                            
                </h3>
              </div>
              <canvas class="mt-n4" height="90" id="total-revenue"></canva>                        
            </div><br>                     
          </div>

          <div class="col-md-4 grid-margin stretch-card ">
            <div class="card cor2 text-white">
              <div class="card-body pb-0">

                <div class="d-flex justify-content-between ">
                  <h4 class="card-title mb-0">Total de Requisitos </h4>
                </div>

                <h3 class="font-weight-medium mb-4">
                            
                <?php

                  $sql= "SELECT * FROM requisito ";
                  $result = $conn->query($sql);
                  $total = $result->num_rows; 

                  echo $total.'</b>';
                              
                ?>                           
                            
                </h3>
              </div>
              <canvas class="mt-n4" height="90" id="total-revenue"></canva>                        
            </div><br>                     
          </div>

          </section>
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




