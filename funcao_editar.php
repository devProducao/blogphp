<?php
include_once('config/connection.php');

$stmt = $conectar->prepare("UPDATE posts SET title = :TITLE, description = :DESCRICAO WHERE title = :title");

$title = $_GET['title'];

$title_get = $_POST['titulo'];

$description = $_POST['descricao'];

$stmt->bindParam(":title", $title);
$stmt->bindParam(":TITLE", $title_get);
$stmt->bindParam(":DESCRICAO", $description);

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

if($stmt){
    echo "Registro editado";
}

?>