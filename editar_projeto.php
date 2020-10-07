<?php
    include_once'connection.php';
    session_start();

	
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/5.4.1/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  
  <title>EditarProjeto</title>

  </head> 

  <body class="" >
    
      <nav class="navbar fixed-top  navcor rcorners">          
        <a class="navbar-brand" href="#"><img src="imagens/logo.png"></a>
        <ul class="av justify-content-end">
          <a type="button" class="btn" style="color: white;" href="projetoco.php">HOME </a>
        </ul>
      </nav>
    
    <div class="container "> 

      <div class="page-header">

        <?php
        
        if(isset($_SESSION['User']))
        {
          echo ' Login como ' . $_SESSION['User'].'<br/>';
          echo '<a href="index.php?logout">Logout</a>.<br>';


        }else{
            header("location:index.php");
        }
        ?>

        <h1 class="monospace">Requisitos do Projeto</h1>

      </div>     

      <div class="row">
      
        <br><br>
        <br><br>
      

        
        <div class="col-lg-12">
        <div class="text-left text-primary " style="font-weight: bold" >
          Ativo = 0  requisito encontra-se votado(indisponivel para alterações)<p>
          Ativo = 1  requisito disponível para voto
          </div>
        <br>
          <table class="table border border-dark">
            <thead class="cor2 text-white">
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nome</th>
                <th scope="col">Descricao</th>
                <th scope="col">Tipo</th>
                <th scope="col">Voto</th>
                <th scope="col">Ativo</th>
                <th scope="col">Ação</th>
              </tr>
            </thead>
            
            <tbody>   
              <?php
                
                $conn = mysqli_connect($host, $usuario, $senha, $database);

        
                  $sql = "SELECT * FROM  requisito WHERE idprojeto ='$_GET[id]'";
                  
                  $record = mysqli_query($conn, $sql);
                  
                  
                  while ($row =mysqli_fetch_array($record)){
                          
                    

                    echo"<tr>";
                    echo"<td>".$row['id']."</td>";
                    echo"<td>".$row['nome']."</td>";
                    echo"<td>".$row['descricao']."</td>";
                    echo"<td>".$row['tipo']."</td>";
                    echo"<td>".$row['voto']."</td>";
                    echo"<td>".$row['activo']."</td>";
                    echo " <td><a onclick='myFunction()' class='btn btn-primary badge badge-pill badge-danger' href=atualizar_requisito.php?id=".$row['id'].">Concluir</a> 
                    <a class='btn btn-primary badge badge-pill badge-primary' data-toggle='modal' data-target='#modalinserir'>Votar</td>";
                    
                  }    
                
                ?> 

            </tbody>
          </table><br>

         
        </div>

        <div class="modal" tabindex="-1" role="dialog" id="modalinserir">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Votação</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

            <form method="POST" action="insercacao_avaliacao_by_utilizador.php?id=.$row['id'].">
                
                <div class="form-group row espaco">
                  <label for="Input1" class="col-sm-2 col-form-label">Valor do Voto</label>
                    <div class="col-sm-5">
                      <select class="form-control" id="voto" name="voto">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                        <option>5</option>
                      </select>
                    </div> 
                </div>
                <div class="form-group row espaco">
                  <label for="Input1" class="col-sm-2 col-form-label">Id_projeto</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="idprojeto" name="idprojeto"  value="<?Php echo $_GET['id'];?> ">                    
                    </div> 
                </div>       
                <button type="submit" class="btn btn-primary">Carregar</button><br><br>
            </form>

        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            
        </div>
    </div>
  </div>
</div>



        <div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Criação de Requisito</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">                
              <form method="POST" action=regista_requisito.php id="formRequisito">  
                
                <div class="form-group row espaco">                
                  <label for="Input1" class="col-sm-2 col-form-label">Nome</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira o nome do Requisito">              
                    </div>
                </div>
                <div class="form-group row espaco">
                  <label for="Input1" class="col-sm-2 col-form-label">Id_projeto</label>
                    <div class="col-sm-5">
                      <input type="text" class="form-control" id="idprojeto" name="idprojeto"  value="<?Php echo $_GET['id'];?> ">                    
                    </div> 
                </div>
                <div class="form-group row">

                  <label for="ControlTextarea1" class="col-sm-2 col-form-label">Descricao</label>

                    <div class="col-sm-7">

                      <textarea class="form-control" id="descricao" rows="4" name="descricao"></textarea>

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


      
        <div class="col-lg-4">
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#staticBackdrop" style="text-right">
            Adicionar requisito
          </button>
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