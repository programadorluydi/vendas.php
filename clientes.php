<html>
    <head>
        <title>Sistema de Vendas</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <?php include 'menu.php';?>
       <div class="container">
       <a href="clientes_incluir.php" class="btn btn-primary">Incluir</a>
       <table class="table table-striped">
            <thead>
                <tr>
                <th>Id</th>
                <th>Nome Cliente</th>
                <th>CNPJ</th>
                <th>Editar</th>
                <th>Excluir<th>
                </tr>
            </thead>
            <body>
            <?php
    		    include 'conexao.php';
    		    $sql = "SELECT * FROM clientes";
                $busca = mysqli_query($conexao,$sql);

                while ($array = mysqli_fetch_array($busca)) {
                  $id_cliente = $array['id_cliente'];
                  $nome_cliente = $array['nome_cliente'];
                  $cnpj = $array['cnpj'];
                  ?>
                   <tr>
                   <td><?php echo($id_cliente)?></td>
                   <td><?php echo($nome_cliente)?></td>
                   <td><?php echo($cnpj)?></td>
                   <td><a href="clientes_editar.php?id_cliente=<?php echo($id_cliente)?>" class="btn btn-success">Editar</a></td>
                   <td><a href="clientes_excluir.php?id_cliente=<?php echo($id_cliente)?>" class="btn btn-danger">Excluir</a></td>

                   <!-- para passar o parametro que é o id do cliente para o modulo de edição que 
                   vamos construir. Estamos no clientes.php, botão editar.
                   Passamos o parametro via URL e portanto não precisa do $ depois do ? -->
                   </tr>
                <?php } ?>
            </tbody>
        </table>
        </div> 
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    </body>
</html>