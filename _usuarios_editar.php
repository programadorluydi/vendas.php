<?php
include 'conexao.php'; // Não esquecer da conexão do banco de dados

// Check if the POST variables are set
if (isset($_POST['nome_usuario']) && isset($_POST['login']) && isset($_POST['senha']) && isset($_POST['email']) && isset($_POST['id_usuario'])) {
    $nome_usuario = $conexao->real_escape_string($_POST['nome_usuario']); // recebe o valor do input
    $login = $conexao->real_escape_string($_POST['login']);
    $senha = $conexao->real_escape_string($_POST['senha']);
    $email = $conexao->real_escape_string($_POST['email']);
    $id_usuario = $conexao->real_escape_string($_POST['id_usuario']);

    // Update the user data in the database
    $sql = "UPDATE usuarios SET nome = '$nome_usuario', usuario = '$login', senha = '$senha', email = '$email' WHERE id_usuario = '$id_usuario'";
    $conexao->query($sql);

    // Check if the update was successful
    if ($conexao->affected_rows > 0) {
        echo "Usuário editado com sucesso!";
    } else {
        echo "Erro ao editar usuário.";
    }
} else {
    echo "Erro: Não foi possível editar os dados.";
}
?>