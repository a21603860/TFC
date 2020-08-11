<?php

require_once('db.class.php');

    $utilizador = $_POST['utilizador'];
    $senha = $_POST["senha"];
  

    $sql = "SELECT * FROM utilizador WHERE nome = '$utilizador' AND senha = '$senha' ";

    $objDb = new db();

    $link = $objDb->conecta_mysql();

    $resultado_id = mysqli_query($link,$sql);

    if($resultado_id){

        $dados_utilizador = mysqli_fetch_array($resultado_id);

        var_dump($dados_utilizador);      

    }else{

        echo 'Erro na execução';
    }
    
   
    

?>