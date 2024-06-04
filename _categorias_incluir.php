<?php
include 'conexao.php'; // Não esquecer da conexão do banco de dados
$desc_categoria = $_POST['desc_categoria']; // recebe o valor do input

$sql = "INSERT INTO categorias (desc_categoria) VALUES 
('$desc_categoria')"; // insert into (insere em <nome tabela>)
                                               // os campos entre parentesis, separado por virgula
                                               // Values são os valores das variaveis
$inserir = mysqli_query($conexao,$sql);  // função do php para executar a query
?>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<center>
<h4>Categoria Adicionada com Sucesso</h4>
<a href="categorias.php" role="button" class="btn btn-sm btn-primary btn">Voltar</a>
</center>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
