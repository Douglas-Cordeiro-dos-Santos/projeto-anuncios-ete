<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Criar Conta</title>
    </head>

    <body>
        <header>
            <h2 style="text-align: center;">Usuário cadastrado</h2>
        </header>

        <main>
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
        </main>
    </body>
</html>
