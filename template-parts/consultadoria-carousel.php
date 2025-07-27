<?php
/**
 * Template Part: Consultadoria - Carousel de Soluções
 *
 * Espera os seguintes argumentos via get_template_part(..., ..., $args):
 * - 'title' => string
 * - 'paragraph' => string
 * - 'cards' => array de [
 *     'icon' => string (caminho do ícone SVG),
 *     'title' => string,
 *     'items' => array de strings (bullets)
 *   ]
 */
?>

<div class="se-consultadoria-solutions-carousel">
  <div class="se-consultadoria-solutions-carousel__container">
    <div class="se-consultadoria-solutions-carousel__content">

      <!-- Cabeçalho -->
      <div class="se-consultadoria-solutions-carousel__header">
        <div class="se-consultadoria-solutions-carousel__title">
          <?php echo esc_html($args['title']); ?>
        </div>
        <div class="se-consultadoria-solutions-carousel__description">
          <?php echo esc_html($args['paragraph']); ?>
        </div>
      </div>

      <!-- Carrossel -->
      <div class="se-consultadoria-solutions-carousel__carousel-container">
        <div class="se-consultadoria-solutions-carousel__carousel-track">
          <?php foreach ($args['cards'] as $card): ?>
            <div class="se-consultadoria-solutions-carousel__card">
              <div class="se-consultadoria-solutions-carousel__card-icon">
                <img src="<?php echo esc_url($card['icon']); ?>"
                     alt="<?php echo esc_attr($card['title']); ?>"
                     width="32" height="32">
              </div>
              <div class="se-consultadoria-solutions-carousel__card-title">
                <?php echo esc_html($card['title']); ?>
              </div>
              <ul class="se-consultadoria-solutions-carousel__card-list">
                <?php foreach ($card['items'] as $item): ?>
                  <li><?php echo esc_html($item); ?></li>
                <?php endforeach; ?>
              </ul>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

      <!-- Navegação -->
      <div class="se-consultadoria-solutions-carousel__navigation">
        <button class="se-consultadoria-solutions-carousel__nav-btn se-consultadoria-solutions-carousel__nav-btn--prev">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="15,18 9,12 15,6"/>
          </svg>
        </button>
        <button class="se-consultadoria-solutions-carousel__nav-btn se-consultadoria-solutions-carousel__nav-btn--next">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <polyline points="9,18 15,12 9,6"/>
          </svg>
        </button>
      </div>

    </div>
  </div>
</div>
