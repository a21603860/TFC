<?php

include_once'connection.php';

    	
    $conn = mysqli_connect($host, $usuario, $senha, $database);

    $sql = "DELETE FROM utilizador WHERE id ='$_GET[id]'";

    $record = mysqli_query($conn, $sql);    


    if(mysqli_query($conn,$sql)){
        echo "utilizador apagado com sucesso";
        header("refresh:1; url=administrador.php");
    }else{

        echo 'not deleted';
    }
    
   
    

?>