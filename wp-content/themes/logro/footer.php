<?php
  $urlArticulo = urlencode(get_permalink());
  $titleArticulo = str_replace(' ', '%20', get_the_title());
  $facebookURL = 'https://www.facebook.com/sharer/sharer.php?u=' . $urlArticulo;
  $twitterURL = 'https://twitter.com/intent/tweet?text=' . $titleArticulo . '&amp;url=' . $urlArticulo . '&amp;via';
  $linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url=' . $urlArticulo . '&amp;title=' . $titleArticulo;
  $whatsAppURL = 'https://wa.me/?text=Esto te puede interesar, míralo:'.$urlArticulo;
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

  <div class="modal-images inactive">
    <div class="modal-images__content">

      <div class="modal-images__slider g-border">
        <div class="modal-images__header">
          <div class="modal-images__top">
            <div>
              <h2 class="modal-images__title main-subtitle"></h2>
              <div class="modal-images__buttons">

              </div>
            </div>
            <a href="" class="btn-closed">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M13.4099 12.0002L19.7099 5.71019C19.8982 5.52188 20.004 5.26649 20.004 5.00019C20.004 4.73388 19.8982 4.47849 19.7099 4.29019C19.5216 4.10188 19.2662 3.99609 18.9999 3.99609C18.7336 3.99609 18.4782 4.10188 18.2899 4.29019L11.9999 10.5902L5.70994 4.29019C5.52164 4.10188 5.26624 3.99609 4.99994 3.99609C4.73364 3.99609 4.47824 4.10188 4.28994 4.29019C4.10164 4.47849 3.99585 4.73388 3.99585 5.00019C3.99585 5.26649 4.10164 5.52188 4.28994 5.71019L10.5899 12.0002L4.28994 18.2902C4.19621 18.3831 4.12182 18.4937 4.07105 18.6156C4.02028 18.7375 3.99414 18.8682 3.99414 19.0002C3.99414 19.1322 4.02028 19.2629 4.07105 19.3848C4.12182 19.5066 4.19621 19.6172 4.28994 19.7102C4.3829 19.8039 4.4935 19.8783 4.61536 19.9291C4.73722 19.9798 4.86793 20.006 4.99994 20.006C5.13195 20.006 5.26266 19.9798 5.38452 19.9291C5.50638 19.8783 5.61698 19.8039 5.70994 19.7102L11.9999 13.4102L18.2899 19.7102C18.3829 19.8039 18.4935 19.8783 18.6154 19.9291C18.7372 19.9798 18.8679 20.006 18.9999 20.006C19.132 20.006 19.2627 19.9798 19.3845 19.9291C19.5064 19.8783 19.617 19.8039 19.7099 19.7102C19.8037 19.6172 19.8781 19.5066 19.9288 19.3848C19.9796 19.2629 20.0057 19.1322 20.0057 19.0002C20.0057 18.8682 19.9796 18.7375 19.9288 18.6156C19.8781 18.4937 19.8037 18.3831 19.7099 18.2902L13.4099 12.0002Z" fill="white"></path>
              </svg>
            </a>
          </div>
          

        </div>
        <div class="modal-images__info">
           
    
        </div>
        <div class="carousel-inner  modal-images__sliderAll slider-center-modal">
         
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls1" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden"></span>
          </button>
     
      </div>
    </div>
  </div>

  <?php wp_footer(); ?>

  <script>
  try{

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
    document.querySelector('.carousel-control-prev').addEventListener('click', function () {
        navigateCarousel(-1);
    });
    
    document.querySelector('.carousel-control-next').addEventListener('click', function () {
        navigateCarousel(1);
    });
    
    document.querySelectorAll('.btn-closed').forEach(function (btn) {
        btn.addEventListener('click', function (event) {
            event.preventDefault();
            closePopup();
        });
    });
    
    function navigateCarousel(direction) {
        var activeElement = document.querySelector('.active');
        var targetElement = direction === -1 ? activeElement.previousElementSibling : activeElement.nextElementSibling;
    
        if (!targetElement) {
            targetElement = direction === -1 ? document.querySelector('.carousel-item:last-child') : document.querySelector('.carousel-item:first-child');
        }
    
        activeElement.classList.remove('active');
        targetElement.classList.add('active');
        document.querySelector('.images-slider__current').innerHTML = targetElement.getAttribute('data-id');
    }
    
    function closePopup() {
        document.querySelector('.modal-images').classList.add('inactive');
        document.querySelector('.modal-images__sliderAll').innerHTML = ''; 
        document.querySelector('.modal-images__buttons').innerHTML = '';
        document.querySelector('.modal-images__info').innerHTML = '';
    }

    const popup = document.querySelector('.modal-images');
    const works = document.querySelectorAll('.item-work, .item-logo');
    works.forEach(function (work) {
      buildGallery(work)
    });


    function updateGallery(item, index, contentImageSlider){
      const divItem = document.createElement('div');
      divItem.setAttribute('data-id', index + 1);
      divItem.setAttribute('class', index === 0 ? 'carousel-item active' : 'carousel-item');

      const divItemContainer = document.createElement('div');
      divItemContainer.setAttribute('class', 'container');

      const divContText = document.createElement('div');
      divContText.setAttribute('class', 'modal-images__description');
      const h3Title = document.createElement('h3');
      const pDescription = document.createElement('p');
      h3Title.textContent = item['title'];
      pDescription.textContent = item['description'];
      divContText.appendChild(h3Title);
      divContText.appendChild(pDescription);

      
      if (item['url_image']) {
          const divItemContainerImg = document.createElement('div');
          divItemContainerImg.setAttribute('class', 'modal-images__img');

          const imgItem = document.createElement('img');
          imgItem.setAttribute('src', item['url_image']);

          divItemContainerImg.append(imgItem);
          divItemContainer.append(divItemContainerImg);
      }
      divItemContainer.appendChild(divContText);
      divItem.append(divItemContainer);
      contentImageSlider.append(divItem);
    }

    function buildGallery(element){
      element.addEventListener('click', function () {
        const contentImageSlider = document.querySelector('.modal-images__sliderAll');
        const list_gallery = this.getAttribute('data-gallery');
        const array_list_gallery = JSON.parse(list_gallery);

        const list_gallery_logo = this.getAttribute('data-gallery-secundary');
        const array_list_gallery_logo = JSON.parse(list_gallery_logo);

        const title = this.getAttribute('data-title');
        document.querySelector('.modal-images__title').textContent = title;
      
        const list_info = this.getAttribute('data-info');
        const array_list_info = JSON.parse(list_info);
        const buttons = document.querySelector('.modal-images__buttons');

        const url_attr_article = this.getAttribute('data-article');
        const array_url_attr_article = JSON.parse(url_attr_article );
        if(array_url_attr_article.length > 0) {
          array_url_attr_article.forEach(function(item,index){
            const button = document.createElement('a');
            button.setAttribute('class', 'btn-custom btn-outline');
            button.setAttribute('href', item['url']);
            button.textContent = 'Articulo';
            buttons.appendChild(button);

          })
        }

        const url_attr_record = this.getAttribute('data-record');
        const array_url_attr_record = JSON.parse(url_attr_record);
        if(array_url_attr_record.length > 0) {
          array_url_attr_record.forEach(function(item,index){
            const button = document.createElement('a');
            button.setAttribute('class', 'btn-custom btn-outline');
            button.setAttribute('href', item['url']);
            button.textContent = 'Ficha';
            buttons.appendChild(button);

          })
        }

            
        if(array_list_info.length > 0) {
          array_list_info.forEach(function (item1, index) {
            const contentInfo = document.querySelector('.modal-images__info');
            const contentInfoDl = document.createElement('dl');
            const contentInfoItem = document.createElement('div');
            contentInfoItem.setAttribute('class', 'modal-images__info-item');
            const contentInfoDt = document.createElement('dt');
            const contentInfoDd = document.createElement('dd');
            contentInfoDt.textContent = item1['title_info'];
            contentInfoDd.textContent = item1['description_info'];
            contentInfoItem.appendChild(contentInfoDt);
            contentInfoItem.appendChild(contentInfoDd);
            contentInfoDl.appendChild(contentInfoItem);
            contentInfo.appendChild(contentInfoDl);
          })

        }

        if(array_list_gallery_logo.length > 0){
          const button = document.createElement('a');
          button.setAttribute('class', 'btn-custom btn-outline');
          button.setAttribute('id', 'gallery-logo');
          button.textContent = 'Logo';
          buttons.appendChild(button);

          button.addEventListener('click', function(){
            contentImageSlider.innerHTML = '';
            array_list_gallery_logo.forEach(function (item, index) {
              updateGallery(item, index, contentImageSlider);
            });
          })
        }
    
        if (array_list_gallery.length > 0) {
          popup.classList.remove('inactive');
          array_list_gallery.forEach(function (item, index) {
            updateGallery(item, index, contentImageSlider);
          });
        }
      });
    }

}catch(error){
    console.log(error);
}
</script>

</body>
</html>