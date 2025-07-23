<?php

/**
 * Template Name: Página Cibersegurança
 * Description: Página personalizada para a página Cibersegurança da Dualinfor.
 */
get_header();
?>


<?php
get_template_part('template-parts/consultadoria-section-hero', null, array(
  'title' => 'Cibersegurança Dualinfor: Proteja os dados e operações da sua empresa contra ameaças digitais',
  'subtitle' => 'Identifique, previna e resolva ataques cibernéticos com soluções avançadas de segurança digital. Mantenha os seus sistemas, informações e operações protegidos com a Dualinfor.',
  'image' => get_template_directory_uri() . '/assets/img/img-ciberseguranca/herociberseguranca.png',
  'btn_primary_text' => 'Solicite uma Reunião Personalizada',
  'btn_primary_link' => '#formulario',
  'btn_secondary_text' => 'Fale com um Especialista Agora',
  'btn_secondary_link' => '#contacto',
  'align_left' => true
));
?>

<?php get_footer(); ?>