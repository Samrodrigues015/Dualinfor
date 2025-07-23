<?php

/** Template Name: Página Consultoria
 * Description: Página personalizada para a página Consultoria da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/consultadoria-section-hero', null, array(
  'title' => 'Consultadoria Dualinfor: Soluções Estratégicas para Impulsionar o Sucesso do Seu Negócio',
  'subtitle' => 'Receba orientação especializada para transformar os desafios do seu negócio em oportunidades de crescimento. Juntos, encontramos a solução ideal para cada etapa da sua operação.',
  'image' => get_template_directory_uri() . '/assets/img/img-consultadoria/heroconsultadoria.png',
  'btn_primary_text' => 'Solicite uma Reunião Personalizada',
  'btn_primary_link' => '#formulario',
  'btn_secondary_text' => 'Fale com um Especialista Agora',
  'btn_secondary_link' => '#contacto',
  'align_left' => true
));
?>

<?php get_footer(); ?>