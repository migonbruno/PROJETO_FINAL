

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>












<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>

<script>
$(document).ready(function(){
  $('.date').mask('00/00/0000');
  $('.time').mask('00:00:00');
  $('.date_time').mask('00/00/0000 00:00:00');
  $('.cep').mask('00000-000');
  $('.phone').mask('0000-0000');
  $('.phone_with_dd').mask('(00) 00000-0000');
  $('.phone_us').mask('(000) 000-0000');
  $('.mixed').mask('AAA 000-S0S');
  $('.cpf').mask('000.000.000-00', {reverse: true});
  $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
  $('.money').mask('000.000.000.000.000,00', {reverse: true});
  $('.money2').mask("#.##0,00", {reverse: true});
  $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ', {
    translation: {
      'Z': {
        pattern: /[0-9]/, optional: true
      }
    }
  });
  $('.ip_address').mask('099.099.099.099');
  $('.percent').mask('##0,00%', {reverse: true});
  $('.clear-if-not-match').mask("00/00/0000", {clearIfNotMatch: true});
  $('.placeholder').mask("00/00/0000", {placeholder: "__/__/____"});
  $('.fallback').mask("00r00r0000", {
      translation: {
        'r': {
          pattern: /[\/]/,
          fallback: '/'
        },
        placeholder: "__/__/____"
      }
    });
  $('.selectonfocus').mask("00/00/0000", {selectOnFocus: true});
});

</script>

<?php require "includes/header.php" ?>
<div class="col-md-10">
	<div class="row">
		<div class="col-md-10">
			<div class="content-box-large">
				<div class="panel-heading">
					<div class="panel-title">
						<h1>Cadastre cliente</h1>
					</div>
				</div>
				<div class="content">
					<div class="panel-body">
						<form method="post" action="cliente-cadastrar.php" enctype="multipart/form-data" role="form">
							<div class="form-group col-lg-6">
								<label for="nome">Nome:</label>
								<input type="text" class="form-control" id="nome" placeholder="Nome" name="nome"  required="nome">
							</div>
							<div class="form-group col-lg-6">
								<label for="email">E-mail:</label>
								<input type="email" class="form-control" id="email" placeholder="E-mail" name="email" required="e-mail">
							</div>
							<div class="form-group col-lg-6">
								<label for="senha">Senha:</label>
								<input type="password" class="form-control" id="senha" placeholder="Senha" name="senha"  required="senha">
							</div>
							<div class="form-group col-lg-6">
								<label for="celular">Celular:</label>
								<input type="text" class="form-control phone_with_dd" id="phone_with_dd" placeholder="Celular"
									name="phone_with_dd"  required="phone_with_dd"></div>
							<div class="form-group col-lg-6">
								<label for="telefone">Telefone:</label>
								<input type="text" class="form-control phone" id="phone" placeholder="Telefone"
									name="phone"  required="phone"></div>

							<div class="form-group col-lg-6">
								<label for="dtnasc">Data de Nascimento:</label>
								<input type="date" class="form-control dynasc" id="dtnasc" placeholder="Data de Nascimento"
									name="dtnasc"  required="dtnasc">
							</div>
							<div class="form-group col-lg-6">
								<label for="cpf">CPF:</label>
								<input type="text" class="form-control cpf" id="cpf" placeholder="CPF" name="cpf" maxlength="14" pattern="[\d.-]{14}"  required="cpf">
							</div>
							<div class="form-group col-lg-6">
								<label for="cep">CEP:</label>
								<input type="text" class="form-control cep" id="cep" placeholder="CEP" name="cep"  required="cep">
							</div>
							<div class="form-group col-lg-6">
								<label for="endereco">Endereço:</label>
								<input type="text" class="form-control" id="endereco" placeholder="Endereço"
									name="endereco"  required="endereco" />
							</div>
							<div class="form-group col-lg-6">
								<label for="numero">Número:</label>
								<input type="text" class="form-control" id="numero" placeholder="Número" name="numero" required="numero">
							</div>
							<div class="form-group col-lg-6">
								<label for="complemento">Complemento:</label>
								<input type="text" class="form-control" id="complemento" placeholder="Complemento"
									name="complemento"  required="complemento">
							</div>
							<div class="form-group col-lg-6">
								<label for="bairro">Bairro:</label>
								<input type="text" class="form-control" id="bairro" placeholder="Bairro"
									name="bairro"  required="bairro"/>
							</div>
							<div class="form-group col-lg-6">
								<label for="cidade">Cidade:</label>
								<input type="text" class="form-control" id="cidade" placeholder="Cidade"
									name="cidade" required="cidade" />
							</div>
							<div class="form-group col-lg-6">
								<label for="estado">Estado:</label>
								<input type="text" class="form-control" id="uf" placeholder="Estado" name="estado" required="estado" />
							</div>
							<div class="form-group ">
								<label class="col-sm-2 control-label">Imagem:</label>
								<input type="file" name="imagem" class="btn btn-primary" id="imagem" required="imagem">
							</div>

							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
								<input type="submit" class="btn btn-success" value="Cadastrar" name="btnCadUsuario"/>
						
									<a href="cliente-lista.php"><button type='button'
											class='btn btn-danger '>Listar</button></a>
								</div>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>








</section>
<?php //require "includes/footer.php" ?>