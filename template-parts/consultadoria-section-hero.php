<?php
/**
 * Template Part: Hero Consultadoria
 * 
 * Exemplo de uso:
 * get_template_part('template-parts/consultadoria-section-hero', null, array(
 *   'title' => 'Consultadoria Dualinfor: Soluções Estratégicas para Impulsionar o Sucesso do Seu Negócio',
 *   'subtitle' => 'Receba orientação especializada para transformar os desafios do seu negócio em oportunidades de crescimento.',
 *   'image' => get_template_directory_uri() . '/assets/img/heroconsultadoria.png',
 *   'btn_primary_text' => 'Solicite uma Reunião Personalizada',
 *   'btn_primary_link' => '#formulario',
 *   'btn_secondary_text' => 'Fale com um Especialista Agora',
 *   'btn_secondary_link' => '#contacto',
 *   'align_left' => true, // ou false para centralizado
 *   'layout_type' => 'titulo-botoes-paragrafo' // ou 'default'
 * ));
 */

$args = wp_parse_args($args, array(
  'title' => '',
  'subtitle' => '',
  'image' => '',
  'btn_primary_text' => '',
  'btn_primary_link' => '',
  'btn_secondary_text' => '',
  'btn_secondary_link' => '',
  'align_left' => false,
  'layout_type' => 'default'
));

$align_class = $args['align_left'] ? 'text-left' : 'text-center';
$layout_type_class = $args['layout_type'] === 'titulo-botoes-paragrafo' ? 'titulo-botoes-paragrafo' : '';
?>

<section class="section-hero-consultadoria">
  <div class="section-hero-consultadoria-container">
    
    <div class="section-hero-consultadoria-content <?php echo esc_attr($align_class . ' ' . $layout_type_class); ?>">
      <?php if ($args['layout_type'] === 'titulo-botoes-paragrafo') : ?>
        <div class="section-hero-consultadoria-left">
          <?php if (!empty($args['title'])) : ?>
            <h1 class="section-hero-consultadoria-title"><?php echo esc_html($args['title']); ?></h1>
          <?php endif; ?>

          <div class="section-hero-consultadoria-buttons">
            <?php if (!empty($args['btn_primary_text'])) : ?>
              <a href="<?php echo esc_url($args['btn_primary_link']); ?>" class="section-hero-consultadoria-btn section-hero-consultadoria-btn-primary">
                <?php echo esc_html($args['btn_primary_text']); ?>
                <svg class="section-hero-consultadoria-arrow" viewBox="0 0 24 24"><path d="M5 12h14m-7-7l7 7-7 7"/></svg>
              </a>
            <?php endif; ?>
            <?php if (!empty($args['btn_secondary_text'])) : ?>
              <a href="<?php echo esc_url($args['btn_secondary_link']); ?>" class="section-hero-consultadoria-btn section-hero-consultadoria-btn-secondary">
                <?php echo esc_html($args['btn_secondary_text']); ?>
              </a>
            <?php endif; ?>
          </div>
        </div>

        <div class="section-hero-consultadoria-right">
          <?php if (!empty($args['subtitle'])) : ?>
            <p class="section-hero-consultadoria-subtitle"><?php echo esc_html($args['subtitle']); ?></p>
          <?php endif; ?>
        </div>
      <?php else : ?>
        <?php if (!empty($args['title'])) : ?>
          <h1 class="section-hero-consultadoria-title"><?php echo esc_html($args['title']); ?></h1>
        <?php endif; ?>

        <?php if (!empty($args['subtitle'])) : ?>
          <p class="section-hero-consultadoria-subtitle"><?php echo esc_html($args['subtitle']); ?></p>
        <?php endif; ?>

        <div class="section-hero-consultadoria-buttons">
          <?php if (!empty($args['btn_primary_text'])) : ?>
            <a href="<?php echo esc_url($args['btn_primary_link']); ?>" class="section-hero-consultadoria-btn section-hero-consultadoria-btn-primary">
              <?php echo esc_html($args['btn_primary_text']); ?>
              <svg class="section-hero-consultadoria-arrow" viewBox="0 0 24 24"><path d="M5 12h14m-7-7l7 7-7 7"/></svg>
            </a>
          <?php endif; ?>
          <?php if (!empty($args['btn_secondary_text'])) : ?>
            <a href="<?php echo esc_url($args['btn_secondary_link']); ?>" class="section-hero-consultadoria-btn section-hero-consultadoria-btn-secondary">
              <?php echo esc_html($args['btn_secondary_text']); ?>
            </a>
          <?php endif; ?>
        </div>
      <?php endif; ?>
    </div>

    <?php if (!empty($args['image'])) : ?>
      <div class="section-hero-consultadoria-image-container">
        <img src="<?php echo esc_url($args['image']); ?>" alt="imagem hero" class="section-hero-consultadoria-image" loading="lazy">
      </div>
    <?php endif; ?>

  </div>
</section>
