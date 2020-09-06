<?php

include_once'connection.php';

    	
    $conn = mysqli_connect($host, $usuario, $senha, $database);

    $sql = "DELETE FROM equipa WHERE id ='$_GET[id]'";

    $record = mysqli_query($conn, $sql);    


    if(mysqli_query($conn,$sql)){
        echo "equipa apagado com sucesso";
        //header("refresh:1; url=projeto.php");
    }else{

        echo 'not deleted';
    }
    
   
    

?>