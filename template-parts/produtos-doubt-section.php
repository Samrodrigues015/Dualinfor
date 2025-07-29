<?php
/**
 * Template Part: Secção de Dúvidas Frequentes (FAQ)
 * Uso:
 * get_template_part('template-parts/produtos-doubt-section', null, array(
 *   'title' => 'Esclareça as suas dúvidas sobre Energias Renováveis',
 *   'title_centered' => true,
 *   'image' => get_template_directory_uri() . '/assets/img/img-predio.png',
 *   'faqs' => array(
 *     array(
 *       'question' => 'Qual é o tempo médio de retorno do investimento?',
 *       'answer' => 'Sim, são intuitivas e não requerem formação técnica.',
 *     ),
 *     [...]
 *   )
 * ));
 */

$title = $args['title'] ?? '';
$title_centered = $args['title_centered'] ?? false;
$image = $args['image'] ?? '';
$faqs = $args['faqs'] ?? [];
?>

<section class="section-doubt-container">
  <div class="section-doubt-header">
    <h2 class="section-doubt-title <?php echo $title_centered ? 'text-center' : ''; ?>">
      <?php echo esc_html($title); ?>
    </h2>
  </div>

  <div class="section-doubt-content">
    <?php if ($image): ?>
      <div class="section-doubt-image-container">
        <img src="<?php echo esc_url($image); ?>" alt="Imagem de apoio" class="section-doubt-image">
      </div>
    <?php endif; ?>

    <div class="section-doubt-faq-container">
      <?php foreach ($faqs as $faq): ?>
        <div class="section-doubt-faq-item">
          <div class="section-doubt-faq-header">
            <h3 class="section-doubt-faq-question"><?php echo esc_html($faq['question']); ?></h3>
            <div class="section-doubt-faq-toggle">
              <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-energiarenovaveis/setaabaixo.svg" alt="">
            </div>
          </div>
          <div class="section-doubt-faq-answer" style="display: none;">
            <?php echo esc_html($faq['answer']); ?>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>