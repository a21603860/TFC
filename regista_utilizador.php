<?php

require_once('db.class.php');

$nome =  $_POST['nome'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$img = $_POST['img'];
$upload = "upload/".$img;

$funcao = $_POST['funcao'];


$objDb = new db();
$link = $objDb->conecta_mysql();

$sql = "insert into utilizador(nome, email, senha, img, funcao) values('$nome','$email','$senha','$img','$funcao')";


//executar a query
if(mysqli_query($link,$sql)){
    echo'utilizador registado com sucesso';
}else{
    echo'erro ao registar utilizador';
}

?>