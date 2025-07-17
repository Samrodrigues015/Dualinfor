<?php
/**
 * Template Part: Produtos Benefits Section
 *
 * Espera os seguintes argumentos via get_template_part(..., ..., $args):
 * - 'title' => string
 * - 'subtitle' => string
 * - 'cards' => array de arrays [
 *     'icon' => URL,
 *     'title' => string,
 *     'items' => array de strings ou string (pode ser parágrafo simples)
 *   ]
 * - 'cta' => [
 *     'label' => string,
 *     'icon' => SVG inline ou imagem
 *   ] (opcional)
 */
?>

<div class="section-full-bg">
  <div class="section-container">
    <div class="section-header">
      <h2 class="section-title"><?php echo esc_html($args['title']); ?></h2>
      <p class="section-subtitle"><?php echo esc_html($args['subtitle']); ?></p>
    </div>

    <?php
    $cards = $args['cards'];
    $total_cards = count($cards);
    $has_cta = !empty($args['cta']);

    // Se forem 6 cards e não houver CTA: 3 + 3
    if ($total_cards === 6 && !$has_cta) {
      $top_cards = array_slice($cards, 0, 3);
      $bottom_cards = array_slice($cards, 3, 3);
    } else {
      // Normal: 4 + resto
      $top_cards = array_slice($cards, 0, 4);
      $bottom_cards = array_slice($cards, 4);
    }
    ?>

    <div class="section-grid">
      <?php foreach ($top_cards as $card) : ?>
        <div class="section-card">
          <div class="section-card-icon">
            <img src="<?php echo esc_url($card['icon']); ?>" alt="">
          </div>
          <h3 class="section-card-title"><?php echo esc_html($card['title']); ?></h3>
          <?php if (!empty($card['items'])) : ?>
            <?php if (is_array($card['items'])) : ?>
              <ul class="section-card-list">
                <?php foreach ($card['items'] as $item) : ?>
                  <li><?php echo esc_html($item); ?></li>
                <?php endforeach; ?>
              </ul>
            <?php else : ?>
              <p class="section-card-list" style="list-style: none;"><?php echo esc_html($card['items']); ?></p>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>

    <div class="section-grid-bottom">
      <?php foreach ($bottom_cards as $card) : ?>
        <div class="section-card">
          <div class="section-card-icon">
            <img src="<?php echo esc_url($card['icon']); ?>" alt="">
          </div>
          <h3 class="section-card-title"><?php echo esc_html($card['title']); ?></h3>
          <?php if (!empty($card['items'])) : ?>
            <?php if (is_array($card['items'])) : ?>
              <ul class="section-card-list">
                <?php foreach ($card['items'] as $item) : ?>
                  <li><?php echo esc_html($item); ?></li>
                <?php endforeach; ?>
              </ul>
            <?php else : ?>
              <p class="section-card-list" style="list-style: none;"><?php echo esc_html($card['items']); ?></p>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>

      <?php if ($has_cta && $total_cards >= 7) : ?>
        <div class="section-cta-card">
          <h3 class="section-cta-title"><?php echo esc_html($args['cta']['label']); ?></h3>
          <div class="section-cta-icon">
            <?php echo $args['cta']['icon']; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
    
  </div>
</div>
