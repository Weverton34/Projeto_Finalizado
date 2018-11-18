<!doctype html>
<html lang="pt-br">
    <head>
        <title> Bootstrap 4</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/receitas.css">
    </head>
    <body>
	<!--Botão de Voltar-->
		<a href = "controle_adm_receita.php" class="btn btn-info" role="button">Voltar</a>
		<br/> <br/>
		<!--Fim Botão de Voltar-->
        <div class="container">
            <div class="row">
                <div class="receita">
                    <h1 class="titulo">Receitas</h1>
            <form method="POST" action="upload_receita.php" enctype="multipart/form-data">
              
                <input type="text" name="nome" placeholder="Nome" required="">

                <textarea name="descricao" rows="100" cols="47" placeholder="Descrição" required=""></textarea>
				
                <p>Foto da receita</p>
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
        <script type=""></script>
        
    </body>
</html>
