<?php
    require "Restrito.class.php";
    $restrito = new Restrito ();
    $dados = $restrito->lista();
?>

<?php $title = "Listagem de Usuários"; ?>
<?php include "includes/header.php" ?>


<div class="col-md-10">
	<div class="row">
		<div class="col-md-12">
			<div class="content-box-large">
				<div class="panel-heading">
					<div class="panel-title">
						<h1>Listar Restrito</h1>
					</div>
				</div>
				<div class="panel-body">

					<?php if($dados==null){ ?>
					<p>Nenhum usuário cadastrado</p>

					<?php } else{ ?>

					<table class="lista-dados">

						<div class="col-md-10">

							<div class="row">
								<div class="col-md-6">


									<div class="panel-body">
										<table class="table">
											<thead>
												<tr>
													<th>ID</th>
													<th>NOME</th>
													<th>EMAIL</th>
													<th>TELEFONE</th>
													<th>LOGIN</th>
													<th>SENHA</th>
												</tr>
											</thead>
											<?php
    
								
								 foreach($dados as $dado => $coluna){
												echo "<tr>";
												echo "<td>".$coluna['codadm']."</td>"; 
												echo "<td>".$coluna['nome']."</td>";
												echo "<td>".$coluna['email']."</td>";
												echo "<td>".$coluna['telefone']."</td>";
												echo "<td>".$coluna['login']."</td>"; 
												echo "<td>".$coluna['senha']."</td>"; 
											
													echo '<td>  <a href="visualizar.php?codadm='.$coluna['codadm'].  "&nome=" . $coluna['nome'] . "&email=" . $coluna['email'] . "&telefone=" . $coluna['telefone'] . "&login=" . $coluna['login'] . "&senha=" . $coluna['senha'] . '"> <input type="submit" class="btn btn-primary"  value="Visualizar"/>
												 <a href="restrito-excluir.php?codadm='.$coluna['codadm'].'"> <input type="submit" class="btn btn-danger"  value="Excluir"/></a></td>';
												echo "</tr>";
												echo "</tr>";
											}
											
											
								?>


											<?php } ?>
										</table>
									</div>
								</div>
							</div>
						</div>


				</div>
			</div>
		</div>
	</div>
</div>
</div>




</section>

<?php include "includes/footer.php" ?>