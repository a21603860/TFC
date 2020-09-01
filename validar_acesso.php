<?php

require_once('connection.php');
session_start();
   

    //$utilizador = $_POST['utilizador'];
    //$senha = $_POST["senha"];

if(isset($_POST['login'])){
    
    if (empty($_POST['utilizador']) || empty($_POST['senha'])) {        
        
        header("location:index.php");//caso os campos estejam vazios rencaminha para a própria pag 
        
    }else{

    $query="SELECT * FROM utilizador WHERE nome='".$_POST['utilizador']."' and senha ='".$_POST['senha']."'";
        
    $result=mysqli_query($con,$query);

    if(mysqli_fetch_assoc($result)){

        $_SESSION['User']=$_POST['utilizador'];        
        header("location:projeto.php");

        }else{

            header("location:index.php?Invalid= Please Enter Correct User Name and Password ");
        }
    }
 }else{

    echo 'Not Working';
 }
          
    
    /*$sql = "SELECT * FROM utilizador WHERE nome = '$utilizador' AND senha = '$senha' ";

    $objDb = new db();

    $link = $objDb->conecta_mysql();

    $resultado_id = mysqli_query($link,$sql);
   

    if($resultado_id){

        $dados_utilizador = mysqli_fetch_array($resultado_id);

        var_dump($dados_utilizador);

    }else{

        echo 'Erro na execução';
    }*/
    
      

?>