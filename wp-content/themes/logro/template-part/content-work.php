<div class="main-works g-mb-mobile g-border g-height-item-small g-mb20">
  <header class="g-pgeneral">
    <h2 class="main-subtitle"><?php the_field('titulo_seccion_works','option') ?></h2>
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

            $work_cliente = get_field('trabajo_cleinte',$clientes_query->ID);

            $work_gallery = $work_cliente['galeria_de_trabajo'];
            // var_dump($work_gallery);
            $work_gallery_item = [];

            if (is_array($work_gallery)) {
                $work_gallery_item = array_map(function($item) {
                    return [
                        'url_image' => $item['imagen_galeria_work']['url'],
                        'title' => $item['titulo'],
                        'description' => $item['descripcion'],
                    ];
                }, $work_gallery);
        
            }

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
      <article class="main-works__item g-border item-work"  data-gallery='<?php echo json_encode($work_gallery_item);?>' 
      data-gallery-secundary='<?php echo json_encode($clients_gallery_item);?>' 
            data-info='<?php echo json_encode($info_general_item);?>'
            data-title='<?php echo the_title();?>'
            data-article='[<?php echo json_encode($url_article); ?>]'
            data-record='[<?php echo json_encode($url_record); ?>]'
            >
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


