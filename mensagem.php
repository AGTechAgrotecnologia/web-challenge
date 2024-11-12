<?php
if(isset($_SESSION['mensagem'])):
?>

<div class="alert alert-warning">
    <?=$_SESSION['mensagem']; ?>
    <button class="btn-close float-end" type="button"></button>
</div>

<?php
    unset($_SESSION['mensagem']);
endif;
?>