<?php

require_once('db.class.php');

$nome =  $_POST['nome'];
$descricao = $_POST['descricao'];
$tipo = $_POST['tipo'];
$prioridade = $_POST['prioridade'];
$datainicio = $_POST['datainicio'];
$custo = $_POST['custo'];




$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "INSERT INTO projeto WHERE(nome, descricao, tipo, prioridade,datainicio,custo) values('$nome','$descricao','$tipo','$prioridade','$datainicio','$custo') WHERE id ='$_GET[id]'";


//executar a query
if(mysqli_query($link,$sql)){
    echo'requisito registado com sucesso';
    //header("refresh:1; url=avaliacao.php");
}else{
    echo'erro ao registar requisito';
}

?>