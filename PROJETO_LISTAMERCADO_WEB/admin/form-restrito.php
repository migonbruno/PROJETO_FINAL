

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
		<div class="col-md-12">
			<div class="content-box-large">
				<div class="panel-heading">
					<div class="panel-title">
						<h1>Cadastre Usuário Restrito</h1>
					</div>
				</div>
				<div class="content">
					<div class="panel-body">
						<form method="post" action="restrito-cadastrar.php" enctype="multipart/form-data" role="form">
							<div class="form-group col-lg-6">
								<label class="col-sm-2 control-label">Nome:</label>
								<div class="col-sm-10">
									<input type="text" name="nome" class="form-control"  required="nome"/>
								</div>
							</div>

							<div class="form-group col-lg-6">
								<label class="col-sm-2 control-label">Email</label>
								<div class="col-sm-10">
									<input type="text"id="email" name="email" class="form-control" required="email">
								</div>
							</div>

							<div class="form-group col-lg-6">
								<label class="col-sm-2 control-label">Telefone</label>
								<div class="col-sm-10">
									<input type="text" id="phone"name="phone" class="form-control phone" required="phone" />
								</div>
							</div>

							<div class="form-group col-lg-6">
								<label class="col-sm-2 control-label">Login</label>
								<div class="col-sm-10">
									<input type="text" name="login" class="form-control" required="login" />
								</div>
							</div>

							<div class="form-group col-lg-6">
								<label class="col-sm-2 control-label">Senha</label>
								<div class="col-sm-10">
									<input type="text" name="senha" class="form-control" required="senha" />
								</div>
							</div>
							<input type="hidden" name="id" value="<?php echo $row_restrito['codadm']; ?>">
							<div class="form-group">
								<div class="col-sm-offset-2 col-sm-10">
									<button type="submit" class="btn btn-warning">Cadastrar</button>
									<a href="restrito-lista.php"><button type='button'
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

		