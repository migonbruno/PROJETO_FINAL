<?php include "topo.php"; ?>


<div class="container">
  <h2>Acesse sua conta</h2>
  <p>Crie, configure e compartilhe sua lista.</p>
  <form class="form-inline" action="usuario/usuario-autenticar.php">
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Seu email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Sua senha" name="pwd">
    </div>
    <div class="checkbox">
      <label><input type="checkbox" name="remember"> Remember me</label>
    </div>
    <button type="submit" class="btn btn-primary">Entrar</button>
  </form>
</div>


<?php include "rodape.php"; ?>