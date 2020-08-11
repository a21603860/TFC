<?php

require_once('db.class.php');

    $id = $_POST['id'];
    
  

    $sql = "DELETE FROM utilizador WHERE id = '$id'";

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