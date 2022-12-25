<?php
// arquivo para conectar na tabela de usuarios
$usuario = 'root';
$senha = '';
$database = 'blog';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha, $database);

if($mysqli->error) {
    die("Falha ao conectar ao banco de dados: " . $mysqli->error);
}

?>