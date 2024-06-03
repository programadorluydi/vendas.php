<?php
session_start(); // Inicia a sessão
include 'conexao.php';

$email = $_POST['email'];
$senha = $_POST['senha']; // Estava faltando o símbolo "$" antes de POST
$id_usuario = 0;
$sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
// echo($sql);
$busca = mysqli_query($conexao,$sql);
//$total ($array = mysqli)

while ($array = mysqli_fetch_array($busca)) {

    $id_usuario = $array['id_usuario'];
    $email = $array['mail'];
    $senha = $array['senha'];

    header('location:principal.php?id_usuario='.$id_usuario);
}

if ($id_usuario == 0) {

  //unset ($_SESSION['usuario']);
  //unset ($_SESSION['senha']);
  header('location:usuario_recusado.php');

}

?>
