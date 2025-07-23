<?php

/** Template Name: Página Gestão
 * Description: Página personalizada para a página Gestão da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/consultadoria-section-hero', null, array(
  'title' => 'Gestão de filas Dualinfor: organização e eficiência para um atendimento de excelência',
  'subtitle' => 'Otimize o fluxo de clientes, reduza tempos de espera e melhore a experiência de atendimento. As nossas soluções adaptam-se a empresas de qualquer dimensão.',
  'image' => get_template_directory_uri() . '/assets/img/img-gestao/herogestao.png',
  'btn_primary_text' => 'Solicite uma Reunião Personalizada',
  'btn_primary_link' => '#formulario',
  'btn_secondary_text' => 'Fale com um Especialista Agora',
  'btn_secondary_link' => '#contacto',
  'align_left' => true
));
?>

<?php get_footer(); ?>