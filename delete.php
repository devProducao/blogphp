<?php
include_once('config/connection.php');
$stmt = $conectar->prepare("DELETE FROM posts WHERE title = :title");
$id = $_GET['title'];
$stmt->bindParam(":title", $id);
$stmt->execute();
echo "Registro apagado";
?>