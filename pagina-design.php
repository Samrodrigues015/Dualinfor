<?php

/**  Template Name: Página Design
 * Description: Página personalizada para a página Design da Dualinfor.
 */

get_header();
?>


<?php
get_template_part('template-parts/consultadoria-section-hero', null, array(
  'title' => 'Design e Imagem Corporativa: Eleve a identidade da sua empresa com a Dualinfor',
  'subtitle' => 'Crie uma imagem corporativa forte, reconhecível e alinhada aos valores da sua empresa. Desenvolvemos soluções criativas que destacam a sua marca no mercado.',
  'image' => get_template_directory_uri() . '/assets/img/img-design/designhero.png',
  'btn_primary_text' => 'Solicite uma Reunião Personalizada',
  'btn_primary_link' => '#formulario',
  'btn_secondary_text' => 'Fale com um Especialista Agora',
  'btn_secondary_link' => '#contacto',
  'align_left' => true,
  'layout_type' => 'titulo-botoes-paragrafo'
));
?>


<?php get_footer(); ?>