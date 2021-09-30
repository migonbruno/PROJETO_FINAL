<?php 

$codservico = $_GET['codservico'];

require "Servico.class.php";

$servico = new Servico();
$servico->codservico = $codservico;
$servico->excluir();
$msg = "Excluido com sucesso!";

?>

<?php $title = "Excluir Serviço"; ?>
<?php include "includes/header.php"; ?>

<section class="container">
    <?php echo $msg; ?>
</section>

<?php include "includes/footer.php"; ?>