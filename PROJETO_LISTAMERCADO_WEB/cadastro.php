<?php

// para mostrar os erros (padrão)
ini_set('display_errors', 1);
ini_set('log_errors', 1);
error_reporting(E_ALL);

try{
    
	if($_SERVER['REQUEST_METHOD'] != 'POST')
    header("Location: registrar.php");
    
   // Variáveis ligando ao formulário
$nome_usuario = $_POST['nome_usuario'];
    if($nome_usuario=="") throw new Exception("nomeInválido!");
    
$email_usuario = $_POST['email_usuario'];
    if($email_usuario=="") throw new Exception("EmailInválido!");

$celular_usuario = $_POST['celular_usuario'];
    if($celular_usuario=="") throw new Exception("CelularInválido!");

	
$senha_usuario = $_POST['senha_usuario'];
    if($senha_usuario=="") throw new Exception("senhaInválida");

   
// inclue a conexao e faz a instancia (padrão) // 
require_once "Usuario.class.php";

    $usuario = new Usuario(); 
    $usuario->nome_usuario = $nome_usuario;
    $usuario->email_usuario = $email_usuario;
    $usuario->celular_usuario = $celular_usuario;
     $usuario->senha_usuario = $senha_usuario;

    $usuario->inserir();    	

    $msg = "Cadastrado com sucesso";

}catch(PDOException $e){
    $msg = "Contate o administrador";   
    echo $e->getMessage();
}catch(Exception $e){
    $msg = $e->getMessage();
}

?>
    
    


<?php $title ="Cadastro"; ?>

<section class="container">
    
    <?php header("location:minhalista.php"); ?>
        
</section>


    
	
	
	