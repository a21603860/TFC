<?php
session_start();
require_once('db.class.php');

$criadopor = $_SESSION['User'];
$nome = $_POST['nome'];
$custo = $_POST['custo'];
$datainicio = $_POST['datainicio'];
$datafim = $_POST['datafim'];

$objDb = new db();
$link = $objDb->conecta_mysql();


$sql = "INSERT INTO projeto(criadopor, nome, custo, datainicio, datafim) values('$criadopor','$nome','$custo','$datainicio','$datafim')";


//executar a query
if(mysqli_query($link,$sql)){
    echo'Projeto registado com sucesso';
    header("refresh:1; url=projetoco.php");
}else{
    echo'erro ao registar Projeto';
}

?>