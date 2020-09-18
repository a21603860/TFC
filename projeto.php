<?php

  include_once'regista_equipa.php';
  include_once'connection.php';
  session_start();
  
    
	$conn = mysqli_connect($host, $usuario, $senha, $database);

	$sql = "SELECT tipo, count(*) as number from requisito group by custo" ;
					
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
        
        <div class="row border-dark">
            
          <div class="col-lg-12 font-texto text-center texttype " style="padding-top:5% !important; height: 72%; width: auto;" >
            <div style=" font-size: 80px; font-weight: bold; letter-spacing: -9px;" >
            
              <span style="color:#0652DD">C</span>
              <span style="color:#b71540">l</span>            
              <span style="color:#f6b93b">i</span>            
              <span style="color:#0652DD">n</span>            
              <span style="color:#10ac84">t</span>            
              <span style="color:#b71540">o</span>            
              <span style="color:#10ac84">n</span>            
              <span style="padding-left:10px"> </span>            
              <span style="color:#0652DD">A</span>            
              <span style="color:#b71540">f</span>            
              <span style="color:#f6b93b">o</span>            
              <span style="color:#0652DD">n</span>            
              <span style="color:#10ac84">s</span>            
              <span style="color:#b71540">o</span><br>
              
              <div class="col-lg-12" style="margin-left: 280px">
                <input class="form-control  col-lg-6 text-center" style="border-radius:24px; height:44px; margin:0 auto" type="search" placeholder="Pesquise" aria-label="Search">            
              </div>

            </div>
          </div>   
        
        </div>
        
        <br>
        
        

        <div class="row border-dark">

            
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




