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
  'align_left' => true,
  'layout_type' => 'titulo-botoes-paragrafo'
));
?>

<?php
get_template_part('template-parts/hero-section-secondary', null, array(
  'title' => 'Organize o atendimento e melhore a satisfação dos seus clientes',
  'paragraph' => 'A Gestão de Filas de Espera da Dualinfor oferece soluções tecnológicas para organizar e agilizar o atendimento em qualquer tipo de negócio. Com ferramentas inovadoras, garantimos maior eficiência operacional e uma experiência mais positiva para os seus clientes.',
  'image' => get_template_directory_uri() . '/assets/img/img-gestao/herosecondary.png',
  'image_right' => false
));
?>



<?php get_footer(); ?>