<?php

include('../config/connection.php');

$stmt = $conectar->prepare(" INSERT INTO posts (title, description, data, image) VALUES(:TITLE, :DESCRIPTION, :DATA, :IMAGE) ");

$title = $_POST['titulo'];
$data = $_POST['data'];
$description = $_POST['descricao'];
$image = $_POST['imagemURL'];

$stmt->bindParam(":TITLE", $title);
$stmt->bindParam(":DESCRIPTION", $description);
$stmt->bindParam(":DATA", $data);
$stmt->bindParam(":IMAGE", $image);
$stmt->execute();

if($stmt){
    echo "cadastrado com sucesso";
}

?>