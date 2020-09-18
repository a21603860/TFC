<?php


include_once'connection.php';



if (isset($_POST['uploadfilesub'])) {

    $nome = $_POST['nome'];

    $img = $_POST['img'];
    $upload = "upload/".$img;

    
    
    $query = "INSERT INTO equipaprojecto(nome,img) values(?,?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param("ss", $nome, $upload);
    $stmt->execute();



    
}



?>