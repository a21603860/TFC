<?php

include_once'connection.php';

    	
    $conn = mysqli_connect($host, $usuario, $senha, $database);
    
    $papel = $_POST['papel'];

    $sql = "INSERT INTO utilizador WHERE papel='$_GET[papel]'";

    $record = mysqli_query($conn, $sql);    


    if(mysqli_query($conn,$sql)){
        echo "utilizador adicionado com sucesso";
        //header("refresh:1; url=avaliacao.php");
    }else{

        echo 'nao adicionado';
    }