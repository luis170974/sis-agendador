<?php

include("db/conexao.php");

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="./css/style-default.css">
    <title>Sistema Agendador 1.0</title>

    
</head>
<body>
    <header class="bg-dark">

    <div class="container">
        <h1>Sistema Agendador 1.0</h1>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
       
        <a  class="navbar-brand" href="#">

            <img src="img/logo_agendador.png" alt="sis-agendador" width="120">

        </a>
        




         

        
    
        <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">

            <ul class="navbar-nav mr-auto">
                <li class="nav-item active"><a class="nav-link" href="index.php?menuop=home">Home</a></li>
                <li class="nav-item active"><a class="nav-link" href="index.php?menuop=contatos">Contato</a></li>
                <li class="nav-item active"><a class="nav-link" href="index.php?menuop=tarefas">Tarefas</a></li>
                <li class="nav-item active"><a class="nav-link" href="index.php?menuop=eventos">Eventos</a></li>
            
            </ul>

        </div>
    </nav>

    </div>
    </header>

    <main>
        <div class="container">
        <?php

            $menuop = (isset($_GET["menuop"]))?$_GET["menuop"]:"home";

            switch($menuop){
                case 'home':
                    include("./pages/home/home.php");
                    break;

                case 'contatos':
                    include("./pages/contatos/contatos.php");
                    break;

                case 'cad-contato':
                    include("./pages/contatos/cad-contato.php");
                    break;

                case 'inserir-contato':
                    include("./pages/contatos/inserir-contato.php");
                    break;

                case 'editar-contato':
                    include("./pages/contatos/editar-contato.php");
                    break;

                case 'atualizar-contato':
                    include("./pages/contatos/atualizar-contato.php");
                    break;

                case 'excluir-contato':
                    include("./pages/contatos/excluir-contato.php");
                    break;

                case 'tarefas':
                    include("./pages/tarefas/tarefas.php");
                    break;

                case 'cad-tarefa':
                    include("./pages/tarefas/cad-tarefa.php");
                    break;

                case 'inserir-tarefa':
                    include("./pages/tarefas/inserir-tarefa.php");
                    break;

                case 'editar-tarefa':
                    include("./pages/tarefas/editar-tarefa.php");
                    break;

                case 'atualizar-tarefa':
                    include("./pages/tarefas/atualizar-tarefa.php");
                    break;
                
                case 'excluir-tarefa':
                    include("./pages/tarefas/excluir-tarefa.php");
                    break;

                case 'eventos':
                    include("./pages/eventos/eventos.php");
                    break;

                case 'cad-evento':
                    include("./pages/eventos/cad-evento.php");
                    break;
    
                case 'inserir-evento':
                    include("./pages/eventos/inserir-evento.php");
                    break;
    
                case 'editar-evento':
                    include("./pages/eventos/editar-evento.php");
                    break;
    
                case 'atualizar-evento':
                    include("./pages/eventos/atualizar-evento.php");
                    break;
                    
                case 'excluir-evento':
                    include("./pages/eventos/excluir-evento.php");
                    break;
                        
                default: 
                    include("./pages/home/home.php");
                    break;
            }
        
        ?>
    </div>
    </main>

    <footer class="container-fluid bg-dark text-light">

            <div class="text-center">SIS Agendador V 1.0</div>

    </footer>


<script src="./js/jquery.js"></script>
<script src="./js/jquery.form.js"></script>
<script src="./js/upload.js"></script>
<script src="./js/javascript-agendador.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
<script src="./js/validation.js"></script>



</body>
</html>