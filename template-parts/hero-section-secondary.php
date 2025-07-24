<?php
/**
 * Template Part: Hero Secundário
 * 
 * Parâmetros aceites:
 * - title (string)
 * - paragraph (string)
 * - image (URL)
 * - image_right (bool) — se true, a imagem aparece à direita; se false, à esquerda
 * 
 * Exemplo de uso:
 * get_template_part('template-parts/hero-section-secondary', null, array(
 *   'title' => 'Consultoria que resolve problemas e cria oportunidades',
 *   'paragraph' => 'Com mais de 25 anos de experiência no mercado, a Dualinfor oferece serviços de consultadoria...',
 *   'image' => get_template_directory_uri() . '/assets/img/reuniao.png',
 *   'image_right' => true
 * ));
 */

$args = wp_parse_args($args, array(
  'title' => '',
  'paragraph' => '',
  'image' => '',
  'image_right' => false
));

$layout_class = $args['image_right'] ? 'image-right' : 'image-left';
?>

<section class="section-hero-secundario <?php echo esc_attr($layout_class); ?>">
  <div class="hero-secundario-text">
    <?php if (!empty($args['title'])) : ?>
      <h2><?php echo esc_html($args['title']); ?></h2>
    <?php endif; ?>
    <?php if (!empty($args['paragraph'])) : ?>
      <p><?php echo esc_html($args['paragraph']); ?></p>
    <?php endif; ?>
  </div>
  <div class="hero-secundario-img">
    <img src="<?php echo esc_url($args['image']); ?>" alt="">
  </div>
</section>

