<?php

/**
 * Template Part: Formulário de Orçamento Personalizado
 * Uso:
 * get_template_part('template-parts/formulario-section', null, array(
 *   'title' => 'Peça já o seu orçamento personalizado',
 *   'paragraphs' => [
 *     'Texto 1',
 *     'Texto 2',
 *     '<em>Texto em itálico</em>'
 *   ],
 *   'fields_overrides' => [
 *     'area' => [
 *       'label' => 'Novo texto do label',
 *       'placeholder' => 'Texto exemplo'
 *     ]
 *   ]
 * ));
 */

$args = wp_parse_args($args, array(
  'title' => 'Peça já o seu orçamento personalizado',
  'paragraphs' => array(
    'Quer saber como as soluções em energias renováveis da Dualinfor podem beneficiar a sua empresa?',
    'Preencha o formulário abaixo e receba uma proposta ajustada às suas necessidades.',
    '<em>Garantimos total privacidade e uma resposta no prazo máximo de 24 horas úteis.</em>'
  ),
  'fields_overrides' => array()
));

// Campos que podem ser personalizados
$fields = array(
  'area' => array(
    'label' => 'Área Disponível para Instalação (m²)',
    'placeholder' => ''
  )
);

// Aplica os overrides fornecidos na chamada
foreach ($args['fields_overrides'] as $field_key => $override) {
  if (isset($fields[$field_key])) {
    $fields[$field_key] = array_merge($fields[$field_key], $override);
  }
}
?>

<div class="form-wrapper">
  <div class="form-left">
    <h2><?php echo esc_html($args['title']); ?></h2>
    <?php foreach ($args['paragraphs'] as $paragraph): ?>
      <p><?php echo $paragraph; ?></p>
    <?php endforeach; ?>
  </div>

  <form>
    <div>
      <label for="nome">Nome completo</label>
      <input type="text" id="nome" name="nome" placeholder="Vitória Oliveira">
    </div>

    <div>
      <label for="email">E-mail</label>
      <input type="email" id="email" name="email">
    </div>

    <div>
      <label for="telefone">Telefone</label>
      <input type="tel" id="telefone" name="telefone">
    </div>

    <div>
      <label for="tipo">Tipo de Negócio</label>
      <select id="tipo" name="tipo">
        <option>Industrial</option>
        <option>Comercial</option>
        <option>Residencial</option>
        <option>Agrícola</option>
      </select>
    </div>

    <div>
      <label for="area"><?php echo esc_html($fields['area']['label']); ?></label>
      <input
        type="<?php echo isset($fields['area']['type']) ? esc_attr($fields['area']['type']) : 'text'; ?>"
        id="area"
        name="area"
        placeholder="<?php echo esc_attr($fields['area']['placeholder']); ?>">

    </div>

    <div>
      <label for="comentarios">Comentários Adicionais</label>
      <textarea id="comentarios" name="comentarios"></textarea>
    </div>

    <button type="submit">Solicitar Orçamento</button>
  </form>
</div>