<header>
    <h3>Inserir Contato</h3>
</header>

<?php

    $nomeContato = strip_tags (mysqli_real_escape_string($conexao, $_POST["nomeContato"])); //limpa caracteres invalidos na inserção evitando ataques hackers
    $emailContato = strip_tags (mysqli_real_escape_string($conexao, $_POST["emailContato"]));
    $telefoneContato = strip_tags (mysqli_real_escape_string($conexao, $_POST["telefoneContato"]));
    $enderecoContato = strip_tags (mysqli_real_escape_string($conexao, $_POST["enderecoContato"]));
    $sexoContato = strip_tags (mysqli_real_escape_string($conexao, $_POST["sexoContato"]));
    $dataNascContato = strip_tags (mysqli_real_escape_string($conexao, $_POST["dataNascContato"]));

    $sql = "INSERT INTO tbcontatos (
            nomeContato, 
            emailContato, 
            telefoneContato, 
            enderecoContato,
            sexoContato, 
            dataNascContato
        )

        VALUES(
            '{$nomeContato}', 
            '{$emailContato}', 
            '{$telefoneContato}', 
            '{$enderecoContato}', 
            '{$sexoContato}', 
            '{$dataNascContato}'
        )
        ";

       $rs = mysqli_query($conexao, $sql) or die("Erro ao executar a consulta. " . mysqli_error($conexao));

       if($rs){
        ?>
    
        <div class="alert alert-success" role="alert">
        <h4 class="alert-heading">Inserir Contato</h4>
        <p>Contato Inserido com sucesso.</p>
        <hr>
            <p class="mb-0">
            <a href="?menuop=tarefas">Voltar para a lista de contatos.</a>
            </p>
        </div>
    
        <?php
            
       }
       else{
        ?>
           <div class="alert alert-danger" role="alert">
      <h4 class="alert-heading">Erro</h4>
      <p>O contato não pode ser inserido.</p>
      <hr>
      <p class="mb-0">
        <a href="?menuop=tarefas">Voltar para a lista de contatos.</a>
      </p>
        </div>
        <?php
    
       }
        
    ?>
?>