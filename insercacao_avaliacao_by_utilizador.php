<?php
session_start();
include_once'connection.php';
require_once('db.class.php');


    $voto = $_POST['voto'];
    $idprojeto= $_POST['idprojeto'];
    $query = "UPDATE requisito SET voto = $voto WHERE idprojeto =$_POST[idprojeto]";
    
    
$objDb = new db();
$link = $objDb->conecta_mysql();

   //executar a query
if(mysqli_query($link,$query)){
    echo'Voto Atribuido';
    //header("refresh:1; url=avaliacao.php");
}else{
    echo'erro ao registar requisito';
}



?>