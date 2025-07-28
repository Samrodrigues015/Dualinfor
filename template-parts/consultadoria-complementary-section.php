<?php
/**
 * Template Part: Consultadoria - Soluções Complementares
 *
 * Espera os seguintes argumentos via get_template_part(..., ..., $args):
 * - 'title' => string
 * - 'services' => array de [
 *     'title' => string,
 *     'description' => string
 *   ]
 * - 'images' => array de [
 *     'src' => string,
 *     'alt' => string
 *   ] (primeira imagem é grande, as outras pequenas)
 */
?>

<section class="section-solutions-consultadoria">
  <div class="section-solutions-consultadoria__container">
    <div class="section-solutions-consultadoria__content">

      <!-- LADO ESQUERDO -->
      <div class="section-solutions-consultadoria__left">
        <h2 class="section-solutions-consultadoria__title">
          <?php echo esc_html($args['title']); ?>
        </h2>

        <div class="section-solutions-consultadoria__services">
          <?php foreach ($args['services'] as $service): ?>
            <div class="section-solutions-consultadoria__service-item">
              <div class="section-solutions-consultadoria__service-content">
                <h3 class="section-solutions-consultadoria__service-title">
                  <?php echo esc_html($service['title']); ?>
                </h3>
                <p class="section-solutions-consultadoria__service-description">
                  <?php echo esc_html($service['description']); ?>
                </p>
              </div>
              <div class="section-solutions-consultadoria__service-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M7 17L17 7M17 7H7M17 7V17" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                </svg>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- LADO DIREITO -->
      <div class="section-solutions-consultadoria__right">
        <div class="section-solutions-consultadoria__images-grid">
          <?php foreach ($args['images'] as $index => $image): ?>
            <div class="<?php echo $index === 0 ? 'section-solutions-consultadoria__image-large' : 'section-solutions-consultadoria__image-small'; ?>">
              <img src="<?php echo esc_url($image['src']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>
</section>
