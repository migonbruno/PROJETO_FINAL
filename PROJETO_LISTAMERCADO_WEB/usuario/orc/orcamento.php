<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>

<script>
  $(document).ready(function () {
    $('.date').mask('00/00/0000');
    $('.time').mask('00:00:00');
    $('.date_time').mask('00/00/0000 00:00:00');
    $('.cep').mask('00000-000');
    $('.phone').mask('0000-0000');
    $('.phone_with_dd').mask('(00) 00000-0000');
    $('.phone_us').mask('(000) 000-0000');
    $('.mixed').mask('AAA 000-S0S');
    $('.cpf').mask('000.000.000-00', { reverse: true });
    $('.cnpj').mask('00.000.000/0000-00', { reverse: true });
    $('.money').mask('000.000.000.000.000,00', { reverse: true });
    $('.money2').mask("#.##0,00", { reverse: true });
    $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
      translation: {
        'Z': {
          pattern: /[0-9]/, optional: true
        }
      }
    });
    $('.ip_address').mask('099.099.099.099');
    $('.percent').mask('##0,00%', { reverse: true });
    $('.clear-if-not-match').mask("00/00/0000", { clearIfNotMatch: true });
    $('.placeholder').mask("00/00/0000", { placeholder: "__/__/____" });
    $('.fallback').mask("00r00r0000", {
      translation: {
        'r': {
          pattern: /[\/]/,
          fallback: '/'
        },
        placeholder: "__/__/____"
      }
    });
    $('.selectonfocus').mask("00/00/0000", { selectOnFocus: true });
  });

</script>
<div id="geral">
  <div id="conteudo">
    <div id="inf">
      <h1 style="text-align: center">Orçamento online </h1>
      <table width="870" height="245" border="0" bgcolor="#FBF5EA">
        <tr>
          <td width="864">
            <form id="form1" name="form1" method="post" action="enviar_orc.php" align="center">
              <fieldset align="center">
                <p>
                  <legend ><strong>Envio de orçamento </strong></legend>
                </p>
                <table width="99%" border="0" align="center" cellpadding="5">
                  <tr>
                    <td width="322" height="32" align="left" valign="middle">
                      <p><label>Prestador de serviço:
                          <input name="nome" type="text" id="nome" size="45" />
                        </label>
                    </td>
                    <td width="302" valign="middle">
                      <p>E-mail:
                        <input name="email" type="text" id="email" size="40" />
                        <label></label>
                      </p>
                    </td>
                    <td width="191" valign="middle">
                      <p><label>Telefone: </label>

                        <label>
                          <input type="text" name="phone_with_dd" class="phone_with_dd" id="phone_with_dd" />
                        </label>
                      </p>
                    </td>
                  </tr>

                </table>
                <table width="851" border="0" align="center" cellpadding="5">
                  <tr>
                    <td width="302" valign="middle">
                      <p>Tipo de serviço:
                        <label for="servico"></label>
                        <select name="servico" class="validar" id="servico">
                          <option selected="selected">Outros</option>
                          <option>Reparo/manutenção</option>
                          <option>Troca de equipamentos</option>
                          <option>Visita técnica</option>
                        </select>
                      </p>
                    </td>
                    <td width="391" align="left">
                      <p>Equipamento:
                        <select name="servico" class="validar" id="servico">
                          <option selected="selected">Outros</option>
                          <option>Placa mãe</option>
                          <option>Fonte</option>
                          <option>Cooler</option>
                          <option>Placa de vídeo</option>
                          <option>SSD(Solid State Drive)</option>
                          <option>HD(Hard Disk)</option>
                        </select>
                      </p>
                    </td>
                    <tr>
                      <td width="391" align="left">
                        <p>Valor:
                          <label for="dinheiro">R$</label>
                          <input type="text" name="money" class="money" id="money" />
                        </p>
                      </td>
                      <td width="391" align="left">
                        <p>Quantidade:
                          <input name="quantidade" type="number" />
                        </p>
                      </td>
                  </tr>
                </td>
              </tr>
            </td>
          </td>
        </tr>
      </table>
      <table width="851" border="0" align="center" cellpadding="5">
        <a type="button" href="add.php"> Adicionar equipamento</a>
          <tr>
            <td width="88" rowspan="2" valign="top">
              <p>Descrição do serviço:</p>
            </td>
            <td width="377"><textarea name="observacoes" accesskey="t" id="observacoes" cols="60" rows="6"></textarea>
            </td>
            <td width="348" valign="top">
              <p><span class="font-2" id="marque"></span></p>
            </td>
          </tr>
          <tr>
            <td width="377" align="center"><input type="image" name="imageField" src="imagens/enviar.png" width="48" /></td>
            <td valign="top">&nbsp;</td>
          </tr>
      </table>
    </tr>
  </table>
      <div align="center"></div>
      </fieldset>
      </form>
      </td>
      </tr>
    </div>
  </div>