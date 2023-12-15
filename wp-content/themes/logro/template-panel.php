<?php
/**
 * Template Name: Panel
 * Template Post Type: page
 * 
 * @package WordPress
 * @subpackage venture
 * @since 1.0.0
 */

 get_header();
?>

<style>

#loading {
    text-align: center;
    padding: 20px;
    display: none;
}

</style>

  <section class="main-content height-full main-content__large main-grid__custom">
    <div class="main-left ">
      <div class="main-logos g-mb-mobile g-border g-height-left-container">
        <header class="g-pgeneral g-border-bottom">
          <h2 class="main-subtitle">Logos</h2>
        </header>
        <div class="main-logos__list g-height-left-item main-scrollbar  <?php echo wp_is_mobile() ? 'g-mobile' : 'g-desk'; ?> ">
          <div class="<?php echo wp_is_mobile() ? 'slider-logos' : ''; ?> ">
        <?php
          // Argumentos para la consulta
          $args = array(
              'post_type' => 'customer',
              'posts_per_page' => -1 // Obtener todos los posts
          );

          // La consulta
          $clientes_query = new WP_Query($args);

          // Loop a través de los posts
          if ($clientes_query->have_posts()) {
              while ($clientes_query->have_posts()) {
                  $clientes_query->the_post();
                  ?>
                  <article class="main-logos__item g-border-top">
                      <div class="main-logos__img">
                      <?php if(get_field('logo_cliente')['logo_principal']):?>
                        <img src=" <?php echo get_field('logo_cliente')['logo_principal']; ?>" alt="">
                      <?php else: ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="31.638" height="30.089" viewBox="0 0 31.638 30.089"><path id="Trazado_166" data-name="Trazado 166" d="M56.168,1360.932l4.888,9.9,10.931,1.588-7.909,7.71,1.867,10.886-9.777-5.14-9.777,5.14,1.867-10.886-7.909-7.71,10.931-1.588Z" transform="translate(-40.349 -1360.932)" fill="gray"/></svg>
                      <?php endif; ?>
                      </div>
                      <div class="main-logos__name">
                          <h3><?php the_title(); ?></h3> <!-- Título del post (nombre del cliente) -->
                      </div>
                  </article>
                  <?php
              }
              wp_reset_postdata(); // Restablecer datos del post
          } else {
              // No hay posts encontrados
              echo '<p class="main-description">No se encontraron entradas.</p>';
          }
          ?>
          </div>
        </div>

      </div>
    </div>
    <div class="main-center">
      <div class="main-notes g-mb-mobile g-border g-height-center-container">
        <div class="g-border-bottom">
          <header class="g-pgeneral flex-header">
            <h2 class="main-subtitle">Notas</h2>
            <div class=" main-formsearch  g-mobile">
              <form class="main-formsearch__form" action="" method="get">
                 <div class="main-formsearch__input">
                  <input type="search" id="search" name="q" placeholder="Buscar nota">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20.909" height="20.309" viewBox="0 0 20.909 20.309">
                    <g id="Grupo_160" data-name="Grupo 160" transform="translate(-757.227 -1238.703)">
                      <circle id="Elipse_39" data-name="Elipse 39" cx="7.956" cy="7.956" r="7.956" transform="translate(757.727 1239.203)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
                      <line id="Línea_254" data-name="Línea 254" x2="6.187" y2="6.187" transform="translate(771.595 1252.471)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
                    </g>
                  </svg>
                 </div>
                  
              </form>
            
            </div>
          </header>
          
          <div class="g-main-grid__two main-formsearch g-pgeneral g-mb20 no-mobile">
            <form class="main-formsearch__form" action="" method="get">
               <div class="main-formsearch__input">
                <input type="search" id="ajax-search-input" name="q" placeholder="Buscar nota">
                <svg xmlns="http://www.w3.org/2000/svg" width="20.909" height="20.309" viewBox="0 0 20.909 20.309">
                  <g id="Grupo_160" data-name="Grupo 160" transform="translate(-757.227 -1238.703)">
                    <circle id="Elipse_39" data-name="Elipse 39" cx="7.956" cy="7.956" r="7.956" transform="translate(757.727 1239.203)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
                    <line id="Línea_254" data-name="Línea 254" x2="6.187" y2="6.187" transform="translate(771.595 1252.471)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
                  </g>
                </svg>
               </div>
                
            </form>
            <div class="g-main-grid__12 ">
              <p class="main-formsearch__text main-description">
                Buscar Nota por:
              </p>
              <div>
              <?php
              $categories = get_categories(array(
                  'orderby' => 'name',
                  'order'   => 'ASC'
              ));

              foreach ($categories as $category) {
                  if ($category->count > 0) {
                    if($category->name != 'GIFTS'){
                      echo '<a id="category_id_'.$category->term_id.'" data-category="'.$category->term_id.'" href="#category_id_'.$category->term_id.'" class="main-description category-filter">' . $category->name . ' - </a>';
                    }
                  }
              }
              ?>
              </div>
            </div>
          </div>
        </div>
        <div class="main-notes__list g-height-center-item main-scrollbar content-notes__list">
          <?php
          $category_id = get_cat_ID('GIFTS');

          $args = array(
            'post_type' => 'post',
            'posts_per_page' => 5,
            'category__not_in' => array($category_id) 
        );

        $post_query = new WP_Query($args);

        if ($post_query->have_posts()) {
            while ($post_query->have_posts()) {
                $post_query->the_post();
                get_template_part('template-part/content-post'); 
              }
              wp_reset_postdata(); 
          } else {
            echo '<p class="main-description">No se encontraron entradas.</p>';
          }
          ?>
          <!-- <div id="loading" style="display: none;">Cargando...</div> -->
        </div>
      </div>
    </div>
    <div class="main-right">
      <div class="g-height-center-container">
        <div class="main-works g-mb-mobile g-border g-height-item-small g-mb20">
          <header class="g-pgeneral">
            <h2 class="main-subtitle">Works</h2>
          </header>
          <div class="main-works__list g-mb20 slider-center ">
          <?php
          // Argumentos para la consulta
          $args = array(
              'post_type' => 'customer',
              'posts_per_page' => -1 // Obtener todos los posts
          );

          // La consulta
          $clientes_query = new WP_Query($args);

          // Loop a través de los posts
          if ($clientes_query->have_posts()) {
              while ($clientes_query->have_posts()) {
                  $clientes_query->the_post();
                  ?>
            <article class="main-works__item g-border">
              <div class="main-works__img">
                <?php if(get_field('trabajo_cleinte')['trabajo_principal']):?>
                    <img src=" <?php echo get_field('trabajo_cleinte')['trabajo_principal']; ?>" alt="">
                <?php endif; ?>
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
        <div class="main-shops g-border g-height-item-small g-mb20 ">
          <header class="g-pgeneral">
            <h2 class="main-subtitle">Shops</h2>
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
        <div class="main-notes g-border g-height-item-small ">
          <header class="g-pgeneral g-border-bottom">
            <h2 class="main-subtitle">GIFTS</h2>
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
      </div>
      
    </div>
  </section>

  <?php get_footer(); ?>