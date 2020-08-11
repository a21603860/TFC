<?php

require_once('db.class.php');

$nome =  $_POST['nome'];
$descricao = $_POST['descricao'];
$tipo = $_POST['tipo'];
$prioridade = $_POST['prioridade'];

$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "insert into requisito(nome, descricao, tipo, prioridade) values('$nome','$descricao','$tipo','$prioridade')";


//executar a query
if(mysqli_query($link,$sql)){
    echo'requisito registado com sucesso';
}else{
    echo'erro ao registar requisito';
}

?>