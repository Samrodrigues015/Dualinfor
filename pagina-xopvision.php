<?php
/**
 * Template Name: Página Xopvision
 * Description: Página personalizada para a página Xopvision da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/consultadoria-section-hero', null, array(
  'title' => 'Xopvision – Digital Signage: Comunicação visual dinâmica que cativa e converte',
  'subtitle' => 'Transforme monitores e videowalls em ferramentas de comunicação impactantes. Com a Dualinfor, crie experiências visuais personalizadas que captam a atenção e reforçam a sua marca.',
  'image' => get_template_directory_uri() . '/assets/img/img-xopvision/heroxopvision.png',
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
  'title' => 'Digital Signage: A solução inovadora para modernizar a comunicação do seu negócio',
  'paragraph' => 'O Xopvision – Digital Signage é uma plataforma intuitiva para criar e gerir conteúdos digitais, ideal para destacar marcas, informar em tempo real e melhorar a experiência do cliente.',
  'image' => get_template_directory_uri() . '/assets/img/img-xopvision/herosecondary.png',
  'image_right' => false
));
?>

<?php get_footer(); ?>
