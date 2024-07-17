$(document).ready(function(){
    // Atualiza flag Favorito Sim Ou Não
    $('.flagFavoritoContato').click(function(){
        var idContato = $(this).prop("id");
        var titulo = $(this).prop("title");

        if(titulo === "Favorito"){
            $(this).html('<i class="bi bi-star"></i>').prop("title","Não Favorito");
            $.getJSON('./pages/contatos/atualizaFavoritoContato.php?idContato='+idContato+'&flagFavoritoContato=0');
        }else{
            $(this).html('<i class="bi bi-star-fill"></i>').prop("title","Favorito");
            $.getJSON('./pages/contatos/atualizaFavoritoContato.php?idContato='+idContato+'&flagFavoritoContato=1');
        }

    })
})