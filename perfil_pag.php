<?php
	
	
	
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

  
  <title>Perfil Page</title>

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

          <a class="nav-link" href="#">AVALIAÇÃO</a>

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
          echo ' Well Come ' . $_SESSION['User'].'<br/>';
          echo '<a href="index.php?logout">Logout</a>';
        }else{
            header("location:index.php");
        }
        ?>

        <h1 class="monospace">Perfil</h1>

      </div> 

      <div class="row">      

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

    
      
    
        
    
    
  


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    



  </body>

</html>