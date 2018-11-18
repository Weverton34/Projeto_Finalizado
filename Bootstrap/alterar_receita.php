<?php
session_start();
include("conexao.php");

 $cod = filter_input(INPUT_GET, "cod", FILTER_SANITIZE_NUMBER_INT); 
 $result_receita = "SELECT * FROM receita WHERE cod = '$cod'";
 $resultado_receita = mysqli_query($conexao, $result_receita);
 // $row_receita = ($resultado_receita);

?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title> Cadastrar receitas</title>
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
		<a href = "controle_adm_receita.php" class="btn btn-info" role="button">Voltar</a>
		<br/> <br/>
	<!--Fim Botão de Voltar-->
<br/> <br/> <br/>
            <div class="formulario">
            
            <h1 class="titulo">Alterar receitas</h1>
            <form method="POST" action="Rec.php">

                <?php
                   while ($row_receita = mysqli_fetch_assoc($resultado_receita)) { ?>

                <input type="hidden" name="cod" value="<?php echo $row_receita['cod']; ?>">
              
                <input type="text" name="nome" placeholder="Nome" required value="<?php echo $row_receita['nome']; ?>">

                <input type="text" name="descricao" placeholder="Descrição" required value="<?php echo $row_receita['descricao']; ?>">

                <p>Foto da Receita</p>
                <input type="file" id="arquivo" name="arquivo">
				
				<input type="submit" name="Rec" value="Alterar">
                
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