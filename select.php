<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Select</title>
</head>
<body>
    <?php
    require_once('connection.php');

    $connection = new Connection(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);
    $select = $connection->select('livros');
    foreach ($select as $book) {
        echo('============================</br>');
        echo('Id = '.$book['id'].'</br>');
        echo('Codigo = '.$book['cod_livro'].'</br>');
        echo('Nome = '.$book['nome_livro'].'</br>');
        echo('Descrição = '.$book['desc_livro'].'</br>');
        echo('============================</br>');
    }
    ?>
</body>
</html>