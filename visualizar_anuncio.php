<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar Anúncios</title>
    <link rel="stylesheet" type="text/css" href="sources/visualizar_anuncios.css">
</head>

<body>
    <h1>Visualização de Anúncios</h1>

    <?php
        // Parâmetros de conexão com o banco de dados
        $host = 'localhost';
        $username = 'root';
        $password = '';
        $database = 'escola';

        // Estabelecer conexão
        $conn = new mysqli($host, $username, $password, $database);

        // Verificar conexão
        if ($conn->connect_error) {
            die("Falha na conexão: " . $conn->connect_error);
        }

        // Consultar os anúncios no banco de dados
        $sql = "SELECT titulo, descricao, data_pub, tipo FROM anuncios";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // Exibir os anúncios em divs
            echo '<div id="anuncios-list">';
            
            while ($row = $result->fetch_assoc()) {
                echo '<div class="anuncio-item">';
                echo '<h2>' . htmlspecialchars($row['titulo']) . '</h2>';
                echo '<p>' . htmlspecialchars($row['descricao']) . '</p>';
                echo '<p><strong>Data:</strong> ' . htmlspecialchars($row['data_pub']) . '</p>';
                echo '<p><strong>Tipo:</strong> ' . htmlspecialchars($row['tipo']) . '</p>';
                echo '</div>';
            }
            echo '</div>';
        } else {
            echo '<p>Não há anúncios disponíveis no momento.</p>';
        }

        // Fechar conexão
        $conn->close();
    ?>

    <!-- Botão de Sair -->
    <button id="logout-button">Sair</button>

    <script>
        document.getElementById('logout-button').addEventListener('click', () => {
            window.location.href = 'tela_inicio.html'; // redirecionamento para página de login
        });
    </script>
</body>

</html>
