<?php
    include_once 'createAgendamento.php';
    if (!empty($mensagem)):
 ?> 
    
<div class='alert alert-warning alert-dismissible fade show' role='alert'>  
<?= $mensagem ?> 
<button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='close'></button>
</div>
<?php 
    endif;
?>
    
