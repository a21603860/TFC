<?php

require_once('connection.php');
session_start();
   

    //$utilizador = $_POST['utilizador'];
    //$senha = $_POST["senha"];

if(isset($_POST['login'])){
    
    if (empty($_POST['utilizador']) || empty($_POST['senha'])) {        
        
        header("location:index.php");//caso os campos estejam vazios rencaminha para a própria pag 
        
    }else{

    $query="SELECT id FROM utilizador WHERE nome='".$_POST['utilizador']."' and senha ='".$_POST['senha']."'";
        
    $result=mysqli_query($con,$query);

    if(mysqli_fetch_assoc($result)){
        while ($row =mysqli_fetch_array($result)){
           $_SESSION['userid']=$row['id'];
           
        }

        $_SESSION['User']=$_POST['utilizador'];
                
        header("location:projetoco.php");

        }else{

            header("location:index.php?Invalid= Please Enter Correct User Name and Password ");
        }
    }
 }else{

    echo 'Not Working';
 }
          
    
         

?>