<header>
    <h3>Excluir Evento</h3>
</header>

<?php

$idEvento = mysqli_real_escape_string($conexao, $_GET["idEvento"]);

$sql = "DELETE FROM tbeventos WHERE idEvento = '{$idEvento}'";

$rs = mysqli_query($conexao, $sql) or die("Erro ao excluir registro. " . mysqli_error($conexao));

if($rs){
    ?>
    <div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Excluir Evento</h4>
  <p>Evento excluido com sucesso.</p>
  <hr>
  <p class="mb-0">
    <a href="?menuop=eventos">Voltar para a lista de eventos.</a>
  </p>
</div>
    <?php
}else{
    ?>
       <div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Erro</h4>
  <p>O Evento não pode ser excluido.</p>
  <hr>
  <p class="mb-0">
    <a href="?menuop=eventos">Voltar para a lista de eventos.</a>
  </p>
</div>
    <?php
}

?>