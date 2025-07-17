<?php
/**
 * Template Part: Produtos Features Section (Tabela Funcionalidade + Descrição)
 *
 * Espera os seguintes argumentos via get_template_part(..., ..., $args):
 * - 'title' => string
 * - 'description' => string
 * - 'col1_title' => string (título da coluna 1)
 * - 'col2_title' => string (título da coluna 2)
 * - 'col1_items' => array de strings (itens com ✔)
 * - 'col2_items' => array de strings (descrições)
 */
?>

<section class="products-features-section">

  <!-- DESKTOP -->
  <div class="section-layout-desktop">
    <div class="section-text-column">
      <div class="section-title-features">
        <div class="section-main-title">
          <?php echo esc_html($args['title']); ?>
        </div>
        <p class="section-description">
          <?php echo esc_html($args['description']); ?>
        </p>
      </div>
    </div>

    <div class="section-columns-wrapper">
      <div class="section-table-column funcionalidades">
        <div class="section-table-header">
          <?php echo esc_html($args['col1_title']); ?>
        </div>
        <ul class="section-table-list">
          <?php foreach ($args['col1_items'] as $item): ?>
            <li><span class="check-icon">✔</span><?php echo esc_html($item); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="section-table-column descricao">
        <div class="section-table-header">
          <?php echo esc_html($args['col2_title']); ?>
        </div>
        <ul class="section-table-list">
          <?php foreach ($args['col2_items'] as $item): ?>
            <li><?php echo esc_html($item); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>

  <!-- MOBILE -->
  <div class="section-scroll-table">
    <div class="section-title">
      <div class="section-main-title">
        <?php echo esc_html($args['title']); ?>
      </div>
      <p class="section-description">
        <?php echo esc_html($args['description']); ?>
      </p>
    </div>

    <div class="section-scroll-wrapper">
      <div class="section-table-column funcionalidades">
        <div class="section-table-header">
          <?php echo esc_html($args['col1_title']); ?>
        </div>
        <ul class="section-table-list">
          <?php foreach ($args['col1_items'] as $item): ?>
            <li><span class="check-icon">✔</span><?php echo esc_html($item); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>

      <div class="section-table-column descricao">
        <div class="section-table-header">
          <?php echo esc_html($args['col2_title']); ?>
        </div>
        <ul class="section-table-list">
          <?php foreach ($args['col2_items'] as $item): ?>
            <li><?php echo esc_html($item); ?></li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
  </div>
</section>
