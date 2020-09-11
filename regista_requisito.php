<?php
session_start();
require_once('db.class.php');



$nome =  $_POST['nome'];
$descricao = $_POST['descricao'];
$tipo = $_POST['tipo'];
$idprojeto = $_POST['idprojeto'];



$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "INSERT INTO requisito( nome, descricao, tipo, idprojeto) values('$nome','$descricao','$tipo','$idprojeto')";


//executar a query
if(mysqli_query($link,$sql)){
    echo'requisito registado com sucesso';
    echo $_SESSION['idrequisito'];
    header("refresh:1; url=editar_projeto.php");
}else{
    echo'erro ao registar requisito';
}

?>