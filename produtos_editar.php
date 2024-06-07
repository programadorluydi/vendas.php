<!-- produtos_editar.php -->
<?php
include 'conexao.php';
$id_produto = $_GET['id_produto']; // Esse é o parametro
// Como o parametro vem de uma url, usamos o metodo get.
$sql = "SELECT * FROM produtos WHERE id_produto = $id_produto";
$buscar = mysqli_query($conexao,$sql);
while ($array = mysqli_fetch_array($buscar)) {
       $desc_produto  = $array['desc_produto'];
       $id_categoria  = $array['id_categoria'];
       $qtde_estoque  = $array['qtde_estoque'];
       $preco         = $array['preco'];
       $descricao     = $array['descricao'];
      } // carregamos apenas o registro que escolhemos ao clicar em editar
?> <!-- vamos aproveitar a tela de inclusão de produtos e inserir abaixo -->
<html>
    <head>
        <title>Alteração de Produtos</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <?php include 'menu.php';?>
        <div class="container">
            <form action="_produtos_editar.php" method="post">
                <h1>Alteração de produtos</h1>
                <label>Descrição</label>
                <!-- Carregamos o id_produto em um input invisivel com
                o mesmo nome. Veja linha abaixo -->
                <input type="hidden" name="id_produto" id="id_produto" 
                value="<?php echo($id_produto) ?>">
                <input type="text" name="desc_produto" id="desc_produto" value="<?php echo($desc_produto) ?>" class="form-control" required>
                <!-- required torna o campo obrigatório -->
                <?php 
                include 'conexao.php';?>
                <label>Categoria</label>
                <select class="form-control" name="id_categoria">
                <?php
                     $sql = "SELECT * FROM categorias order by desc_categoria";
                     $busca = mysqli_query($conexao,$sql);
            
                     while ($array = mysqli_fetch_array($busca)) {
                        $id_categoria2 = $array['id_categoria']; // $id_categoria2 vem da tabela categorias
                                                                 // $id_categoria vem da tabela produtos  
                        $desc_categoria = $array['desc_categoria'];
                ?>
                  <option value="<?php echo $id_categoria2 ?>" <?=($id_categoria2 == $id_categoria)?'selected':''?>><?php echo $desc_categoria ?></option>
                  <?php } ?>
                </select>
                <label>Qtde Estoque</label>
                <input type="text" name="qtde_estoque" id="qtde_estoque" value="<?php echo($qtde_estoque) ?>" class="form-control" required>
                <label>Preço</label>
                <input type="text" name="preco" id="preco" value="<?php echo($preco) ?>" class="form-control" required>
                <label>Descrição</label>
                <textarea id="descricao" name="descricao" 
                rows="4" class="form-control"><?php echo($descricao)?></textarea>
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
