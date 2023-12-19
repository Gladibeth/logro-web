<?php
  $urlArticulo = urlencode(get_permalink());
  $titleArticulo = str_replace(' ', '%20', get_the_title());
  $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $urlArticulo;
  $twitterURL = 'https://twitter.com/intent/tweet?text=' . $titleArticulo . '&amp;url=' . $urlArticulo . '&amp;via';
  $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $urlArticulo . '&amp;title=' . $titleArticulo;
  $whatsAppURL = 'https://wa.me/?text='.$urlArticulo;
  $emailURL = 'mailto:?subject=Te comparto un link de la web de logro.com - '.$titleArticulo.'&amp;body=Creo que te puede interesar este link de la web de logro.com - '.$urlArticulo.'.%0D%0D Un saludo,';
?>
<footer class="main-footer main-content__medium">
    <div class="main-footer__content g-flex-between">
      <div class="main-footer__left g-flex-center-align">
        <p class="main-footer__text">A COMPARTIR LOGRO: </p>
        <ul class="main-footer__social">
          <!-- WhatsApp -->
          <li>
            <a target="_blank" href="<?php echo $whatsAppURL; ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                <g id="Grupo_20" data-name="Grupo 20" transform="translate(-15.027 -14.726)">
                  <path id="Trazado_24" data-name="Trazado 24" d="M33.661,26.686a6.1,6.1,0,0,0-1.769-3.855,6,6,0,0,0-3.867-1.723H27.3A6.023,6.023,0,0,0,21.65,27a6.147,6.147,0,0,0,.7,2.789,1,1,0,0,1,.07.351,1.179,1.179,0,0,1-.059.375q-.972,2.8-.972,2.825l.047-.071c.007.031.019.047.035.047q.621-.222,1.64-.539,1.324-.421,1.641-.527a6.31,6.31,0,0,0,2.883.761h.187a6.037,6.037,0,0,0,2.953-.867,5.925,5.925,0,0,0,2.883-4.722Zm-4.008,4.946a4.9,4.9,0,0,1-2.039.433,4.253,4.253,0,0,1-.539-.035,5.646,5.646,0,0,1-2.2-.809l-1.922.61q.036-.117.446-1.36L23.583,30q-.012,0-.34-.528a5.157,5.157,0,0,1-.6-1.933,4.525,4.525,0,0,1-.035-.574,5.011,5.011,0,0,1,4.64-4.911c.141-.007.277-.011.41-.011a4.742,4.742,0,0,1,3.821,1.793,4.672,4.672,0,0,1,1.242,3.129,6.145,6.145,0,0,1-.2,1.5A4.957,4.957,0,0,1,29.653,31.632Zm.364-3.575a3.127,3.127,0,0,0-.774-.316q-.093,0-.386.363t-.387.387h-.024a2,2,0,0,1-.7-.293,3.547,3.547,0,0,1-1.09-.961,1.872,1.872,0,0,1-.4-.668l.27-.351a.655.655,0,0,0,.222-.411,7.714,7.714,0,0,0-.293-.761,2.117,2.117,0,0,0-.375-.668.706.706,0,0,0-.269-.047,2.343,2.343,0,0,0-.317.023q-.76.212-.761,1.383a3.179,3.179,0,0,0,.7,1.676,5.673,5.673,0,0,0,2.133,1.91,5.758,5.758,0,0,0,1.535.527h.14a1.76,1.76,0,0,0,.785-.211,1.115,1.115,0,0,0,.657-1.054,1.068,1.068,0,0,0-.012-.153A3.537,3.537,0,0,0,30.017,28.057Z" fill="gray"/>
                  <path id="Trazado_25" data-name="Trazado 25" d="M27.527,39.726a12.5,12.5,0,1,1,12.5-12.5A12.514,12.514,0,0,1,27.527,39.726Zm0-24a11.5,11.5,0,1,0,11.5,11.5A11.512,11.512,0,0,0,27.527,15.726Z" fill="gray"/>
                </g>
              </svg>

                           
            </a>
          </li>
          <!-- Email -->
          <li>
            <a target="_blank" href="<?php echo $emailURL; ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                <g id="Grupo_19" data-name="Grupo 19" transform="translate(-89.164 -15.616)">
                  <g id="Grupo_16" data-name="Grupo 16">
                    <rect id="Rectángulo_1" data-name="Rectángulo 1" width="14.488" height="8.615" transform="translate(94.42 23.809)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
                  </g>
                  <g id="Grupo_17" data-name="Grupo 17">
                    <path id="Trazado_23" data-name="Trazado 23" d="M101.664,40.616a12.5,12.5,0,1,1,12.5-12.5A12.514,12.514,0,0,1,101.664,40.616Zm0-24a11.5,11.5,0,1,0,11.5,11.5A11.513,11.513,0,0,0,101.664,16.616Z" fill="gray"/>
                  </g>
                  <g id="Grupo_18" data-name="Grupo 18">
                    <line id="Línea_1" data-name="Línea 1" x1="3.916" y2="2.03" transform="translate(101.664 26.086)" fill="none" stroke="gray" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1"/>
                    <line id="Línea_2" data-name="Línea 2" x2="3.916" y2="2.03" transform="translate(97.748 26.086)" fill="none" stroke="gray" stroke-linecap="round" stroke-miterlimit="10" stroke-width="1"/>
                  </g>
                </g>
              </svg>

                           
            </a>
          </li>
          <!-- Linkedin -->
          <li>
            <a target="_blank" href="<?php echo $linkedInURL; ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                <g id="Grupo_15" data-name="Grupo 15" transform="translate(-162.895 -15.851)">
                  <path id="Trazado_21" data-name="Trazado 21" d="M171.166,25.462a1.4,1.4,0,0,0,.984-.352,1.124,1.124,0,0,0,.387-.867,1.327,1.327,0,0,0-.41-.891,1.3,1.3,0,0,0-.926-.339,1.451,1.451,0,0,0-1,.339,1.138,1.138,0,0,0-.381.891,1.165,1.165,0,0,0,.358.867A1.348,1.348,0,0,0,171.166,25.462Zm1.195,1.008h-2.414v7.218h2.414Zm8.649,3.093a3.407,3.407,0,0,0-.774-2.472,2.644,2.644,0,0,0-1.969-.786,2.164,2.164,0,0,0-1.453.411,4.024,4.024,0,0,0-.715.785V26.47h-2.39v7.218h2.39V29.346a.609.609,0,0,1,.059-.275,1.756,1.756,0,0,1,.44-.6,1.152,1.152,0,0,1,.814-.276.97.97,0,0,1,.914.463,2.34,2.34,0,0,1,.27,1.19v3.843h2.414Zm-4.946-2.027a.031.031,0,0,1,.035-.035v.035Z" fill="gray"/>
                  <path id="Trazado_22" data-name="Trazado 22" d="M175.4,40.851a12.5,12.5,0,1,1,12.5-12.5A12.514,12.514,0,0,1,175.4,40.851Zm0-24a11.5,11.5,0,1,0,11.5,11.5A11.512,11.512,0,0,0,175.4,16.851Z" fill="gray"/>
                </g>
              </svg>

                           
            </a>
          </li>
          <!-- Twitter -->
          <li>
            <a target="_blank" href="<?php echo $twitterURL; ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
                <g id="Grupo_4" data-name="Grupo 4" transform="translate(-237.77 -15.381)">
                  <g id="layer1">
                    <path id="path1009" d="M243.731,21.731l5.074,6.785L243.7,34.031h1.149l4.47-4.829,3.612,4.829h3.91l-5.359-7.165,4.753-5.135h-1.15l-4.116,4.448-3.327-4.448Zm1.69.847h1.8l7.933,10.607h-1.8Z" fill="gray"/>
                  </g>
                  <g id="Grupo_3" data-name="Grupo 3">
                    <path id="Trazado_5" data-name="Trazado 5" d="M250.27,40.381a12.5,12.5,0,1,1,12.5-12.5A12.514,12.514,0,0,1,250.27,40.381Zm0-24a11.5,11.5,0,1,0,11.5,11.5A11.513,11.513,0,0,0,250.27,16.381Z" fill="gray"/>
                  </g>
                </g>
              </svg>

                           
            </a>
          </li>
          <!-- Facebook -->
          <li>
            <a target="_blank" href="<?php echo $facebookURL; ?>">
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" viewBox="0 0 25 25">
              <g id="Grupo_2" data-name="Grupo 2" transform="translate(-311.5 -15.616)">
                <path id="Trazado_3" data-name="Trazado 3" d="M324.937,34.239v-5.59h1.875l.281-2.156h-2.156v-1.23a2.064,2.064,0,0,1,.059-.645.824.824,0,0,1,.093-.211q.212-.387,1.09-.387h1V22.087a13.936,13.936,0,0,0-1.664-.094,2.558,2.558,0,0,0-2.414,1.242,3.068,3.068,0,0,0-.41,1.594v1.664h-1.863v2.156h1.863v5.59Z" fill="gray"/>
                <path id="Trazado_4" data-name="Trazado 4" d="M324,40.616a12.5,12.5,0,1,1,12.5-12.5A12.514,12.514,0,0,1,324,40.616Zm0-24a11.5,11.5,0,1,0,11.5,11.5A11.513,11.513,0,0,0,324,16.616Z" fill="gray"/>
              </g>
            </svg>


                           
            </a>
          </li>
        </ul>
      </div>
      <div class="main-footer__right">

      <?php
            wp_nav_menu(array(
                'theme_location' => 'footer-menu',
                'container' => 'ul',
                'menu_class' => 'main-footer__menu'
            ));
        ?>
      </div>
    </div>
  </footer>

  <?php wp_footer(); ?>

  <script>
    // Función para repetir contenido en un contenedor dado
    function repeatContent(selector) {
        var container = document.querySelector(selector);
        if (!container) return;

        var containerHeight = container.clientHeight;

        // Calcula la altura total del contenido actual
        var contentHeight = Array.from(container.children)
            .map(function (child) {
                return child.clientHeight;
            })
            .reduce(function (total, height) {
                return total + height;
            }, 0);

        // Repite el contenido si es necesario
        while (contentHeight < containerHeight) {
            // Clona el primer elemento y añádelo al final del contenedor
            var clonedItem = container.firstElementChild.cloneNode(true);
            container.appendChild(clonedItem);

            // Actualiza la altura total del contenido
            contentHeight += clonedItem.clientHeight;
        }
    }

    document.addEventListener("DOMContentLoaded", function () {
        repeatContent(".main-logos__list");
        repeatContent(".main-notes_list");
        // Añade más llamadas a repeatContent según sea necesario para otros contenedores
    });
</script>

</body>
</html>