<?php
/**
 * Template Part: Consultoria - Soluções para Diferentes Setores
 *
 * Espera os seguintes argumentos via get_template_part(..., ..., $args):
 * - 'title' => string
 * - 'paragraph' => string
 * - 'image' => URL da imagem
 * - 'cards' => array de [
 *     'icon' => string (caminho do ícone SVG),
 *     'title' => string,
 *     'description' => string
 *   ]
 */
?>

<section class="section-dark-wrapper">
  <div class="section-dark-content">
    <div class="section-container-solutions">
      
      <!-- Lado Esquerdo -->
      <div class="section-left">
        <h2 class="section-title"><?php echo esc_html($args['title']); ?></h2>
        <div class="section-image">
          <img src="<?php echo esc_url($args['image']); ?>" alt="">
        </div>
      </div>

      <!-- Lado Direito -->
      <div class="section-right">
        <p class="section-text"><?php echo esc_html($args['paragraph']); ?></p>
        <div class="cards-grid">
          <?php foreach ($args['cards'] as $card) : ?>
            <div class="card">
              <div class="card-icon">
                <img src="<?php echo esc_url($card['icon']); ?>" alt="<?php echo esc_attr($card['title']); ?>" width="48" height="48">
              </div>
              <h3 class="card-title-solutions"><?php echo esc_html($card['title']); ?></h3>
              <div class="card-description-solutions"><?php echo $card['description']; ?></div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>

    </div>
  </div>
</section>
