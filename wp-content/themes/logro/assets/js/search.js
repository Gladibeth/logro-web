jQuery(document).ready(function($){
    var typingTimer;
    var doneTypingInterval = 500;  // 500 ms
    var $input = $('#ajax-search-input');
    var $postContainer = $(".content-notes__list"); // El contenedor de tus posts

    $input.on('keyup', function () {
        clearTimeout(typingTimer);
        if ($input.val().length >= 3) {
            typingTimer = setTimeout(doneTyping, doneTypingInterval);
        } else if ($input.val().length === 0) {
            // Si la búsqueda se limpia, recargar los posts originales (opcional)
            location.reload(); // Esta línea recargará la página. Ajusta según tus necesidades.
        }
    });

    function doneTyping () {
        var query = $input.val();

        $.ajax({
            url: post.ajaxurl,
            type: 'post',
            data: {
                action: 'ajax_search',
                search: query
            },
            success: function(result) {
                $postContainer.html(result); // Reemplaza el contenido del contenedor de posts
                // Si necesitas detener el scroll infinito, puedes hacerlo aquí.
            }
        });
    }
});
