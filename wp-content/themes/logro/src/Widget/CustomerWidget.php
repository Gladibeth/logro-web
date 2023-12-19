<?php

class CustomerWidget extends WP_Widget {

    public function __construct() {
        parent::__construct(
            'clientes_widget', // ID del widget
            'Clientes', // Nombre del widget
            array( 'description' => 'Muestra una lista de logos de clientes' ) // Descripción
        );
    }

    public function widget( $args, $instance ) {
        // Aquí es donde consultas tu CPT y muestras los resultados
        $clientes_query = new WP_Query(array(
            'post_type' => 'customer',
            'posts_per_page' => -1 // Puedes limitar el número de logos aquí
        ));

        echo $args['before_widget'];

        if ($clientes_query->have_posts()) {
            echo '<div class="main-logos__list g-height-left-item main-scrollbar g-desk">';
            while ($clientes_query->have_posts()) {
                $clientes_query->the_post();
                // Aquí es donde insertarás tu HTML para cada logo
                echo '<article class="main-logos__item g-border-top">';
                echo '<div class="main-logos__img">';
                // Aquí asumimos que el logo está almacenado como un campo personalizado o post thumbnail
                the_post_thumbnail(); 
                echo '</div>';
                echo '<div class="main-logos__name">';
                echo '<h3>' . get_the_title() . '</h3>';
                echo '</div>';
                echo '</article>';
            }
            echo '</div>';
        }

        wp_reset_postdata();
        echo $args['after_widget'];
    }
}
