<?php session_start(); ?>
<?php
   if(!isset($_SESSION['email_usuario'])) header("location: login.php");  
?>



<!DOCTYPE html>
<html>
  <head>
	<meta charset="utf-8">
    <title>Acesso Restrito</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/styles.css" rel="stylesheet">

  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.php">Usuário</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
					 <h1><a href="index.php">Visualizar Usuário</a></h1>
	                </div>
	              </div>
	           </div>
			   <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
					 <h1><a href="index.php">Listar Usuário</a></h1>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	       
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li class="current"><a href="index.php"><i class="glyphicon glyphicon-home"></i> Início</a></li>		
					<li class="submenu">
                         <a href="#">
                      <i class="glyphicon glyphicon-user"></i>Usuário
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
							<li><a href="form-usuario.php"><i class="icon-inbox"></i>Atualizar Cadastro</a></li>
                        </ul>
                    </li>
						<li class="submenu">
                         <a href="#">
                      <i class="glyphicon glyphicon-user"></i>Serviços
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
							<li><a href="orc/orcamento.php"><i class="icon-inbox"></i>Faça um orçamento </a></li>
							<li><a href="servico-lista.php"></a></li>
							<li><a href="servico-form-pesquisa-nome.php"></a></li> 
                        </ul>
                    </li>
					
					 <li class="current"><a href="usuario-sair.php"><i class="glyphicon glyphicon-log-out"></i>Sair</a></li>		
                </ul>
             </div>
		  </div>