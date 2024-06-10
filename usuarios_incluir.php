<html>
    <head>
        <title>Inclusão de Usuarios</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    </head>
    <body>
        <?php include 'menu.php';?>
        <div class="container">
            <form action="_usuarios_incluir.php" method="post">
                <h1>Inclusão de Usuarios</h1>
                <label>Nome do Usuário</label>
                <input type="text" name="nome_usuario" id="nome_usuario" class="form-control" required>
                <!-- required torna o campo obrigatório -->
                <label>E-mail</label>
                <input type="email" name="email" id="email" class="form-control"> 
                <!-- type="email" checa se tem @ no campo  -->
                <label>Password</label>
                <input type="password" name="senha" id="senha" class="form-control"> 
                <!-- type="password" não deixa o usuario ler o que digita -->
                <div style="text-align: right;">
                   <button type="submit" id="botao" class="btn btn-success btn-small">Cadastrar</button>
                </div>                              
            </form>
        </div>  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
    </body>
</html>