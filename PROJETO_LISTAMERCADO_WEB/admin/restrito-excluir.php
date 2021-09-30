<?php 

$codadm = $_GET['codadm'];

require_once "restrito.class.php";

$restrito = new Restrito();
$restrito->codadm = $codadm;
$restrito->excluir();
$msg = "Excluido com sucesso!";

?>

<?php $title = "Excluir Usuario"; ?>
<?php include "includes/header.php"; ?>

<section class="container">
    <?php echo $msg; ?>
</section>

<?php include "includes/footer.php"; ?>