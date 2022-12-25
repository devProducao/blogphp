<?php
// logout para usuario admin, ele tirar o id do user da session
if(!isset($_SESSION)) {
    session_start();
}

session_destroy();

header("Location: index.php");