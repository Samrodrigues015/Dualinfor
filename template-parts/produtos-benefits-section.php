<?php

/**
 * Template Part: Produtos Benefits Section
 */

// Estilos opcionais
$bg_color                 = $args['bg_color'] ?? null;
$text_color               = $args['text_color'] ?? null;
$card_bg_color            = $args['card_bg_color'] ?? null;
$icon_color               = $args['icon_color'] ?? null;
$list_color               = $args['list_color'] ?? null;
$list_bullet_color        = $args['list_bullet_color'] ?? null;
$btn_mobile_bg            = $args['btn_mobile_bg'] ?? null;
$btn_mobile_color         = $args['btn_mobile_color'] ?? null;
$btn_mobile_hover_bg      = $args['btn_mobile_hover_bg'] ?? null;
$btn_mobile_hover_color   = $args['btn_mobile_hover_color'] ?? null;

$cards = $args['cards'];
$total_cards = count($cards);
$has_cta = !empty($args['cta']);

if ($total_cards === 6 && !$has_cta) {
  $top_cards = array_slice($cards, 0, 3);
  $bottom_cards = array_slice($cards, 3, 3);
} else {
  $top_cards = array_slice($cards, 0, 4);
  $bottom_cards = array_slice($cards, 4);
}

// Estilos inline
$section_style = '';
if ($bg_color) $section_style .= "background-color: $bg_color;";
if ($text_color) $section_style .= "color: $text_color;";

$card_style = $card_bg_color ? "background-color: $card_bg_color;" : '';
$title_style = $text_color ? "color: $text_color;" : '';
$text_style = $text_color ? "color: $text_color;" : '';
$list_style = $list_color ? "color: $list_color;" : '';
?>

<?php if ($icon_color || $list_bullet_color || $list_color || $btn_mobile_bg || $btn_mobile_color || $btn_mobile_hover_bg || $btn_mobile_hover_color) : ?>
  <style>
    <?php if ($list_bullet_color) : ?>.section-card-list li::marker {
      color: <?= esc_attr($list_bullet_color); ?> !important;
    }

    <?php endif; ?><?php if ($list_color) : ?>.section-card-list,
    .section-card-list li {
      color: <?= esc_attr($list_color); ?> !important;
    }

    <?php endif; ?><?php if ($icon_color) : ?>.section-card-icon svg,
    .section-card-icon svg path {
      fill: <?= esc_attr($icon_color); ?> !important;
    }

    <?php endif; ?><?php if ($btn_mobile_bg || $btn_mobile_color || $btn_mobile_hover_bg || $btn_mobile_hover_color) : ?>.mobile-btn button {
      <?php if ($btn_mobile_bg) : ?>background-color: <?= esc_attr($btn_mobile_bg); ?>;
      <?php endif; ?><?php if ($btn_mobile_color) : ?>color: <?= esc_attr($btn_mobile_color); ?>;
      <?php endif; ?>
    }

    .mobile-btn button:hover {
      <?php if ($btn_mobile_hover_bg) : ?>background-color: <?= esc_attr($btn_mobile_hover_bg); ?>;
      <?php endif; ?><?php if ($btn_mobile_hover_color) : ?>color: <?= esc_attr($btn_mobile_hover_color); ?>;
      <?php endif; ?>
    }

    .mobile-btn button a {
      color: inherit;
      text-decoration: none;
    }

    <?php endif; ?>
  </style>
<?php endif; ?>

<div class="section-full-bg" <?php if ($section_style) echo 'style="' . $section_style . '"'; ?>>
  <div class="section-container">
    <div class="section-header">
      <h2 class="section-title" <?php if ($title_style) echo 'style="' . $title_style . '"'; ?>>
        <?= esc_html($args['title']); ?>
      </h2>
      <p class="section-subtitle" <?php if ($text_style) echo 'style="' . $text_style . '"'; ?>>
        <?= esc_html($args['subtitle']); ?>
      </p>
    </div>

    <div class="section-grid">
      <?php foreach (array_merge($top_cards, $bottom_cards) as $card) : ?>
        <div class="section-card" <?php if ($card_style) echo 'style="' . $card_style . '"'; ?>>
          <div class="section-card-icon">
            <?php
            if (str_contains($card['icon'], '.svg')) {
              echo '<img src="' . esc_url($card['icon']) . '" alt="">';
            } else {
              echo $card['icon'];
            }
            ?>
          </div>
          <h3 class="section-card-title" <?php if ($title_style) echo 'style="' . $title_style . '"'; ?>>
            <?= esc_html($card['title']); ?>
          </h3>
          <?php if (!empty($card['items'])) : ?>
            <?php if (is_array($card['items'])) : ?>
              <ul class="section-card-list" <?php if ($list_style) echo 'style="' . $list_style . '"'; ?>>
                <?php foreach ($card['items'] as $item) : ?>
                  <li><?= esc_html($item); ?></li>
                <?php endforeach; ?>
              </ul>
            <?php else : ?>
              <p class="section-card-list" style="list-style: none;" <?php if ($list_style) echo 'style="' . $list_style . '"'; ?>>
                <?= esc_html($card['items']); ?>
              </p>
            <?php endif; ?>
          <?php endif; ?>
        </div>
      <?php endforeach; ?>

      <?php if ($has_cta && $total_cards >= 7) : ?>
        <div class="section-cta-card" <?php if ($card_style) echo 'style="' . $card_style . '"'; ?>>
          <h3 class="section-cta-title" <?php if ($title_style) echo 'style="' . $title_style . '"'; ?>>
            <?= esc_html($args['cta']['label']); ?>
          </h3>

          <div class="section-cta-icon">
            <a href="<?= esc_url($args['cta']['url']); ?>" aria-label="<?= esc_attr($args['cta']['label']); ?>">
              <?= $args['cta']['icon']; ?>
            </a>
          </div>
        </div>
      <?php endif; ?>
    </div>

    <?php if ($has_cta) : ?>
      <div class="mobile-btn">
        <a href="#formulario">
          <button>
            <?= esc_html($args['cta']['label']); ?>
          </button>
        </a>
      </div>
    <?php endif; ?>

  </div>
</div>