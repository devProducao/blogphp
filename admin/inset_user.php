<?php

    include('../config/connection.php');

    $stmt = $conectar->prepare("INSERT INTO usuarios (id,nome, senha) VALUES('2',:USER, :SENHA)");

    $user = $_POST['user'];
    $senha = $_POST['senha'];

    $stmt->bindParam(":USER", $user);
    $stmt->bindParam(":SENHA", $senha);
    $stmt->execute();

    if($stmt){
        echo "cadastrado com sucesso";
    }

?>