<?php include "topo.php"; ?>


	<div class="container" style="border:1px solid;">
  		<h2>Faça seu cadastro!</h2>
  			<form action="cadastro.php" method="post">
    			<div class="form-group">
				    <label for="usr">Nome de usuário:</label>
				    <input type="text" class="form-control" name="nome_usuario" id="nome_usario" aria-describedby="nomeHelp" placeholder="Nome">
				  </div>
				  
				  <div class="form-group">
				    <label for="exampleInputEmail1">Endereço de email:</label>
				    <input  type="email" class="form-control" name="email_usuario" id="email_usuario" aria-describedby="emailHelp" placeholder="Seu email">
				  </div>
				  
				  <div class="form-group">
				    <label for="tel">Celular:</label>
				    <input  type="tel" class="form-control" name="celular_usuario" id="celular_usuario" aria-describedby="telefoneHelp" placeholder="Celular">
				  </div>
				  
				  <div class="form-group">
				    <label for="pwd">Senha:</label>
				    <input  type="password" class="form-control" name="senha_usuario" id="senha_usuario" placeholder="Senha">
				  </div>
				  
				  <input type="hidden" name="id_usuario" value="id_usuario"> <input type="submit"  id="btn" class="btn btn-primary">
			</form>
	</div>
	

<?php include "rodape.php"; ?>
