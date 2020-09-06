<?php


include_once'connection.php';



if (isset($_POST['uploadfilesub'])) {

    $nome = $_POST['nome'];

    $img = $_POST['img'];
    $upload = "uploadS/".$img;

    
    
    $query = "INSERT INTO equipaprojecto(nome,img) values(?,?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ss", $nome, $img);
    $stmt->execute();



    
}



?>