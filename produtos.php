<html>
    <head>
        <title>Sistema de Vendas</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
       <?php include 'menu.php';?> 
       <div class="container">
       <a href="produtos_incluir.php" class="btn btn-primary">Incluir</a>
       <table class="table table-striped">
            <thead>
                <tr>
                <th>Id</th>
                <th>Descrição</th>
                <th>Categoria</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Editar</th>
                <th>Excluir</th>
                </tr>
            </thead>
            <tbody>
            <?php
    		    include 'conexao.php';
    		    $sql = "SELECT * FROM produtos INNER JOIN categorias ON produtos.id_categoria = categorias.id_categoria";
                $busca = mysqli_query($conexao,$sql);

                while ($array = mysqli_fetch_array($busca)) {
                  $id_produto = $array['id_produto'];
                  $desc_produto = $array['desc_produto'];
                  $desc_categoria = $array['desc_categoria'];
                  $preco = $array['preco'];
                  $qtde_estoque = $array['qtde_estoque'];
                  ?>
                   <tr>
                   <td><?php echo($id_produto)?></td>
                   <td><?php echo($desc_produto)?></td>
                   <td><?php echo($desc_categoria)?></td>
                   <td><?php echo("R$ " . number_format($preco,2,",","."))?></td>
                   <td><?php echo($qtde_estoque)?></td>
                   <td><a href="produtos_editar.php?id_produto=<?php echo($id_produto)?>" class="btn btn-success">Editar</a></td>
                   <td><a href="produtos_excluir.php?id_produto=<?php echo($id_produto)?>" class="btn btn-danger">Excluir</a></td>
                   <!-- para passar o parametro que é o id do usuario para o modulo de edição que 
                   vamos construir. Estamos no usuarios.php, botão editar.
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
