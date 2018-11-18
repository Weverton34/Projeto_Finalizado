<!doctype html>
<html lang="pt-br">
    <head>
        <title> Bootstrap 4</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/produtos.css">
    </head>
	<script>
	function formatar(mascara, documento){
	  var i = documento.value.length;
	  var saida = mascara.substring(0,1);
	  var texto = mascara.substring(i)
	  
	  if (texto.substring(0,1) != saida){
				documento.value += texto.substring(0,1);
	  }
	  
	}
</script>
    <body>
	<!--Botão de Voltar-->
		<a href = "controle_adm_produto.php" class="btn btn-info" role="button">Voltar</a>
		<br/> <br/>
		<!--Fim Botão de Voltar-->
        <div class="container">
            <div class="row">
                <div class="produto">
                    <h1 class="titulo">Produtos</h1>
            <form method="POST" action="upload_produto.php" enctype="multipart/form-data">
							<input type="text" name="nome" placeholder="Nome" required="">

						   
							<textarea name="descricao" rows="100" cols="47" placeholder="Descrição" required=""></textarea>


							<input id="tel" type="text" name="preco" placeholder="Preço" OnKeyPress="formatar('##,##', this)" maxlength="5" required="">


							<p>
								<br/>Tipo do Produto:
								<div class="btn-group">
									<select id="prod" name="tipo" required="" class="form-control" style="background-color: rgb(23, 162, 184); color: #fff">
									<option value=""> Escolha um produto </option>    
									<option value="BOLO" > Bolo </option>
									<option value="DOCE" > Doce </option>
									<option value="SALGADO" > Salgado </option>
									<option value="NOVIDADE"> Novidade </option>
								</select>
								</div>
							</p>
							<br/>
							
							<p>Foto do Produto</p>
							<input type="file" id="arquivo" name="arquivo" required>
							
							<input type="submit" name="" value="Salvar">

                
            </form>               
                </div>
            </div>
        </div>

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
         
    </body>
</html>
