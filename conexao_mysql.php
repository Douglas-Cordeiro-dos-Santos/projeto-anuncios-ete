<?php
    //parametros

    $host = 'localhost'; //endereço do servidor
    $username = 'root'; //nome de usuario padrao no xammp
    $password = ''; // senha padrao vem vazio
    $database = 'tarefa'; //nome do banco de dados

    //conexão

    $conn = new mysqli($host, $username, $password, $database);

    //verificando conexão

    if ($conn->connect_error) {
        die("Falha na conexão: " . $conn->connect_error);
    }

    echo "Conexão bem-sucedida!";

    //fechar conexão

    $conn->close();
?>



