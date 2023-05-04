<?php

    if(!empty($_GET['id']))
    {
        
        include_once('config2.php');

        $id = $_GET['id'];

        $sqlSelect = "SELECT * FROM clientes WHERE id=$id";

        $result = $conexao->query($sqlSelect);

        if($result->num_rows > 0){

            $sqlDelete = "DELETE FROM clientes WHERE id=$id";
            $resultDelete = $conexao->query($sqlDelete);

            header("Location: sistema2.php");
        }else{
            header("Location: tela_login2.php");
        }

                
    } else{
        header("Location: sistema2.php");
    }  
        
?>