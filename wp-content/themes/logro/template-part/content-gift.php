<div class="main-notes g-border g-height-item-small ">
    <header class="g-pgeneral g-border-bottom">
      <h2 class="main-subtitle"><?php the_field('titulo_seccion_gifts','option') ?></h2>
    </header>
    <div class="main-notes__list g-height-item-small-gift main-scrollbar">
    <?php
    $category_id = get_cat_ID('GIFTS');

    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 10,
      'cat' => $category_id
  );

  $post_query = new WP_Query($args);

  if ($post_query->have_posts()) {
      while ($post_query->have_posts()) {
          $post_query->the_post();
    ?>
      <article class="main-notes__item g-border-top g-pgeneral-10">
        <a href="<?php the_permalink(); ?>" class="main-notes__text">
          <h3 class="main-subtitle main-subtitle__small g-textshort-one "><?php the_title(); ?></h3>
          <div class="main-description g-textshort-one no-mobile "><?php the_excerpt(); ?></div>
        </a>
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