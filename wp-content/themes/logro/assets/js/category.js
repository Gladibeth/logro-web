jQuery(document).ready(function($) {
    $('.category-filter').on('click', function(e) {
        e.preventDefault();

        var categoryId = $(this).data('category');

        $.ajax({
            url: post.ajaxurl,
            type: 'POST',
            data: {
                action: 'filter_posts_by_category',
                category_id: categoryId
            },
            success: function(response) {
                // Aquí actualizas tu contenedor de posts con los nuevos posts
                $(".content-notes__list").html(response);
            }
        });
    });
});