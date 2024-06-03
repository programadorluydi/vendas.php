<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<!-- box shadow cssmatic -->
    <style type="text/css">
	#tamanho {
		width: 350px;
		-webkit-box-shadow: 10px 10px 25px -8px rgba(115,108,115,1);
		-moz-box-shadow: 10px 10px 25px -8px rgba(115,108,115,1);
		box-shadow: 10px 10px 25px -8px rgba(115,108,115,1);	
        margin-top: 50px; 
        border-radius: 20px; 
	}
    </style>	
    </head>
    <body>
<center>	
    <div class="container" id="tamanho">
    <div style="padding: 5px">
    <img src="https://png.pngtree.com/png-vector/20220915/ourmid/pngtree-water-nature-logo-company-png-image_6175947.png" width="200px">
    <form action="index1.php" method="post">
    <div class="form-group">
    	<label>Usuário</label>
    	<input type="email" name="email" id="email" class="form-control" required>
    </div>
    <div class="form-group">
    	<label>Senha</label>
    	<input type="password" name="senha" id="senha" class="form-control" required>
    </div>
    <div style="text-align: right;">
    	<br/>
        <button type="submit" id="botao" class="btn btn-primary">Entrar</button>

        <div>&nbsp;</div>
    </div>  

</form>
</div>
</div>
<!--</center>
<div style="margin-top: 10px">
<center>
  <small>Você não possui cadastro? Clique <a href="cadastro_usuario_externo.php"> aqui</a></small>
</center>
</div>-->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>    
</body>
</html>