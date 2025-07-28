<?php
/**
 * Template Part: Carrossel de Empresas
 *
 * Espera os seguintes argumentos via get_template_part(..., ..., $args):
 * - 'title' => string
 * - 'cards' => array de [
 *     'logo' => string (URL da imagem),
 *     'alt'  => string (texto alternativo),
 *     'link' => string (URL do botão)
 *   ]
 */
?>

<section class="section-carrosel-empresas">
  <h2 class="section-carrosel-empresas-title">
    <?php echo esc_html($args['title']); ?>
  </h2>

  <div class="section-carrosel-empresas-container">
    <div class="section-carrosel-empresas-wrapper" id="carouselWrapper">
      <?php foreach ($args['cards'] as $card): ?>
        <div class="section-carrosel-empresas-card">
          <img src="<?php echo esc_url($card['logo']); ?>" alt="<?php echo esc_attr($card['alt']); ?>" class="section-carrosel-empresas-logo">
          <a href="<?php echo esc_url($card['link']); ?>" class="section-carrosel-empresas-button">
            Clique aqui
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-solucoes-documentais/icone-seta.svg" alt="Seta">
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>