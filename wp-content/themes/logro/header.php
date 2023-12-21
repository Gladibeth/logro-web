<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#808080" />
  <meta name="description" content="Es mejor no tener un logo, de no necesitarlo. Acá sabrás las mejores prácticas para tu caso.">
  <meta name="keywords" content="crear logo, precio logo, ,logo personalizado, logos empresas">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="Logo design: por qué, cuándo y cómo un logo se vuelve un logro.">
  <!-- Facebook - WhatsApp -->
  <meta property="og:image" content="">
  <meta property="og:url" content="">
  <meta property="og:image:type" content="image/png" class="meta-image" />
  <meta property="og:image:width" content="400" />
  <meta property="og:image:height" content="400" />
  <!-- Twitter -->
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Logo design: por qué, cuándo y cómo un logo se vuelve un logro.">
  <meta name="twitter:description" content="Es mejor no tener un logo, de no necesitarlo. Acá sabrás las mejores prácticas para tu caso.">
  <meta name="twitter:image" content="">

  <title><?php bloginfo('name'); ?> <?php wp_title('|', true, 'left'); ?></title>
  <link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico" type="image/x-icon">
  <?php wp_head(); ?>
</head>
<body>
  <header class="main-header main-content__large">
    <div class="main-header__content g-flex-between ">
      <div class="main-header__left flex">
        <div class="main-header__logo g-flex-center-align">
          <?php if (get_field('logo_light', 'options')) : ?>
            <a href="<?php echo esc_url(home_url('/')); ?>">
              <img class="main-header__logo-light" src="<?php echo get_field('logo_light', 'options'); ?>" alt="">
              </a>
            <?php else : ?>
            <a href="<?php echo esc_url(home_url('/')); ?>">
              LOG_O     
            </a>
          <?php endif; ?>
        </div>
        <div class="main-header__btn">
          <?php
            $buttons = get_field('botones', 'options'); 
          ?>
          <?php if ($buttons) : ?>
            <?php foreach ($buttons as $button) : ?>
              <a href="<?php echo $button['botones_header']['url']; ?>" class="btn-custom" target="<?php echo $button['botones_header']['target']; ?>">
                <?php echo $button['botones_header']['title']; ?>
              </a>
            <?php endforeach; ?>
          <?php endif; ?>
        </div>
        <div>
        <?php
        if (has_nav_menu('main-menu')) {
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => 'ul',
                'menu_class' => 'main-footer__menu'
            ));
        }
        ?>
        </div>
      </div>
      <div class="main-header__right ">
        <div class="main-header__icons g-flex-center-align">
          <button id="dark-theme">
            <svg xmlns="http://www.w3.org/2000/svg" width="18.996" height="20.055" viewBox="0 0 18.996 20.055">
              <g id="Grupo_13" data-name="Grupo 13" transform="translate(-406.502 -16.972)">
                <path id="Trazado_2" data-name="Trazado 2" d="M415.237,37.027a10.213,10.213,0,0,1-8.535-4.562,1.171,1.171,0,0,1,0-1.311,1.136,1.136,0,0,1,1.2-.484,8.394,8.394,0,0,0,3.089.058h0a8.381,8.381,0,0,0,6.087-12.073,1.131,1.131,0,0,1,.154-1.272,1.177,1.177,0,0,1,1.268-.349,10.263,10.263,0,0,1-1.788,19.891A10.616,10.616,0,0,1,415.237,37.027Zm-7.582-5.383a.147.147,0,0,0-.123.069.167.167,0,0,0,0,.2,9.264,9.264,0,1,0,10.646-13.926.174.174,0,0,0-.193.053.138.138,0,0,0-.022.164,9.381,9.381,0,0,1-6.813,13.514h0a9.385,9.385,0,0,1-3.457-.065A.174.174,0,0,0,407.655,31.644Z" fill="gray"/>
              </g>
            </svg>
          
          </button>
          <button id="light-theme">
            <svg xmlns="http://www.w3.org/2000/svg" width="29.651" height="29.652" viewBox="0 0 29.651 29.652">
              <g id="Grupo_12" data-name="Grupo 12" transform="translate(-579.819 -13.174)">
                <path id="Trazado_1" data-name="Trazado 1" d="M594.645,34.93a7.044,7.044,0,1,1,7.044-7.044A7.053,7.053,0,0,1,594.645,34.93Zm0-13.088a6.044,6.044,0,1,0,6.044,6.044A6.05,6.05,0,0,0,594.645,21.842Z" fill="gray"/>
                <g id="Grupo_1" data-name="Grupo 1">
                  <rect id="Rectángulo_1" data-name="Rectángulo 1" width="1" height="4.523" transform="translate(594.145 13.174)" fill="gray"/>
                </g>
                <g id="Grupo_2" data-name="Grupo 2">
                  <rect id="Rectángulo_2" data-name="Rectángulo 2" width="1" height="4.523" transform="translate(594.145 38.303)" fill="gray"/>
                </g>
                <g id="Grupo_5" data-name="Grupo 5">
                  <g id="Grupo_3" data-name="Grupo 3">
                    <rect id="Rectángulo_3" data-name="Rectángulo 3" width="4.523" height="1" transform="translate(579.819 27.386)" fill="gray"/>
                  </g>
                  <g id="Grupo_4" data-name="Grupo 4">
                    <rect id="Rectángulo_4" data-name="Rectángulo 4" width="4.522" height="1" transform="translate(604.948 27.386)" fill="gray"/>
                  </g>
                </g>
                <g id="Grupo_8" data-name="Grupo 8">
                  <g id="Grupo_6" data-name="Grupo 6">
                    <rect id="Rectángulo_5" data-name="Rectángulo 5" width="1" height="4.523" transform="translate(583.808 17.756) rotate(-45)" fill="gray"/>
                  </g>
                  <g id="Grupo_7" data-name="Grupo 7">
                    <rect id="Rectángulo_6" data-name="Rectángulo 6" width="1" height="4.523" transform="translate(601.577 35.525) rotate(-45)" fill="gray"/>
                  </g>
                </g>
                <g id="Grupo_11" data-name="Grupo 11">
                  <g id="Grupo_9" data-name="Grupo 9">
                    <rect id="Rectángulo_7" data-name="Rectángulo 7" width="4.523" height="1" transform="translate(583.808 38.016) rotate(-45)" fill="gray"/>
                  </g>
                  <g id="Grupo_10" data-name="Grupo 10">
                    <rect id="Rectángulo_8" data-name="Rectángulo 8" width="4.523" height="1" transform="translate(601.577 20.247) rotate(-45)" fill="gray"/>
                  </g>
                </g>
              </g>
            </svg>

          </button>
        </div>

        <div class="content-form-custom">
          <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1 ) ); ?>
        </div>
        <!-- <form action="">
          <input type="text" placeholder="ENTRA A LA LISTA PARA TU DISEÑO DE LOGO: TU EMAIL">
        </form> -->

        <!-- mobile hamburge -->
        <button aria-label="boton" class="main-header__button menu-toggle hamburger hamburger--elastic ml-autos" aria-controls="primary-menu" aria-expanded="false">
          <span class="hamburger-box">
            <span class="hamburger-inner"></span>
          </span>
        </button>
      </div>


      <div class="main-header__nav ">
        <div class="content g-border ">
          <div class="search">
            <form class="main-formsearch__form " action="" method="get">
              <div class="main-formsearch__input">
               <input type="search" id="search" name="q" placeholder="Buscar nota">
               <svg xmlns="http://www.w3.org/2000/svg" width="20.909" height="20.309" viewBox="0 0 20.909 20.309">
                 <g id="Grupo_160" data-name="Grupo 160" transform="translate(-757.227 -1238.703)">
                   <circle id="Elipse_39" data-name="Elipse 39" cx="7.956" cy="7.956" r="7.956" transform="translate(757.727 1239.203)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"></circle>
                   <line id="Línea_254" data-name="Línea 254" x2="6.187" y2="6.187" transform="translate(771.595 1252.471)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"></line>
                 </g>
               </svg>
              </div>
               
           </form>
          </div>
          <div>
            <?php
              wp_nav_menu(array(
                  'theme_location' => 'mobile-main-menu',
                  'container' => 'ul',
                  'menu_class' => 'first-menu'
              ));
  
              wp_nav_menu(array(
                  'theme_location' => 'footer-menu',
                  'container' => 'ul',
                  'menu_class' => 'second-menu'
              ));
          ?>
    
          </div>
          <div class="copy">
            <p>
              LOGRO.PRO ES UN PROYECTO DE QUIEROLAWEB. <br>
              BY L.JAVIER CALVO R. <br>
              
              DESARROLLO WEB BY ¿TÚ?
            </p>
          </div>
        </div>


      </div>

      
    </div>
    <div class="main-header__form content-form-custom">
    <?php echo FrmFormsController::get_form_shortcode( array( 'id' => 1 ) ); ?>
      <!-- <form action="">
        <input type="text" placeholder="ENTRA A LA LISTA PARA TU DISEÑO DE LOGO: TU EMAIL">
      </form> -->
    </div>
  </header>

  <style>
    
    .content-form-custom fieldset {
      border: none !important
    }
    .content-form-custom .frm_submit .frm_button_submit {
      display: none
    }
    .content-form-custom .frm_message p, .frm_error{
      color: #808080;
      font-family: "Arial Regular", sans-serif;
      font-size: 0.87em;
      font-weight: 400;
    }

    .content-form-custom .frm_error{
      position: absolute;
    }

    .content-form-custom .frm_error_style {
      display: none !important;
    }
  </style>