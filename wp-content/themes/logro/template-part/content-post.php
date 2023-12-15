<article class="main-notes__item g-border-top g-pgeneral-10">
    <a href="<?php the_permalink(); ?>" class="main-notes__text">
        <h3 class="main-subtitle g-textshort-one"><?php the_title(); ?></h3>
        <div class="main-description g-textshort-one no-mobile"><?php the_excerpt(); ?></div>
    </a>
    <ul class="main-notes__info no-mobile">
        <li>
        <svg xmlns="http://www.w3.org/2000/svg" width="19.591" height="19.591" viewBox="0 0 19.591 19.591">
            <g id="Grupo_142" data-name="Grupo 142" transform="translate(-379.142 -1389.814)">
            <circle id="Elipse_28" data-name="Elipse 28" cx="9.296" cy="9.296" r="9.296" transform="translate(379.642 1390.314)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
            <path id="Trazado_139" data-name="Trazado 139" d="M388.173,1392.475v9.3l4.81-4.648" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
            </g>
        </svg>
        
        <span>
        <?php echo time_elapsed_string(get_the_date('Y-m-d H:i:s')); ?>
        </span>                
        </li>
        <?php if (get_field('url_referencia')): ?>
            <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="19.591" height="19.591" viewBox="0 0 19.591 19.591">
                <g id="Grupo_144" data-name="Grupo 144" transform="translate(-496.347 -1389.814)">
                <g id="Grupo_143" data-name="Grupo 143">
                    <circle id="Elipse_29" data-name="Elipse 29" cx="9.296" cy="9.296" r="9.296" transform="translate(496.847 1390.314)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
                </g>
                <path id="Trazado_140" data-name="Trazado 140" d="M505.577,1408.905c-2.437,0-4.413-4.162-4.413-9.3s1.976-9.3,4.413-9.3" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
                <path id="Trazado_141" data-name="Trazado 141" d="M506.515,1390.314c2.437,0,4.413,4.162,4.413,9.3s-1.976,9.3-4.413,9.3" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
                <line id="Línea_244" data-name="Línea 244" x2="15.665" transform="translate(498.285 1394.653)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
                <line id="Línea_245" data-name="Línea 245" x2="15.665" transform="translate(498.285 1404.682)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
                </g>
            </svg>
                <a href="<?php echo get_field('url_referencia'); ?>" target="_blank">
                    <?php echo get_field('url_referencia'); ?>
                </a>
            </li>
        <?php endif; ?>
        <?php if (get_field('tag')): ?>
            <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="17.762" height="19.232" viewBox="0 0 17.762 19.232">
                <path id="Trazado_155" data-name="Trazado 155" d="M697.657,1391.033l7.132,15.762a1.224,1.224,0,0,1-1.563,1.643l-6.236-2.454a1.226,1.226,0,0,0-.9,0l-6.236,2.454a1.223,1.223,0,0,1-1.562-1.643l7.132-15.762A1.223,1.223,0,0,1,697.657,1391.033Z" transform="translate(-687.661 -1389.814)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
            </svg>
            
            <span><?php echo get_field('tag'); ?></span>
            </li>
        <?php endif; ?>
        <?php if (get_field('ubicacion')): ?>
            <li>
            <svg xmlns="http://www.w3.org/2000/svg" width="16.482" height="19.747" viewBox="0 0 16.482 19.747">
                <g id="Grupo_147" data-name="Grupo 147" transform="translate(-859.608 -1389.435)">
                <g id="Grupo_145" data-name="Grupo 145">
                    <circle id="Elipse_30" data-name="Elipse 30" cx="3.101" cy="3.101" r="3.101" transform="translate(864.747 1393.028)" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
                </g>
                <g id="Grupo_146" data-name="Grupo 146">
                    <path id="Trazado_142" data-name="Trazado 142" d="M875.59,1397.676c0,4.275-7.741,10.85-7.741,10.85s-7.741-6.575-7.741-10.85a7.741,7.741,0,0,1,15.482,0Z" fill="none" stroke="gray" stroke-miterlimit="10" stroke-width="1"/>
                </g>
                </g>
            </svg>
            
            
            <?php echo get_field('ubicacion'); ?>
            </li>
        <?php endif; ?>
    </ul>
</article>