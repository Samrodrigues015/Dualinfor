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
  'align_left' => true,
  'layout_type' => 'titulo-botoes-paragrafo'
));
?>

<?php
get_template_part('template-parts/hero-section-secondary', null, array(
  'title' => 'Soluções de cibersegurança que garantem tranquilidade e confiança',
  'paragraph' => 'Diante dos crescentes riscos cibernéticos, a Dualinfor oferece soluções personalizadas de cibersegurança para proteger dados, mitigar ameaças e garantir a continuidade do seu negócio.',
  'image' => get_template_directory_uri() . '/assets/img/img-ciberseguranca/herosecondary.png',
  'image_right' => false
));
?>

<?php get_footer(); ?>