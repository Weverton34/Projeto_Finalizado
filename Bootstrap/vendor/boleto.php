<html>
    <head>
	    <title>Simulação de Boleto</title>
		<meta charset="utf-8"/>
		
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
	<div class="container">
      <img src="../img/bancobrasil.png" width="665" height="65">
     </div><br/>
	 
     <form action="imprimir.php" method="POST" target="_blank">
       <table>
              <tr>
                <td>
                  <label for="emissor">Emissor</label>
                </td>
                <td>
                 <input type="text" maxlength="20" name="emissor" 
                  id="emissor_text" placeholder=
                  "Digite um nome para o emissor" 
                  size="40" required />
                 
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
                  <label for="cedente">Beneficiário</label>
                </td>
                <td>
                  <input type="text" id="cedente" value="" 
                   size="45" maxlength="100" placeholder="" name="beneficiario" required />
                </td>
              </tr>
			   
              <tr>
                <td>
                  <label for="cpf_cnpj">CPF/CNPJ</label>
                </td>
                <td>
                   <input placeholder="" name="cpf_cnpj" 
                     type="text" id="cpf_cnpj_beneficiario" 
                      value="" OnKeyPress="formatar('###.###.###-##', this)" maxlength="14" required />
                </td>
              </tr>
			  
              <tr>
                <td>
                   <label for="endereco_beneficiario">Endereço</label>
                 </td>
                <td>
                   <input type="text" placeholder="" 
                      maxlength="150" size="70" 
                    name="endereco_beneficiario" 
                    id="endereco_beneficiario" required/>
                </td>
              </tr>
			  
              <tr>
                <td>
                   <label for="agencia">Agência</label>
                </td>
                <td>
                  <input name="agencia" placeholder="" 
                    type="text" id="agencia" 
                   value="" size="4" maxlength="4" required />
               </td>
              </tr>
			  
              <tr>
                <td>
                  <label for="conta">Conta</label>
                </td>
                <td>
                  <input name="conta" placeholder="" 
                   type="text" id="conta" 
                   value="" size="7" maxlength="7" required />
                </td>
              </tr>
			             
              <tr>
                <td>
                   <label for="nossonumero">
                     Nosso N°</label>
                </td>
                <td>
                  <input name="nosso_numero" 
                   placeholder="(35) 99999-9999" type="text" 
                   id="nosso_numero" value="" 
                    size="15" maxlength="15" required />
                </td>
              </tr>
			   
              <tr>
                <td>
                  <label for="convenio">Convênio</label>
                </td>
                <td>
                  <input name="convenio" placeholder="" type="text" 
                   id="convenio" value="" size="8" maxlength="8" 
                   required />
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
                  <label for="cpf_cnpj">CPF/CNPJ</label>
                </td>
                 <td>
                   <input placeholder="" name="cpf_cnpj_pagador" 
                     type="text" id="cpf_cnpj_pagador" value="" OnKeyPress="formatar('###.###.###-##',this)"
                     size="14" maxlength="14" required />
                </td>
              </tr>
              <tr>
                <td>
                  <label for="data_vencimento">
                   Data de vencimento</label>
                </td>
                <td>
                  <input name="data_vencimento"
                    type="text" id="data_vencimento" OnKeyPress="formatar('##/##/####',this)"
                    size="12" maxlength="10" placeholder="dd/mm/aaaa" required />
                </td>
              </tr>
              <tr>
                <td>
                  <label for="valor">Valor</label>
                </td>
                <td>
                  <input type="text" step="0.10" name="valor"
                   maxlength="5" id="valor" value="" OnKeyPress="formatar('##,##', this)" 
                   placeholder="R$" required />
                </td>
              </tr>
              <tr>
                <td>
                  <label for="instrucoes">
                     Instruções </label>
                </td>
                <td>
                  <input placeholder="" name="instrucoes1" type="text" 
                    id="instrucoes1" value="" maxlength="90" size="70" />
                </td>
              </tr>        
              <tr>
                <td>
                  <label for="sacado">Pagador</label>
                </td>
                <td>
                  <span><input name="pagador" 
                   type="text" id="sacado" maxlength="100" 
                   placeholder="" required /></span>
				 </td>
				</tr>
				<tr>
                <td colspan="2">
                   <input type="submit" value="Gerar Boleto" name="gerar"/>
                </td>
              </tr>
			  
         </table>
		 <br/> <img src="../img/codigobarra.png" width="665" height="75"><br/>
       </form>
    </body>
  </html>