<?php

include('protect.php');
// include('../config/connection.php');


// $stmt = $conectar->prepare(" INSERT INTO posts (title, description, data, image) VALUES(:TITLE, :DESCRIPTION, :DATA, :IMAGE) ");

// $title = $_POST['titulo'];
// $data = $_POST['data'];
// $description = $_POST['descricao'];
// $image = $_POST['imagemURL'];

// $stmt->bindParam(":TITLE", $title);
// $stmt->bindParam(":DESCRIPTION", $description);
// $stmt->bindParam(":DATA", $data);
// $stmt->bindParam(":IMAGE", $image);
// $stmt->execute();

// echo "card armazenado com sucesso"
include_once('../config/connection.php');
$stmt = $conectar->prepare("SELECT * FROM posts");
$stmt->execute();
$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Painel do adm</h1>
    <p>Criar um novo post:</p>

    <div class="form-group">
        <form action="enviar.php" method="POST">
            <p>
                <label>titulo</label>
                <input type="text" name="titulo">
            </p>
            <p>
                <label>descricao</label>
                <input type="text" name="descricao">
            </p>

            <p>
                <label>imagemURL</label>
                <input type="text" name="imagemURL">
            </p>
            <p>
                <label>data</label>
                <input type="text" name="data">
            </p>
            <p>
                <button type="submit">Enviar post</button>
            </p>
            <p>
                <button>
                <a href="logout.php">Sair</a>
                </button>
            </p>
        </form>
    </div>


    <h2>
        Todos os seus posts:
    </h2>
    <p>Aqui pode ser editado e deletado um post</p>

    <table class="table">
        <tbody>
          <?php foreach($results as $post): ?>
            <tr>
            <td scope="row"><?= $post["title"] ?></td>
            <td scope="row"><?= $post["description"] ?></td>
            <td class="actions">
            </a>
            <a href="editar.php?title=<?= $post["title"] ?>">
            <i class="fas fa-eye check-icon">Editar</i>
            </a>
            <a href="delete.php?title=<?= $post["title"] ?>">Apagar</a>
            </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
    </table>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>