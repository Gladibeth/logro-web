<?php
// Incluye el archivo header.php
get_header();
?>

<style>
    .content-page{
        min-height: 80vh; 
        max-width: 1400px; 
        margin: auto; 
        padding-top: 20px
    }
</style>

<div id="primary" class="content-area">
    <main id="main" class="site-main content-page" role="main">

        <?php
        while ( have_posts() ) : the_post();

            the_content();


            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;

        endwhile; 
        ?>

    </main>
</div>

<?php

get_footer();
?>
