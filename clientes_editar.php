<?php include 'menu.php';?>
<?php
include 'conexao.php';
$id_cliente = $_GET['id_cliente']; // Esse é o parametro
// Como o parametro vem de uma url, usamos o metodo get.
$sql = "SELECT * FROM clientes WHERE id_cliente = $id_cliente";
$buscar = mysqli_query($conexao,$sql);

while ($array = mysqli_fetch_array($buscar)) {
       $nome_cliente  = $array['nome_cliente'];
       $cnpj	      = $array['cnpj'];
       $cep	          = $array['cep'];
       $endereco      = $array['endereco'];
      } // carregamos apenas o registro que escolhemos ao clicar em editar
?>
<html>
    <head>
        <!-- Copiamos a inclusão 
        clientes_editar.php -->
        <title>Alteração de Clientes</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <form action="_clientes_editar.php" method="post">
                <h1>Alteração de clientes</h1>
                <!-- Acrescentar aqui: -->
                <input type="hidden" name="id" id="id" value="<?php echo("$id_cliente") ?>">
                <!--Criamos um input invisivel com o id do cliente para usar de parametro -->
                <label>Nome do Cliente</label>
                <input type="text" name="nome_cliente" id="nome_cliente" value="<?php echo("$nome_cliente") ?>" class="form-control">
                                                                        <!-- carregamos o valor da variável no input -->
                <label>CNPJ</label>
                <input type="text" name="cnpj" id="cnpj" value="<?php echo("$cnpj") ?>" class="form-control"> 
                <label>CEP</label>
                <input type="text" name="cep" id="cep" value="<?php echo("$cep") ?>" class="form-control"> 
                <label>Endereço</label>  
                <input type="text" name="endereco" id="endereco" value="<?php echo("$endereco") ?>" class="form-control">
                <div style="text-align: right;">
                   <button type="submit" id="botao" class="btn btn-success btn-small">Alterar</button>
                </div>                              
            </form>
        </div>  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
    </body>
</html>