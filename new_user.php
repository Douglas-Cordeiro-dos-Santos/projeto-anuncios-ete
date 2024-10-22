<?php
      //parametros
      $host = 'localhost';
      $username = 'root';
      $password = '';
      $database = 'escola';

      //conexão
      $conn = new mysqli($host, $username, $password, $database);

      //teste inserindo dados
      $nome = $_POST["nome"];
      $senha = $_POST["senha"];

      $sql = "INSERT INTO usuarios (nome, senha) VALUES ('$nome', '$senha')";
      mysqli_query($conn, $sql);

      //fechar conexão
      $conn->close();

?>