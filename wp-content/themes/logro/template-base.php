<?php
/**
 * Template Name: Página base
 * Template Post Type: page
 * 
 * @package WordPress
 * @subpackage venture
 * @since 1.0.0
 */

?>

<?php get_header(); ?>

  <section class="main-content height-full main-content__large main-grid__custom">
    <div class="main-left ">
      <div class="g-height-center-container">
        <div class="main-notes g-border g-height-container-small-notes g-mb20 g-desk">
          <header class="g-pgeneral g-border-bottom">
            <h2 class="main-subtitle"><?php the_field('titulo_seccion_notas','option') ?></h2>
          </header>
          <div class="main-notes__list g-height-item-small-notes main-scrollbar">
          <?php
          $category_id = get_cat_ID('GIFTS');

          $args = array(
              'post_type' => 'post',
              'posts_per_page' => 10,
              'category__not_in' => array($category_id) 
          );

        $post_query = new WP_Query($args);

        if ($post_query->have_posts()) {
            while ($post_query->have_posts()) {
                $post_query->the_post();
          ?>
            <article class="main-notes__item g-pgeneral-10 g-border-top">
              <a href="<?php the_permalink(); ?>" class="main-notes__text">
                <h3 class="main-subtitle main-subtitle__small  "><?php the_title(); ?></h3>
             
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
        <div class="main-logos g-mb-mobile g-border g-border g-height-container-small-notes">
          <header class="g-pgeneral g-border-bottom">
            <h2 class="main-subtitle"><?php the_field('titulo_seccion_logos','option') ?></h2>
          </header>
          <div class="main-logos__list g-height-item-small-notes main-scrollbar  <?php echo wp_is_mobile() ? 'g-mobile' : 'g-desk'; ?> ">
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

                $logo_cliente = get_field('logo_cliente',$clientes_query->ID);


                $clients_gallery = $logo_cliente['galeria_del_logo'];
                // var_dump($clients_gallery);
                $clients_gallery_item = [];

                if (is_array($clients_gallery)) {
                    $clients_gallery_item = array_map(function($item) {
                        return [
                            'url_image' => $item['imagen_galeria']['url'],
                            'title' => $item['titulo'],
                            'description' => $item['descripcion'],
                        ];
                    }, $clients_gallery);
            
                }

                  $info_general = get_field('informacion_general_del_cliente',$clientes_query->ID);
                  $info_general_item = [];

                  if (is_array($info_general)) {
                    $info_general_item = array_map(function($item1) {
                        return [
                            'title_info' => $item1['titulo'],
                            'description_info' => $item1['valor'],
                        ];
                    }, $info_general);
            
                }
                
                $url_article = get_field('enlace_de_articulo',$clientes_query->ID);

                $url_record = get_field('enlace_de_ficha',$clientes_query->ID);
                
                ?>

                <article class="main-logos__item g-border-top item-logo"  data-gallery='<?php echo json_encode($clients_gallery_item);?>' 
                data-info='<?php echo json_encode($info_general_item);?>'
                data-title='<?php echo the_title();?>'
                data-article='[<?php echo json_encode($url_article); ?>]'
                data-record='[<?php echo json_encode($url_record); ?>]'>
              <div class="main-logos__img">
                <?php if(get_field('logo_cliente')['logo_principal']):?>
                  <img src=" <?php echo get_field('logo_cliente')['logo_principal']; ?>" alt="">
                <?php else: ?>
                  <svg xmlns="http://www.w3.org/2000/svg" width="31.638" height="30.089" viewBox="0 0 31.638 30.089"><path id="Trazado_166" data-name="Trazado 166" d="M56.168,1360.932l4.888,9.9,10.931,1.588-7.909,7.71,1.867,10.886-9.777-5.14-9.777,5.14,1.867-10.886-7.909-7.71,10.931-1.588Z" transform="translate(-40.349 -1360.932)" fill="gray"/></svg>
                <?php endif; ?>        
              </div>
              <div class="main-logos__name">
                <h3><?php the_title(); ?></h3>
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
    </div>
    <div class="main-center">
      <div class="main-notes g-border g-height-center-container g-mb-mobile">
        <div class="main-notes__list g-height-center-item-single main-scrollbar">
          <article class="main-notes__item g-psingle">
            <div class="main-notes__text">
              <h3 class="main-subtitle main-subtitle__single"><?php the_title(); ?></h3>
              <div class="main-description main-description__single">
                <?php the_content(); ?>
              </div>
            </div>
          
          </article>
          
        </div>
      </div>
    </div>
    <div class="main-right">
      <div class="g-height-center-container">
        <!-- works -->
        <?php  get_template_part('template-part/content-work');  ?>

        <!-- shops -->
        <?php  get_template_part('template-part/content-shop');  ?>

        <!-- gift -->
        <?php  get_template_part('template-part/content-gift');  ?>

        
      </div>
      
    </div>
  </section>

  <?php get_footer(); ?>

