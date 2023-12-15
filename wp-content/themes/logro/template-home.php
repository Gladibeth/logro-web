<?php
/**
 * Template Name: Home
 * Template Post Type: page
 * 
 * @package WordPress
 * @subpackage venture
 * @since 1.0.0
 */

get_header();

$group = get_field('banner');
$title = $group['titulo_banner'];
$button = $group['boton_banner'];
?>

  <section class="main-content g-flex-center main-content__large g-border">
    <div class="main-title main-title__content">
      <?= $title ?>
    </div>
    <?php if ($button) : ?>
    <a href="<?= $button['url'] ?>" class="btn-custom btn-large">
      <?= $button['title'] ?>
    </a>
    <?php endif; ?>
  </section>

<?php get_footer(); ?>