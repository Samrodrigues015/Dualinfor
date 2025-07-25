<?php
/**
 * Template Part: Consultoria Soluções Setor
 *
 * Parâmetros aceites:
 * - title (string)
 * - paragraph (string)
 * - image (URL)
 * - bg_color (string)
 * - text_color (string)
 * - card_bg_color (string)
 * - card_border_color (string)
 * - icon_color (string)
 * - cards (array de arrays com 'icon', 'title', 'text')
 */

$args = wp_parse_args($args, array(
  'title' => '',
  'paragraph' => '',
  'image' => '',
  'bg_color' => '#1c1c1c',
  'text_color' => '#ffffff',
  'card_bg_color' => '#141414',
  'card_border_color' => '#ae82ff',
  'icon_color' => '#ae82ff',
  'cards' => array()
));
?>

<style>
  .consultadoria-setor-section {
    background-color: <?= esc_attr($args['bg_color']); ?>;
    color: <?= esc_attr($args['text_color']); ?>;
    padding: 60px 20px;
  }

  .consultadoria-setor-container {
    max-width: 1200px;
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 40px;
    align-items: start;
  }

  .consultadoria-setor-left {
    display: flex;
    flex-direction: column;
    gap: 20px;
  }

  .consultadoria-setor-left h1 {
    font-size: 2.5rem;
    margin: 0;
    color: <?= esc_attr($args['text_color']); ?>;
  }

  .consultadoria-setor-left img {
    width: 100%;
    border-radius: 20px;
    height: auto;
  }

  .consultadoria-setor-right {
    display: flex;
    flex-direction: column;
    gap: 30px;
    justify-content: space-between;
    height: 100%;
  }

  .consultadoria-setor-right p {
    font-size: 1.1rem;
    line-height: 1.6;
    margin: 0;
  }

  .consultadoria-setor-cards {
    display: grid;
    grid-template-columns: 1fr 1fr;
    gap: 20px;
  }

  .consultadoria-setor-card {
    background-color: <?= esc_attr($args['card_bg_color']); ?>;
    border: 1px solid <?= esc_attr($args['card_border_color']); ?>;
    border-radius: 16px;
    padding: 20px;
    height: 100%;
    display: flex;
    flex-direction: column;
    justify-content: flex-start;
    gap: 10px;
  }

  .consultadoria-setor-card h3 {
    font-size: 1.2rem;
    color: <?= esc_attr($args['text_color']); ?>;
    margin: 0;
  }

  .consultadoria-setor-card p {
    font-size: 1rem;
    color: <?= esc_attr($args['text_color']); ?>;
    margin: 0;
  }

  .consultadoria-setor-card .icon img {
    height: 32px;
  }

  @media (max-width: 900px) {
    .consultadoria-setor-container {
      grid-template-columns: 1fr;
    }

    .consultadoria-setor-cards {
      grid-template-columns: 1fr;
    }
  }
</style>

<section class="consultadoria-setor-section">
  <div class="consultadoria-setor-container">
    <div class="consultadoria-setor-left">
      <h1><?= esc_html($args['title']); ?></h1>
      <img src="<?= esc_url($args['image']); ?>" alt="Imagem">
    </div>
    <div class="consultadoria-setor-right">
      <p><?= esc_html($args['paragraph']); ?></p>

      <?php if (!empty($args['cards']) && is_array($args['cards'])) : ?>
        <div class="consultadoria-setor-cards">
          <?php foreach ($args['cards'] as $card) : ?>
            <div class="consultadoria-setor-card">
              <?php if (!empty($card['icon'])) : ?>
                <div class="icon">
                  <img src="<?= esc_url($card['icon']); ?>" alt="">
                </div>
              <?php endif; ?>
              <h3><?= esc_html($card['title']); ?></h3>
              <p><?= esc_html($card['text']); ?></p>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>
  </div>
</section>
