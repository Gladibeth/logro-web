jQuery(document).ready(function($){
    var page = 2;
    var loading = false;
    var $scrollContainer = $(".content-notes__list");
    var $content = $(".content-notes__list");
    var $loading = $("#loading");

    $scrollContainer.scroll(function() {
        var scrollHeight = $scrollContainer.get(0).scrollHeight;
        var scrollPosition = $scrollContainer.height() + $scrollContainer.scrollTop();
        var distanceToEnd = scrollHeight - scrollPosition;

        if (!loading && distanceToEnd < 200) { // Disminuir este número si es necesario
            loading = true;
            $loading.show();

            $.ajax({
                url: post.ajaxurl,
                type: 'post',
                data: {
                    page: page,
                    action: 'load_more_posts'
                },
                success: function(response) {
                    if (response) {
                        page++;
                        $content.append(response);
                    } else {
                        $scrollContainer.off("scroll");
                    }
                },
                complete: function() {
                    loading = false;
                    $loading.hide();
                }
            });
        }
    });
});
