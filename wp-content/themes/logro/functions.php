<?php
/**
 * Funciones y definiciones del tema Logro
 * 
 * @package WordPress
 * @subpackage logro
 * @since 1.0.0
 */
// require_once get_template_directory() . '/src/Widget/CustomerWidget.php';

add_action('after_setup_theme', 'theme_logro_setup');
add_action('wp_enqueue_scripts', 'theme_logro_enqueue_styles');
add_action('wp_enqueue_scripts', 'theme_logro_enqueue_scripts');
add_action('acf/init', 'register_acf_options_pages');
add_action('after_setup_theme', 'register_logro_menus');
add_action( 'init', 'customer', 0 );
add_action( 'init', 'shops', 0 );
// ajax requests
add_action('wp_ajax_load_more_posts', 'load_more_posts');
add_action('wp_ajax_nopriv_load_more_posts', 'load_more_posts');
add_action('wp_ajax_ajax_search', 'ajax_search');
add_action('wp_ajax_nopriv_ajax_search', 'ajax_search');
add_action('wp_ajax_filter_posts_by_category', 'filter_posts_by_category');
add_action('wp_ajax_nopriv_filter_posts_by_category', 'filter_posts_by_category');

function theme_logro_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
}

function theme_logro_enqueue_styles() {
    wp_enqueue_style('logro-style', get_template_directory_uri() . '/assets/css/styles.css');
    wp_enqueue_style('my-hamburger-style', get_template_directory_uri() . '/assets/css/hamburge.css');
    wp_enqueue_style('slick', 'https://kenwheeler.github.io/slick/slick/slick.css');
    wp_enqueue_style('slick-theme', 'https://kenwheeler.github.io/slick/slick/slick/slick-theme.css');
}

function theme_logro_enqueue_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('slick', 'https://kenwheeler.github.io/slick/slick/slick.min.js', array('jquery'), null, true);
    wp_enqueue_script('logro-script', get_template_directory_uri() . '/assets/js/main.js', array('jquery', 'slick'), null, true);

    if (is_page_template('template-panel.php')) {
        wp_enqueue_script('logro-script-scroll', get_template_directory_uri() . '/assets/js/scroll.js', array('jquery'), null, true);
        wp_enqueue_script('logro-script-search', get_template_directory_uri() . '/assets/js/search.js', array('jquery'), null, true);
        wp_enqueue_script('logro-script-category', get_template_directory_uri() . '/assets/js/category.js', array('jquery'), null, true);


        wp_localize_script('logro-script-scroll', 'post', array(
            'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php'
        ));
        wp_localize_script('logro-script-search', 'post', array(
            'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php'
        ));
        wp_localize_script('logro-script-search', 'post', array(
            'ajaxurl' => site_url() . '/wp-admin/admin-ajax.php'
        ));
    }
}

function register_acf_options_pages() {
    if (function_exists('acf_add_options_page')) {
        acf_add_options_page(array(
            'page_title' => 'Tema Logro',
            'menu_title' => 'Tema Logro',
            'menu_slug' => 'theme-general-settings',
            'capability' => 'edit_posts',
            'redirect' => false
        ));
    }
}

function register_logro_menus() {
    register_nav_menus(
        array(
            'main-menu' => __('Menú Principal', 'logro'),
            'mobile-main-menu' => __('Menú Principal movil', 'logro'),
            'footer-menu' => __('Menú del Footer', 'logro')
        )
    );
}

