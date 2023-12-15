<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); ?>
</head>
<body>
  <header class="main-header main-content__large">
    <div class="main-header__content g-flex-between ">
      <div class="main-header__left flex">
        <div class="main-header__logo g-flex-center-align">
          <?php if (get_field('logo_light', 'options')) : ?>
              <img class="main-header__logo-light" src="<?php echo get_field('logo_light', 'options'); ?>" alt="">
              <img class="main-header__logo-dark" src="<?php echo get_field('logo_dark', 'options'); ?>" alt="">
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
            <svg xmlns="http://www.w3.org/2000/svg" width="16.273" height="17.78" viewBox="0 0 16.273 17.78">
              <path id="Trazado_187" data-name="Trazado 187" d="M3189.4,45.1a.357.357,0,0,1,.26-.615,8.609,8.609,0,0,0,7.992-12.509.358.358,0,0,1,.41-.5c6.45,1.6,7.677,8.844,5.321,12.9C3201.2,48.142,3194.856,50.407,3189.4,45.1Z" transform="translate(-3188.776 -30.959)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
            </svg>            
          </button>
          <button id="light-theme">
            <svg xmlns="http://www.w3.org/2000/svg" width="29.237" height="29.237" viewBox="0 0 29.237 29.237">
              <g id="Grupo_205" data-name="Grupo 205" transform="translate(-3241.494 -27.018)">
                <circle id="Elipse_49" data-name="Elipse 49" cx="6.544" cy="6.544" r="6.544" transform="translate(3249.569 35.186)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
                <g id="Grupo_201" data-name="Grupo 201">
                  <line id="Línea_323" data-name="Línea 323" y2="6.523" transform="translate(3256.113 27.018)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
                  <line id="Línea_324" data-name="Línea 324" y2="6.523" transform="translate(3256.113 49.732)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
                </g>
                <g id="Grupo_202" data-name="Grupo 202">
                  <line id="Línea_325" data-name="Línea 325" x2="6.523" transform="translate(3241.494 41.49)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
                  <line id="Línea_326" data-name="Línea 326" x2="6.523" transform="translate(3264.209 41.49)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
                </g>
                <g id="Grupo_203" data-name="Grupo 203">
                  <line id="Línea_327" data-name="Línea 327" x2="4.612" y2="4.612" transform="translate(3245.505 31.153)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
                  <line id="Línea_328" data-name="Línea 328" x2="4.612" y2="4.612" transform="translate(3261.566 47.214)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
                </g>
                <g id="Grupo_204" data-name="Grupo 204">
                  <line id="Línea_329" data-name="Línea 329" y1="4.612" x2="4.612" transform="translate(3245.776 47.454)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
                  <line id="Línea_330" data-name="Línea 330" y1="4.612" x2="4.612" transform="translate(3261.838 31.393)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
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