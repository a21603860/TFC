<?php

        

         $host = 'localhost';

        //usuario
         $usuario = 'root';

        //senha
         $senha = '';

        //banco de dados
         $database = 'regista_requisito';

        //criar conexao
        $con = mysqli_connect($host, $usuario, $senha, $database);

        mysqli_set_charset($con, 'utf8');

            
?>