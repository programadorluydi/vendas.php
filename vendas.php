<html>
    <head>
        <title>Sistema de Vendas</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
       <?php include 'menu.php';?> 
       <div class="container">
       <a href="vendas_incluir.php" class="btn btn-primary">Incluir</a>
       </br>
       <table class="table table-striped">
       </br>
            <thead>
                <tr>
                <th>Id do Produto</th>
                <th>Descriçao do Produto</th>
                <th>Quantidade em estoque </th>
                <th>Descrição</th>
                </tr>
            </thead>
            <tbody>
            <?php
    		    include 'conexao.php';
    		    $sql = "SELECT * FROM vendas";
                $busca = mysqli_query($conexao,$sql);

                while ($array = mysqli_fetch_array($busca)) {
                  $id_categoria = $array['id_vendas'];
                  $desc_categoria = $array['desc_vendas'];
                  ?>
                   <tr>
                   <td><?php echo($id_vendas)?></td>
                   <td><?php echo($desc_vendas)?></td>
              
                   <td><a href="categorias_editar.php?id_categoria=<?php echo($id_vendas)?>" class="btn btn-primary">Editar</a></td> <!-- Botão -->
                   <td><a href="categorias_excluir.php?id_categoria=<?php echo($id_vendas)?>" class="btn btn-danger">Excluir</a></td> <!-- Botão -->
                   <!-- para passar o parametro que é o id do usuarios para o modulo de edição que 
                   vamos construir. Estamos no produtos.php, botão editar.
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