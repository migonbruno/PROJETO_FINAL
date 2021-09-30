
<script src="https://igorescobar.github.io/jQuery-Mask-Plugin/js/jquery.mask.min.js"></script>   
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.13.4/jquery.mask.min.js"></script>

<script>
$(document).ready(function(){
  $('.date').mask('00/00/0000');
  $('.time').mask('00:00:00');
  $('.date_time').mask('00/00/0000 00:00:00');
  $('.cep').mask('00000-000');
  $('.phone').mask('(00) 0000-0000');
  $('.phone_with_dd').mask('(00) 00000-0000');
  $('.phone_us').mask('(000) 000-0000');
  $('.mixed').mask('AAA 000-S0S');
  $('.cpf').mask('000.000.000-00', {reverse: true});
  $('.cnpj').mask('00.000.000/0000-00', {reverse: true});
  $('.money').mask("R$ 000.000.000.000,00", {reverse: false});
  $('.money2').mask("R$ #.###,00", {reverse: false});
  $('.ip_address').mask('0ZZ.0ZZ.0ZZ.0ZZ',
  $('.estado').mask('AA'), {
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
<?php
// Conexão com o banco de dados
include('conexao.php');
	if (isset($_POST['cadastrar'])) {
		// Recupera os dados dos campos
		$descricao = $_POST["descricao"];
		$categoria = $_POST["categoria"];
		$preco = $_POST["preco"];
	
		$imagem = $_FILES["imagem"];
		// Se a foto estiver sido selecionada
	if (!empty($imagem["name"])) {
		// Largura máxima em pixels
		$largura = 95000;
		// Altura máxima em pixels
		$altura = 980000;
		// Tamanho máximo do arquivo em bytes
		$tamanho = 1000000000;
		$error = array();
    	// Verifica se o arquivo é uma imagem
    	if(!preg_match("/^image\/(pjpeg|jpeg|png|gif|bmp)$/", $imagem["type"])){
     	   $error[1] = "Isso não é uma imagem.";
   	 	} 
		// Pega as dimensões da imagem
		$dimensoes = getimagesize($imagem["tmp_name"]);
		// Verifica se a largura da imagem é maior que a largura permitida
		if($dimensoes[0] > $largura) {
			$error[2] = "A largura da imagem não deve ultrapassar ".$largura." pixels";
		}
		// Verifica se a altura da imagem é maior que a altura permitida
		if($dimensoes[1] > $altura) {
			$error[3] = "Altura da imagem não deve ultrapassar ".$altura." pixels";
		}	
		// Verifica se o tamanho da imagem é maior que o tamanho permitido
		if($imagem["size"] > $tamanho) {
   		 	$error[4] = "A imagem deve ter no máximo ".$tamanho." bytes";
		}
		// Se não houver nenhum erro
		if (count($error) == 0) {
			// Pega extensão da imagem
			preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $imagem["name"], $ext);
        	// Gera um nome único para a imagem
        	$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
        	// Caminho de onde ficará a imagem
        	$caminho_imagem = "fotos/" . $nome_imagem;
			// Faz o upload da imagem para seu respectivo caminho
			move_uploaded_file($imagem["tmp_name"], $caminho_imagem);
			// Insere os dados no banco
			$sql = "insert into servico values(null,'".$descricao."','".$categoria."','".$preco."','".$nome_imagem."')";
			$resultado = mysqli_query($conexao,$sql); 
			if ($resultado){
				echo "Você foi cadastrado com sucesso.";
			}
		}
		// Se houver mensagens de erro, exibe-as
		if (count($error) != 0) {
			foreach ($error as $erro) {
				echo $erro . "<br />";
			}
		}
		}
	}
?>
<div class="col-md-10">
	<div class="row">
		<div class="col-md-12">
			<div class="content-box-large">
				<div class="panel-heading">
					<div class="panel-title">
						<h1>Cadastro Serviço</h1>
					</div>
					<div class="panel-options">
						<a href="servico-lista.php">
							<button type='button' class='btn btn-sm btn-success'>Listar</button></a>
						</a>
					</div>
				</div>
				<div class="panel-body">
					<form class="form-horizontal" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST"
						enctype="multipart/form-data" name="cadastro">
						<div class="form-group">
							<label class="col-sm-2 control-label">Descrição:</label>
							<input type="text" name="descricao" class="col-sm-5" id="descricao" required="descricao">
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label">Categoria:</label>
							<input type="text" name="categoria" class="col-sm-5" id="categoria" required="categoria">
						</div>
						<div class="form-group">
							<label class="col-sm-2 control-label"> Preço:</label>
							<input type="text" name="money2" id="money2" required="money2" class="form-group money2">
						</div>

						<div class="form-group ">
							<label class="col-sm-2 control-label">Imagem:</label>
							<input type="file" name="imagem" class="btn btn-primary" id="imagem" required="imagem">
						</div><br><br>
						<div class="col-sm-offset-2 col-sm-10">
							<input type="submit" name="cadastrar" class="btn btn-primary" value="Cadastrar" />
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
</div>

</section>
</body>

</html>
