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
 *   ]
 */
?>
<div class="section-full-bg">
<div class="section-container">
  <div class="section-header">
    <h1 class="section-title"><?php echo esc_html($args['title']); ?></h1>
    <p class="section-subtitle"><?php echo esc_html($args['subtitle']); ?></p>
  </div>

  <div class="section-grid">
    <?php foreach (array_slice($args['cards'], 0, 4) as $card) : ?>
      <div class="section-card">
        <div class="section-card-icon">
          <img src="<?php echo esc_url($card['icon']); ?>" alt="">
        </div>
        <h3 class="section-card-title"><?php echo esc_html($card['title']); ?></h3>
        <?php if (is_array($card['items'])) : ?>
          <ul class="section-card-list">
            <?php foreach ($card['items'] as $item) : ?>
              <li><?php echo esc_html($item); ?></li>
            <?php endforeach; ?>
          </ul>
        <?php else : ?>
          <p class="section-card-list" style="list-style: none;"><?php echo esc_html($card['items']); ?></p>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>
  </div>

  <div class="section-grid-bottom">
    <?php foreach (array_slice($args['cards'], 4, 3) as $card) : ?>
      <div class="section-card">
        <div class="section-card-icon">
          <img src="<?php echo esc_url($card['icon']); ?>" alt="">
        </div>
        <h3 class="section-card-title"><?php echo esc_html($card['title']); ?></h3>
        <?php if (is_array($card['items'])) : ?>
          <ul class="section-card-list">
            <?php foreach ($card['items'] as $item) : ?>
              <li><?php echo esc_html($item); ?></li>
            <?php endforeach; ?>
          </ul>
        <?php else : ?>
          <p class="section-card-list" style="list-style: none;"><?php echo esc_html($card['items']); ?></p>
        <?php endif; ?>
      </div>
    <?php endforeach; ?>

    <div class="section-cta-card">
      <h3 class="section-cta-title"><?php echo esc_html($args['cta']['label']); ?></h3>
      <div class="section-cta-icon">
        <?php echo $args['cta']['icon']; ?>
      </div>
    </div>
  </div>
</div>
</div>
