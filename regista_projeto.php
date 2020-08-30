<?php

require_once('db.class.php');


$nomeproject = $_POST['nomeproject'];
$custo = $_POST['custo'];
$datainicio = $_POST['datainicio'];
$datafim = $_POST['datafim'];


$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "insert into projeto( nomeproject, custo, datainicio, datafim) values('$nomeproject','$custo','$datainicio','$datafim')";


//executar a query
if(mysqli_query($link,$sql)){
    echo'requisito registado com sucesso';
    header("refresh:1; url=projeto.php");
}else{
    echo'erro ao registar requisito';
}

?>