<?php
    session_start();
    include_once'connection.php';

	$id = filter_input(INPUT_GET,'id', FILTER_SANITIZE_NUMBER_INT);
	$sql= "DELETE * FROM  requisito WHERE id ='$id' ";
    $resultado = mysqli_query($conn,$sql);

    if(mysqli_affected_rows($conn)){
        $_SESSION['msg'] = "utilizador apagado com sucesso";
        header("Location: tabela_requisito.php");
    }else{
        $_SESSION['msg'] ="utilizador n apagado";
        header("Location: tabela_requisito.php");
    }
    
?>