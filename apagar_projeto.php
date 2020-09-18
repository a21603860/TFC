<?php
session_start();

include_once'connection.php';

    	
    $conn = mysqli_connect($host, $usuario, $senha, $database);

    $sql = "UPDATE projeto SET activo1 = 0 WHERE id = '$_GET[id]'";

    $record = mysqli_query($conn, $sql);    


    if(mysqli_query($conn,$sql)){
        echo "projeto Inativado com sucesso";
        header("refresh:1; url=projetoco.php");
    }else{

        echo 'not deleted';
    }
    
   
    

?>