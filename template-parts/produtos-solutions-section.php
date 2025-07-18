<?php
/**
 * Template Part: Secção de Soluções Empresariais com imagem e cards
 * Uso: get_template_part('template-parts/section-solution', null, [...]);
 */

// Parâmetros esperados:
// 'title' => (string) Título principal
// 'subtitle' => (string) Subtítulo (opcional)
// 'image_position' => 'left' ou 'right' (por defeito: 'right')
// 'image_src' => (string) URL da imagem
// 'cards' => array de arrays com 'icon' (SVG), 'title' e 'list' (array de strings ou 1 string simples)

$title = $args['title'] ?? '';
$subtitle = $args['subtitle'] ?? '';
$image_position = $args['image_position'] ?? 'right';
$image_src = $args['image_src'] ?? '';
$cards = $args['cards'] ?? [];

$reverse = $image_position === 'left' ? 'flex-row-reverse' : '';
?>

<div class="section-solution-container">
  <div class="section-solution-header">
    <h1 class="section-solution-title"><?php echo esc_html($title); ?></h1>
    <?php if (!empty($subtitle)) : ?>
      <p class="section-solution-subtitle"><?php echo esc_html($subtitle); ?></p>
    <?php endif; ?>
  </div>

  <div class="section-solution-content <?php echo esc_attr($reverse); ?>">
    <div class="section-solution-cards">
      <?php foreach ($cards as $card) : ?>
        <div class="section-solution-card">
          <?php if (!empty($card['icon'])) : ?>
            <div class="section-solution-card-icon">
              <?php echo $card['icon']; ?>
            </div>
          <?php endif; ?>

          <h3 class="section-solution-card-title"><?php echo esc_html($card['title'] ?? ''); ?></h3>

          <?php if (!empty($card['list'])) : ?>
            <?php if (is_array($card['list'])) : ?>
              <ul class="section-solution-card-list">
                <?php foreach ($card['list'] as $item) : ?>
                  <li><?php echo esc_html($item); ?></li>
                <?php endforeach; ?>
              </ul>
            <?php else : ?>
              <p class="section-solution-card-list" style="list-style: none; padding-left: 0;">
                <span style="color: #555; font-size: 16px; line-height: 1.5;">
                  <?php echo esc_html($card['list']); ?>
                </span>
              </p>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>
    </div>

    <?php if (!empty($image_src)) : ?>
      <div class="section-solution-image">
        <img src="<?php echo esc_url($image_src); ?>" alt="Imagem ilustrativa">
      </div>
    <?php endif; ?>
  </div>
</div>
