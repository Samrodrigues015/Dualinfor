<?php
/**
 * Template Part: Produtos Hero Section (com conteúdo final incluído)
 *
 * Espera os seguintes argumentos via get_template_part(..., ..., $args):
 * - 'title' => string
 * - 'description' => string
 * - 'image_main' => URL
 * - 'image_secondary' => URL (opcional)
 * - 'cta_primary' => [ 'url' => '', 'label' => '', 'icon' => '' ]
 * - 'cta_secondary' => [ 'url' => '', 'label' => '' ]
 * - 'reverse' => bool (imagem à direita se true)
 * - 'content_heading' => string
 * - 'content_text' => string
 * - 'content_image' => URL
 */

$reverse = !empty($args['reverse']) ? 'header-reverse' : '';
?>

<section class="card-section container-principal <?php echo esc_attr($reverse); ?>">
  <div class="card-image">
    <img src="<?php echo esc_url($args['image_main']); ?>" alt="Imagem principal">
  </div>

  <div class="card-content">
    <h1 class="card-title">
      <?php echo esc_html($args['title']); ?>
    </h1>

    <p class="card-description">
      <?php echo esc_html($args['description']); ?>
    </p>

    <div class="card-buttons">
      <?php if (!empty($args['cta_primary'])) : ?>
        <a href="<?php echo esc_url($args['cta_primary']['url']); ?>" class="btn-primary">
          <?php echo esc_html($args['cta_primary']['label']); ?>
          <?php if (!empty($args['cta_primary']['icon'])) : ?>
            <img src="<?php echo esc_url($args['cta_primary']['icon']); ?>" alt="Seta">
          <?php endif; ?>
        </a>
      <?php endif; ?>

      <?php if (!empty($args['cta_secondary'])) : ?>
        <a href="<?php echo esc_url($args['cta_secondary']['url']); ?>" class="btn-secondary">
          <?php echo esc_html($args['cta_secondary']['label']); ?>
        </a>
      <?php endif; ?>
    </div>

    <?php if (!empty($args['image_secondary'])) : ?>
      <div class="card-secondary-image">
        <img src="<?php echo esc_url($args['image_secondary']); ?>" alt="Imagem complementar">
      </div>
    <?php endif; ?>
  </div>
</section>

<?php if (!empty($args['content_heading']) || !empty($args['content_text']) || !empty($args['content_image'])) : ?>
<section class="content-section container-principal <?php echo esc_attr($reverse); ?>">
  <h2 class="section-heading">
    <?php echo esc_html($args['content_heading']); ?>
  </h2>

  <p class="section-description">
    <?php echo esc_html($args['content_text']); ?>
  </p>

  <img src="<?php echo esc_url($args['content_image']); ?>" alt="Imagem complementar" class="hero-image">
</section>
<?php endif; ?>
