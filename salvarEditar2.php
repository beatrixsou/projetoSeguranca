<?php

    include_once('config2.php');

    if(isset($_POST['update'])){
       
        $id = $_POST['id'];
        $Nome = $_POST['Nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $telefone = $_POST['telefone'];
        $sexo = $_POST['sexo'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];

        $sqlUpdate = "UPDATE clientes SET Nome='$Nome',email='$email',senha='$senha',telefone='$telefone',sexo='$sexo',cidade='$cidade',estado='$estado',endereco='$endereco' 
        WHERE id='$id'";

        $result = $conexao->query($sqlUpdate);
    }

    header("Location: sistema2.php");

?>
