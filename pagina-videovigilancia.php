<?php

/**
 * Template Name: Página Videovigilancia
 *  Description: Página personalizada para a página Videovigilancia da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/consultadoria-section-hero', null, array(
  'title' => 'Videovigilância Dualinfor: Segurança avançada para empresas de qualquer dimensão',
  'subtitle' => 'Proteja o seu espaço, ativos e equipa com soluções de videovigilância de alta tecnologia, personalizadas para responder às necessidades do seu negócio.',
  'image' => get_template_directory_uri() . '/assets/img/img-videovigilancia/herovideovigilancia.png',
  'btn_primary_text' => 'Solicite uma Reunião Personalizada',
  'btn_primary_link' => '#formulario',
  'btn_secondary_text' => 'Fale com um Especialista Agora',
  'btn_secondary_link' => '#contacto',
  'align_left' => true
));
?>

<?php get_footer(); ?>