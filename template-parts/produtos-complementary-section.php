<?php

/**
 * Template Part: Secção de Soluções Complementares
 */

$title = $args['title'] ?? '';
$image = $args['image'] ?? '';
$image_position = $args['image_position'] ?? 'right';
$cta_text = $args['cta_text'] ?? '';
$cta_color = $args['cta_color'] ?? '#293992';
$services = $args['services'] ?? [];

$reverse = $image_position === 'left' ? 'flex-row-reverse' : '';

// Ícone comum para os serviços
$svg_icon_path = get_template_directory() . '/assets/img/img-energiarenovaveis/setalateral.svg';
$svg_icon_content = file_exists($svg_icon_path) ? file_get_contents($svg_icon_path) : '';

// Ícone específico para o CTA
$cta_icon_path = get_template_directory() . '/assets/img/img-energiarenovaveis/setaexterna.svg';
$cta_icon_content = file_exists($cta_icon_path) ? file_get_contents($cta_icon_path) : '';
?>

<div class="section-complementary-container">
  <div class="section-complementary-content <?php echo esc_attr($reverse); ?>">
    <div class="section-complementary-left">
      <h2 class="section-complementary-title"><?php echo esc_html($title); ?></h2>

      <div class="section-complementary-services">
        <?php foreach ($services as $service) : ?>
          <div class="section-complementary-service">
            <div class="section-complementary-service-header">
              <div>
                <h3 class="section-complementary-service-title"><?php echo esc_html($service['title'] ?? ''); ?></h3>
                <p class="section-complementary-service-description"><?php echo esc_html($service['description'] ?? ''); ?></p>
              </div>
              <div class="section-complementary-arrow">
                <?php if (!empty($service['url'])): ?>
                  <a href="<?php echo esc_url($service['url']); ?>">
                    <?php echo $svg_icon_content; ?>
                  </a>
                <?php else: ?>
                  <?php echo $svg_icon_content; ?>
                <?php endif; ?>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="section-complementary-right">
      <?php if (!empty($image)) : ?>
        <img src="<?php echo esc_url($image); ?>" alt="Imagem complementar" class="section-complementary-image">
      <?php endif; ?>

      <?php if (!empty($cta_text)) : ?>
        <div class="section-complementary-cta" style="background-color: <?php echo esc_attr($cta_color); ?>;">
          <p class="section-complementary-cta-text"><?php echo esc_html($cta_text); ?></p>
          <div class="section-complementary-cta-arrow">
            <?php echo $cta_icon_content; ?>
          </div>
        </div>
      <?php endif; ?>
    </div>
  </div>

  <div class="btn-mobile" style="background-color: transparent;">
    <button style="background-color: <?php echo esc_attr($cta_color); ?>;">Peça Orçamento Personalizado</button>
  </div>
</div>
