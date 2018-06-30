<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Update</title>
</head>
    <body>
        <?php
        require_once('connection.php');
        $connection = new Connection(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);
        $data = array('cod_livro' => 01, 'nome_livro' => 'livro exemplo 03', 'desc_livro' => 'Livro de Exemplo');
        $insert = $connection->update('livros', 'id', 1, $data);
        if($insert == true){
            echo('alterado');
        }
        ?>
    </body>
</html>