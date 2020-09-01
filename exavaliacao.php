<?php
	include_once'db.class.php';
	
	
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

  
  <title>Avaliação</title>

  </head> 

  <body >
    
  <nav class="navbar navbar-expand-lg cor rcorners ">    
    
    <div class="container navbar-header" id="navbarNav">

      <div class="navbar-header ">

				<a class="navbar-brand" href="#">
					
					<img src="imagens/logo.png"> 

				</a>

			</div>

      <ul class=" navbar-nav ">

        <li class="nav-item ">

          <a class="nav-link" href="#">HOME </a>
          
        </li>

        <li class="nav-item">

          <a class="nav-link" href="#">PERFIL</a>

        </li>

        <li class="nav-item">

          <a class="nav-link" href="#">AVALAIÇÃO</a>

        </li>

      
      </ul>

    </div>

  </nav>
    
    <div class="container "> 

      <div class="page-header">

        <h1 class="monospace">Criação de Requisito</h1>

      </div> 

      <div class="card">
        
        <div class="card-body">
            This is some text within a card body.
        </div>

      </div>
      <br></br>

    <div class="container">         

      <div class="row">

        <div class="col-md-5 marcador1">
          
        

        </div>

        <div class="col-md-6 marcador1">
          
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