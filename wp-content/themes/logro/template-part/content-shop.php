<div class="main-shops g-border g-height-item-small g-mb20 ">
  <header class="g-pgeneral">
    <h2 class="main-subtitle"><?php the_field('titulo_seccion_shops','option') ?></h2>
  </header>
  <div class="main-shops__list g-main-grid__two g-pgeneral g-mb20">
  <?php
    $args = array(
      'post_type' => 'shops',
      'posts_per_page' => 4 
  );

  $post_query = new WP_Query($args);

  if ($post_query->have_posts()) {
      while ($post_query->have_posts()) {
          $post_query->the_post();
    ?>
    <article class="main-shops__item g-border g-pgeneral-10">
      <div  class="main-shops__text ">
        <a href="<?php echo get_field('enlace'); ?>" class="main-description g-textshort-one"><?php the_title(); ?></a>
      </div>
    </article>
    <?php
      }
      wp_reset_postdata();
      } else {
        echo '<p class="main-description">No se encontraron entradas.</p>';
      }
    ?>
  </div>
</div>