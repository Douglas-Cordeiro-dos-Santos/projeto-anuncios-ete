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

            //variáveis
            $titulo = $_POST["titulo"];
            $descricao = $_POST["descricao"];
            $data = $_POST["data"];
            $tipo = $_POST["tipo"];
            $usuario_id = $_POST["usuario_id"];

            $sql = "INSERT INTO anuncios (titulo, descricao, data_pub, tipo) VALUES ('$titulo', '$descricao', '$data', '$tipo')";
            mysqli_query($conn, $sql);

            //fechar conexão
            $conn->close();
        ?>

        <script>
            window.location="tela_inicio.html";
        </script>

        <!-- Botão de Voltar -->
    <button id="back-button">Voltar</button>

<script>
    document.getElementById('back-button').addEventListener('click', () => {
        window.location.href = 'tela_inicio.html'; // redirecionamento para página de login
    });
</script>

    </body>
</html>
