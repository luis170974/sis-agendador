<header>
    <h3>
        <i class="bi bi-calendar-check"></i> Inserir Evento
    </h3>
</header>

<?php

//strip_tags tira as tags, evitando de enviar caracteres indesejados ex: <h1>, deixando somente o texto

$tituloEvento = strip_tags(mysqli_real_escape_string($conexao, $_POST["tituloEvento"])); //limpa caracteres invalidos na inserção evitando ataques hackers
$descricaoEvento = strip_tags(mysqli_real_escape_string($conexao, $_POST["descricaoEvento"]));
$dataInicioEvento = strip_tags(mysqli_real_escape_string($conexao, $_POST["dataInicioEvento"]));
$horaInicioEvento = strip_tags(mysqli_real_escape_string($conexao, $_POST["horaInicioEvento"]));
$dataFimEvento = strip_tags(mysqli_real_escape_string($conexao, $_POST["dataFimEvento"]));
$horaFimEvento = strip_tags(mysqli_real_escape_string($conexao, $_POST["horaFimEvento"]));

$sql = "INSERT INTO tbeventos (
        tituloEvento,
        descricaoEvento,
        dataInicioEvento,
        horaInicioEvento,
        dataFimEvento,
        horaFimEvento

    )

    VALUES(
        '{$tituloEvento}', 
        '{$descricaoEvento}', 
        '{$dataInicioEvento}', 
        '{$horaInicioEvento}', 
        '{$dataFimEvento}', 
        '{$horaFimEvento}'
    )
    ";

   $rs = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta. " . mysqli_error($conexao));

   if($rs){
    ?>

    <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Inserir Evento</h4>
    <p>Evento inserido com sucesso.</p>
    <hr>
        <p class="mb-0">
        <a href="?menuop=eventos">Voltar para a lista de eventos.</a>
        </p>
    </div>

    <?php
        
   }
   else{
    ?>
       <div class="alert alert-danger" role="alert">
  <h4 class="alert-heading">Erro</h4>
  <p>O Evento não pode ser inserido.</p>
  <hr>
  <p class="mb-0">
    <a href="?menuop=tarefas">Voltar para a lista de eventos.</a>
  </p>
    </div>
    <?php

   }
    
?>