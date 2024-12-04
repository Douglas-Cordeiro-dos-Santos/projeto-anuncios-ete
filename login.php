<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="sources/index.css">
    </head>

    <body>

        <?php
            $host = 'localhost';
            $username = 'root';
            $password = '';
            $database = 'escola';

            $conn = new mysqli($host, $username, $password, $database);

            $user = $_POST["username"];
            $pass = $_POST["password"];

            // Consultar banco de dados para validar usuário e senha
            $sql = "SELECT * FROM usuarios WHERE nome = '$user' AND senha = '$pass'";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                echo "<script>
                        window.location='tela_inicio.html';
                        </script>";
            } else {
                echo "<script>
                        alert('Usuário ou senha inválido.');
                        document.getElementById('message').innerText = 'Usuário ou senha inválidos!';
                        </script>";
            }

            $conn->close();
        ?>

        <form id="login-form" action="login.php" method="post">
            <h2 style="text-align:center;">BEM VINDO</h2>
            <input type="text" name="username" placeholder="Usuário" required>
            <input type="password" name="password" placeholder="Senha" required>
            <button type="submit">Entrar</button>
            <p id="message"></p>
        </form>

    </body>
</html>
