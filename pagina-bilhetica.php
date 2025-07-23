<?php
 /** Template Name: Página Bilhetica
  * Description: Página personalizada para a página Bilhetica da Dualinfor.
  */
get_header();

?>

<?php
get_template_part('template-parts/consultadoria-section-hero', null, array(
  'title' => 'Software de Bilhética Dualinfor: Gestão eficiente para eventos e serviços',
  'subtitle' => 'Automatize a criação, gestão e controlo de bilhetes com uma solução flexível e personalizada para o seu negócio. Oferecemos a tecnologia ideal para gerir bilhetes em eventos, transportes e serviços públicos.',
  'image' => get_template_directory_uri() . '/assets/img/img-bilhetica/herobilhetica.png',
  'btn_primary_text' => 'Solicite uma Reunião Personalizada',
  'btn_primary_link' => '#formulario',
  'btn_secondary_text' => 'Fale com um Especialista Agora',
  'btn_secondary_link' => '#contacto',
  'align_left' => true
));
?>

<?php get_footer(); ?>