// Registrar Custom Post Type cliente
function customer() {

    $labels = array(
        'name'                  => _x( 'Clientes', 'Post Type General Name', 'logro' ),
        'singular_name'         => _x( 'Cliente', 'Post Type Singular Name', 'logro' ),
        'menu_name'             => __( 'Clientes', 'logro' ),
        'name_admin_bar'        => __( 'Cliente', 'logro' ),
        'archives'              => __( 'Archivos de Clientes', 'logro' ),
        'attributes'            => __( 'Atributos de Clientes', 'logro' ),
        'parent_item_colon'     => __( 'Cliente Padre:', 'logro' ),
        'all_items'             => __( 'Todos los Clientes', 'logro' ),
        'add_new_item'          => __( 'Añadir Nuevo Cliente', 'logro' ),
        'add_new'               => __( 'Añadir Nuevo', 'logro' ),
        'new_item'              => __( 'Nuevo Cliente', 'logro' ),
        'edit_item'             => __( 'Editar Cliente', 'logro' ),
        'update_item'           => __( 'Actualizar Cliente', 'logro' ),
        'view_item'             => __( 'Ver Cliente', 'logro' ),
        'view_items'            => __( 'Ver Clientes', 'logro' ),
        'search_items'          => __( 'Buscar Cliente', 'logro' ),
        'not_found'             => __( 'No encontrado', 'logro' ),
        'not_found_in_trash'    => __( 'No encontrado en la Papelera', 'logro' ),
        'featured_image'        => __( 'Imagen Destacada', 'logro' ),
        'set_featured_image'    => __( 'Establecer imagen destacada', 'logro' ),
        'remove_featured_image' => __( 'Eliminar imagen destacada', 'logro' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'logro' ),
        'insert_into_item'      => __( 'Insertar en cliente', 'logro' ),
        'uploaded_to_this_item' => __( 'Subido a este cliente', 'logro' ),
        'items_list'            => __( 'Lista de clientes', 'logro' ),
        'items_list_navigation' => __( 'Navegación de lista de clientes', 'logro' ),
        'filter_items_list'     => __( 'Filtrar lista de clientes', 'logro' ),
    );
    $args = array(
        'label'                 => __( 'Cliente', 'logro' ),
        'description'           => __( 'Clientes principales', 'logro' ),
        'labels'                => $labels,
        'supports'              => array( 'title' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-list-view',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'customer', $args );

}

// Registrar Custom Post Type cliente
function shops() {

    $labels = array(
        'name'                  => _x( 'Shops', 'Post Type General Name', 'logro' ),
        'singular_name'         => _x( 'Shop', 'Post Type Singular Name', 'logro' ),
        'menu_name'             => __( 'Shops', 'logro' ),
        'name_admin_bar'        => __( 'Shop', 'logro' ),
        'archives'              => __( 'Archivos de shops', 'logro' ),
        'attributes'            => __( 'Atributos de shops', 'logro' ),
        'parent_item_colon'     => __( 'shop Padre:', 'logro' ),
        'all_items'             => __( 'Todos los shops', 'logro' ),
        'add_new_item'          => __( 'Añadir Nuevo shop', 'logro' ),
        'add_new'               => __( 'Añadir Nuevo', 'logro' ),
        'new_item'              => __( 'Nuevo shop', 'logro' ),
        'edit_item'             => __( 'Editar shop', 'logro' ),
        'update_item'           => __( 'Actualizar shop', 'logro' ),
        'view_item'             => __( 'Ver shop', 'logro' ),
        'view_items'            => __( 'Ver shops', 'logro' ),
        'search_items'          => __( 'Buscar shop', 'logro' ),
        'not_found'             => __( 'No encontrado', 'logro' ),
        'not_found_in_trash'    => __( 'No encontrado en la Papelera', 'logro' ),
        'featured_image'        => __( 'Imagen Destacada', 'logro' ),
        'set_featured_image'    => __( 'Establecer imagen destacada', 'logro' ),
        'remove_featured_image' => __( 'Eliminar imagen destacada', 'logro' ),
        'use_featured_image'    => __( 'Usar como imagen destacada', 'logro' ),
        'insert_into_item'      => __( 'Insertar en shop', 'logro' ),
        'uploaded_to_this_item' => __( 'Subido a este shop', 'logro' ),
        'items_list'            => __( 'Lista de shops', 'logro' ),
        'items_list_navigation' => __( 'Navegación de lista de shops', 'logro' ),
        'filter_items_list'     => __( 'Filtrar lista de shops', 'logro' ),
    );
    $args = array(
        'label'                 => __( 'shop', 'logro' ),
        'description'           => __( 'shops principales', 'logro' ),
        'labels'                => $labels,
        'supports'              => array( 'title' ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-list-view',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'shops', $args );

}

function load_more_posts() {
    $page = $_POST['page'];
    $category_id = get_cat_ID('GIFTS');
    $args = array(
        'post_type' => 'post',
        'paged' => $page,
        'posts_per_page' => 10,
        'category__not_in' => array($category_id)
    );

    $query = new WP_Query($args);

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            get_template_part('template-part/content-post'); 
        }
    }

    wp_die();
}

function ajax_search() {
    $search_query = sanitize_text_field($_POST['search']);
    $category_id = get_cat_ID('GIFTS');
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => -1,
      'category__not_in' => array($category_id),
      's' => $search_query,
    );
    
    $query = new WP_Query($args);
    
    if ($query->have_posts()) {
        while ($query->have_posts()) {
          $query->the_post();
          get_template_part('template-part/content-post'); 
        }
    }else{
        echo '<p class="main-description">No se encontraron entradas.</p>';
    }

    wp_die();
}

function filter_posts_by_category() {
  $category_id = isset($_POST['category_id']) ? intval($_POST['category_id']) : 0;

  $args = array(
      'post_type' => 'post',
      'posts_per_page' => -1,
      'cat' => $category_id
  );

  $query = new WP_Query($args);

  if ($query->have_posts()) {
      while ($query->have_posts()) {
          $query->the_post();
          get_template_part('template-part/content-post');
      }
  } else {
      echo '<p class="main-description">No se encontraron entradas en esta categoría.</p>';
  }

  wp_die();
}

function time_elapsed_string($datetime, $full = false) {
  $now = new DateTime;
  $ago = new DateTime($datetime);
  $diff = $now->diff($ago);

  $diff->w = floor($diff->d / 7);
  $diff->d -= $diff->w * 7;

  $string = array(
      'y' => 'año',
      'm' => 'mes',
      'w' => 'semana',
      'd' => 'día',
      'h' => 'hora',
      'i' => 'minuto',
      's' => 'segundo',
  );
  foreach ($string as $k => &$v) {
      if ($diff->$k) {
          $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
      } else {
          unset($string[$k]);
      }
  }

  if (!$full) $string = array_slice($string, 0, 1);
  return $string ? implode(', ', $string) : 'justo ahora';
}
