<?php include 'menu.php';?>
<?php
// Criar o arquivo _clientes_editar.php
include 'conexao.php'; // Conexão com o Banco
$id_cliente = $_POST["id"]; // Quando carregamos a variável pelo método post usamos [] Colchetes
$nome_cliente = $_POST["nome_cliente"];
$cnpj  =  $_POST["cnpj"];
$cep   = $_POST["cep"];
$endereco = $_POST["endereco"];

$sql = "update clientes set nome_cliente='$nome_cliente',cnpj='$cnpj',
cep='$cep',endereco='$endereco' where id_cliente=$id_cliente";
$alterar = mysqli_query($conexao,$sql);
// update procede a alteração do do registro no banco, obedecendo o critério:
// Que o registro que será alterado esteja de acordo com o conteúdo da variável $id_cliente.
?>
<!-- Copiar o trecho do aviso do _clientes_incluir.php aqui para baixo e alterar a frase para alterado-->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<center>
<h4>Cliente Alterado com Sucesso</h4>
<a href="clientes.php" role="button" class="btn btn-sm btn-primary btn">Voltar</a>
</center>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>