<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Criar Conta</title>
        <link rel="stylesheet" type="text/css" href="sources/tela_cadastro.css">
    </head>

    <body>

        <?php
            //parametros
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'escola';

            //conexão
            $conn = new mysqli($host, $username, $password, $database);

            //teste inserindo dados
            $n = $_POST["nome"];
            $s = $_POST["senha"];

            $sql = "INSERT INTO usuarios (nome, senha) VALUES ('$n', '$s')";
            mysqli_query($conn, $sql);

            //fechar conexão
            $conn->close();
        ?>

        <script>
            window.location="tela_inicio.html";
        </script>

    </body>
</html>
