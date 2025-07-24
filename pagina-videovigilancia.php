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

<?php
get_template_part('template-parts/hero-section-secondary', null, array(
  'title' => 'Soluções de videovigilância que garantem Tranquilidade e eficiência operacional',
  'paragraph' => 'Na Dualinfor, compreendemos que a segurança é uma prioridade. Por isso, oferecemos sistemas de videovigilância de última geração, que vão além da monitorização, ajudando a prevenir incidentes, proteger ativos e assegurar o cumprimento de normas legais.',
  'image' => get_template_directory_uri() . '/assets/img/img-videovigilancia/herosecondary.png',
  'image_right' => true
));
?>

<?php get_footer(); ?>