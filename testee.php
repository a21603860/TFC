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

  
  <title>Administrador</title>

  </head> 

  <body class="" >



<!-- Large modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".bd-example-modal-lg">Large modal</button>

<div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      
    <div class="card col-lg-12 espacobaixo">
              <div class="card-body">
                <h4 class="card-title">Criar Projeto</h4><br>

                <form method="POST" action="regista_projeto.php" id="formProjeto">

                  <div class="form-group ">
                    <label for="exampleInputName1">Nome Projeto</label>
                    <input type="text" id="nome" name="nome" class="form-control">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Tipo de Projeto</label>
                    <select class="form-control" id="" ></select>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputName1">Data Inicio</label>
                    <input type="date" id="datainicio" name="datainicio" class="form-control">
                  </div>
                  <div class="form-group ">
                    <label for="exampleInputName1">Data Fim</label>
                    <input type="date" id="datafim" class="form-control" name="datafim">
                  </div>
                  <div class="form-group ">
                    <label for="exampleInputName1">Custo</label>
                    <input type="number" id="custo" name="custo" class="form-control" >                                                
                  </div>
                  <div class="form-group ">
                    <label for="exampleInputName1">Prioridade</label>
                    <select class="form-control" id="" ></select>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                  </div>

                  <br>
                  <button type="submit" class="btn btn-primary ">Criar Projeto</button>
                  <br></br>

                </form>
            </div>

    </div>
  </div>
</div>

<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>


$SQL=  

  </body>
</html>
