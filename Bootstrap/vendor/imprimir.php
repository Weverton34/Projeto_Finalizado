<?php 
	
	require_once'autoload.php';
	use Dompdf\Dompdf;
	
	if(isset($_POST['gerar'])){
		
	
	$emissor = filter_input(INPUT_POST, 'emissor', FILTER_SANITIZE_STRING);
	$beneficiario = filter_input(INPUT_POST, 'beneficiario', FILTER_SANITIZE_STRING);
	$cpf_cnpj = filter_input(INPUT_POST, 'cpf_cnpj');
	$endereco = filter_input(INPUT_POST, 'endereco_beneficiario');
	$agencia = filter_input(INPUT_POST, 'agencia');
	$conta = filter_input(INPUT_POST, 'conta');
	$nosso_numero = filter_input(INPUT_POST, 'nosso_numero');
	$convenio = filter_input(INPUT_POST, 'convenio');
	$cpf_cnpj_pagador = filter_input(INPUT_POST, 'cpf_cnpj_pagador');
	$data_vencimento = filter_input(INPUT_POST, 'data_vencimento');
	$valor = filter_input(INPUT_POST, 'valor');
	$instrucoes1 = filter_input(INPUT_POST, 'instrucoes1');
	$pagador = filter_input(INPUT_POST, 'pagador');
	
//variável do código HTML que é inserido no PDF	
$html = '<html>
    <head>
    </head>
    <body>
      <div class="container">
      <img src="../img/bancobrasil.png" width="740" height="65">
     </div><br/>
      
     <form action="boleto.php" method="post" target="_blank">
       <table>
              <tr>
                <td>
                  <label for="emissor">Emissor:</label>
                </td>
                <td>
                 <input type="hidden" id="id" value="emissor">'.$emissor.'
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <br>
                  <span>Dados do Beneficiário</span>
                  <hr style="width:600px;"></hr>
                  <br>
                </td>
              </tr>
              <tr>
                <td>
                <label for="nm_banco">Banco do Brasil</label>
                </td>
              </tr>
              <tr>
               <td>
                  <label for="cedente">Beneficiário:</label>
                </td>
                <td>
				<input name="cedente" type="" id="cedente" value="">'.$beneficiario.' 
                </td>
              </tr>
              <tr>
                <td>
                  <label for="cpf_cnpj">CPF/CNPJ:</label>
                </td>
                <td>
                  <input name="cpf_cnpj" type="" id="cpf_cnpj" value="">'.$cpf_cnpj.'
                </td>
              </tr>
              <tr>
                <td>
                   <label for="endereco1">Endereço:</label>
                 </td>
                <td>
                   <input type="" placeholder="" 
                      maxlength="150" size="70" 
                    name="endereco_beneficiario" 
                    id="endereco_beneficiario" required />'.$endereco.'
                </td>
              </tr>
              <tr>
                <td>
                   <label for="agencia">Agência:</label>
                </td>
                <td>
                  <input name="agencia" placeholder="" 
                    type="" id="agencia" 
                   value="" size="4" maxlength="4" required />'.$agencia.'
               </td>
              </tr>
              <tr>
                <td>
                  <label for="conta">Conta:</label>
                </td>
                <td>
                  <input name="conta" placeholder="" 
                   type="" id="conta" 
                   value="" size="7" maxlengt="7" required />'.$conta.'
                </td>
              </tr>                
              <tr>
                <td>
                   <label for="nossonumero">
                     Nosso N°:</label>
                </td>
                <td>
                  <input name="nosso_numero" 
                   placeholder="" type="" 
                   id="nosso_numero" value="" 
                    size="11"maxlength="11" required />'.$nosso_numero.'
                </td>
              </tr>
              <tr>
                <td>
                  <label for="convenio">Convênio:</label>
                </td>
                <td>
                  <input name="convenio" placeholder="" type="" 
                   id="convenio" value="" size="8" maxlength="8" 
                   required />'.$convenio.'
                </td>
              </tr>
              <tr>
                <td colspan="2">
                  <br>
                  <span>Dados do pagador</span>
                  <hr style="width:600px;"></hr>
                  <br>
               </td>
              </tr>
              <tr>
                <td>
                  <label for="cpf_cnpj">CPF/CNPJ:</label>
                </td>
                 <td>
                   <input name="cpf_cnpj_pagador" 
                     type="" id="cpf_cnpj_pagador" value="" 
                     size="14" maxlength="14" required />'.$cpf_cnpj_pagador.'
                </td>
              </tr>
              <tr>
                <td>
                  <label for="data_vencimento">Data de vencimento:</label>
                </td>
                <td>
                  <input name="data_vencimento"
                    type="" id="data_vencimento" 
                    size="12" maxlength="10" placeholder="" required/>'.$data_vencimento.'
                </td>
              </tr>
              <tr>
                <td>
                  <label for="valor">Valor:</label>
                </td>
                <td>
                  <input type="" step="0.10" name="valor"
                   maxlength="17" id="valor" value="" 
                   placeholder="R$" size="10" required />'.$valor.'
                </td>
              </tr>
              <tr>
                <td>
                  <label for="instrucoes">
                     Instruções:</label>
                </td>
                <td>
                  <input name="instrucoes1" type="" 
                    id="instrucoes1" value=""  />'.$instrucoes1.'
                </td>
              </tr>        
              <tr>
                <td>
                  <label for="sacado">Pagador:</label>
                </td>
                <td>
                  <span><input name="sacado" 
                   type="" id="sacado" /></span>'.$pagador.'
                </td>
              </tr>
			  
             <br/> <img src="../img/codigobarra.png" width="740" height="75"><br/>
         </table>
       </form>
    </body>
  </html>';

// inicializando o objeto Dompdf
  $dompdf = new Dompdf();
  
  // carrega o código HTML no arquivo PDF
  $dompdf -> load_html ($html);
	
  // Renderizar o documento
  $dompdf -> render();
  
  // Salvo no diretório temporário do sistema e exibido para o usuário
  $dompdf -> stream("Boleto Bancário", array("Attachment" => false));
  
	}
  ?>