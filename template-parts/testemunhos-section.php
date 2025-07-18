<?php

/**
 * Template Part: Secção de Testemunhos
 *
 * Argumentos esperados:
 * - 'title' => string
 * - 'subtitle' => string (opcional)
 * - 'testemunhos' => array(
 *     [
 *       'nome' => string,
 *       'cargo' => string,
 *       'mensagem' => string,
 *     ]
 *   )
 */

$testemunhos = $args['testemunhos'] ?? [];
$title = $args['title'] ?? 'Testemunhos';
$subtitle = $args['subtitle'] ?? '';
?>

<div class="section-testimonials">
  <div class="section-testimonials-header">
    <h2 class="section-testimonials-title"><?php echo esc_html($title); ?></h2>
    <?php if (!empty($subtitle)) : ?>
      <p class="section-testimonials-subtitle"><?php echo esc_html($subtitle); ?></p>
    <?php endif; ?>

    <div class="section-testimonials-navigation">
      <button class="section-testimonials-nav-button" onclick="previousSlide()">
        <svg viewBox="0 0 24 24">
          <path d="M15.41 7.41L14 6l-6 6 6 6 1.41-1.41L10.83 12z" />
        </svg>
      </button>
      <button class="section-testimonials-nav-button active" onclick="nextSlide()">
        <svg viewBox="0 0 24 24">
          <path d="M10 6L8.59 7.41 13.17 12l-4.58 4.59L10 18l6-6z" />
        </svg>
      </button>
    </div>
  </div>

  <div class="section-testimonials-content">
    <div class="section-testimonials-carousel">
      <div class="section-testimonials-cards" id="testimonialCards">
        <?php
        $imagem_index = 1;
        foreach ($testemunhos as $testemunho) :
          $imagem = get_template_directory_uri() . '/assets/img/img-testemunhas/testemunha' . $imagem_index . '.png';
          $imagem_index++;
          if ($imagem_index > 8) $imagem_index = 1;
        ?>
          <div class="section-testimonials-card">
            <div class="section-testimonials-avatar">
              <img src="<?php echo esc_url($imagem); ?>" alt="<?php echo esc_attr($testemunho['nome']); ?>">
            </div>
            <div class="section-testimonials-text">
              <p class="section-testimonials-quote">"<?php echo esc_html($testemunho['mensagem']); ?>"</p>
              <div class="section-testimonials-author"><?php echo esc_html($testemunho['nome']); ?></div>
              <div class="section-testimonials-role"><?php echo esc_html($testemunho['cargo']); ?></div>
            </div>
            <div class="section-testimonials-quote-icon">
              <svg viewBox="0 0 24 24">
                <path d="M14,17H17L19,13V7H13V13H16M6,17H9L11,13V7H5V13H8L6,17Z" />
              </svg>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>

<!-- Certifica-te que este script JS está incluído (podes meter no footer do tema ou aqui mesmo) -->
<script>
  let currentSlide = 0;
  const totalSlides = document.querySelectorAll('.section-testimonials-card').length;

  function updateCarousel() {
    const cards = document.getElementById('testimonialCards');
    const translateX = -currentSlide * 100;
    cards.style.transform = `translateX(${translateX}%)`;

    const buttons = document.querySelectorAll('.section-testimonials-nav-button');
    buttons.forEach(button => button.classList.remove('active'));
    if (currentSlide === 0) buttons[0].classList.add('active');
    else buttons[1].classList.add('active');
  }

  function nextSlide() {
    currentSlide = (currentSlide + 1) % totalSlides;
    updateCarousel();
  }

  function previousSlide() {
    currentSlide = (currentSlide - 1 + totalSlides) % totalSlides;
    updateCarousel();
  }

  setInterval(nextSlide, 6000);
</script>