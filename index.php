<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio</title>
</head>
<body>
    <?php
        require_once('connection.php');
        $connection = new Connection(DB_HOST, DB_NAME, DB_USERNAME, DB_PASSWORD);
        $data = array('cod_livro' => '01', 'nome_livro' => 'livro exemplo 01', 'desc_livro'=> 'Livro de exemplo');
        $insert = $connection->insert('livros', $data);
        if ($insert == true) {
            echo('inserido');
        }
    ?>
</body>
</html>