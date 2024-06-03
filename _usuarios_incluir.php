<?php
include 'conexao.php'; // Não esquecer da conexão do banco de dados

// Check if the POST variables are set
if (isset($_POST['nome_usuario']) && isset($_POST['login']) && isset($_POST['senha']) && isset($_POST['email'])) {
    $nome_usuario = $_POST['nome_usuario']; // recebe o valor do input
    $login = $_POST['login'];
    $senha = $_POST['senha'];
    $email = $_POST['email'];

    // Make sure to escape the input data to prevent SQL injection
    $nome_usuario = $conexao->real_escape_string($nome_usuario);
    $login = $conexao->real_escape_string($login);
    $senha = $conexao->real_escape_string($senha);
    $email = $conexao->real_escape_string($email);

    // Check if the table columns match the ones in your database
    $sql = "INSERT INTO usuarios (nome, usuario, senha, email) VALUES ('$nome_usuario', '$login', '$senha', '$email')";
    $conexao->query($sql);
} else {
    echo "Erro: Não foi possível inserir os dados.";
}
?>