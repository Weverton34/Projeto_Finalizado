<?php
session_start();
include("conexao.php");

 $cod = filter_input(INPUT_GET, "cod", FILTER_SANITIZE_NUMBER_INT); 
 $result_produto = "SELECT * FROM produto WHERE cod = '$cod'";
 $resultado_produto = mysqli_query($conexao, $result_produto);
 // $row_produto = ($resultado_produto);

?>



<!doctype html>
<html lang="pt-br">
    <head>
        <title> Cadastrar produtos</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/formulario.css">
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
<br/> <br/> <br/>
            <div class="formulario">
            
            <h1 class="titulo">Alterar produtos</h1>
            <form method="POST" action="altproduto.php">
                 <?php
                    while ($row_produto = mysqli_fetch_assoc($resultado_produto)) { ?>


                <input type="hidden" name="cod" value="<?php echo $row_produto['cod']; ?>">
              
                <input type="text" name="nome" placeholder="Nome" required value="<?php echo $row_produto ['nome']; ?>">

                <input type="text" name="descricao" placeholder="Descrição" required value="<?php echo $row_produto ['descricao']; ?>">
				
				<input type="text" name="preco" placeholder="Preço" OnKeyPress="formatar('##,##', this)" maxlength="5"required value="<?php echo $row_produto ['preco']; ?>">

                <p>Foto do Produto</p>
                <input type="file" id="arquivo" name="arquivo">
				
				<input type="submit" name="altproduto" value="Alterar">    
                
            </form>
            <?php }?>
        </div>
	
        <!-- Optional JavaScript
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="jquery/dist/jquery.js"></script>
        <script src="popper.js/dist/popper.min.js"></script>
        <script src="js/bootstrap.js"></script>
        
    </body>
</html>