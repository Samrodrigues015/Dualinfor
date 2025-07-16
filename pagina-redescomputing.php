<?php
/**
 * Template Name: Página Redes e Computing
 * Description: Página personalizada para página Redes e Computing da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/produtos-hero-section', null, array(
  'title' => 'Redes estruturadas e soluções de computing: A conectividade e eficiência que a sua empresa precisa',
  'description' => 'Desde a conceção até à implementação, oferecemos soluções robustas e escaláveis que garantem a continuidade operacional e a segurança das infraestruturas de TI.',
  'image_main' => get_template_directory_uri() . '/assets/img/img-redes/redesimage1.png',
  'image_secondary' => get_template_directory_uri() . '/assets/img/img-redes/redesimage2.png',
  'cta_primary' => [
    'url' => '#',
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconesetabranca.svg',
  ],
  'cta_secondary' => [
    'url' => '#',
    'label' => 'Fale com um Especialista',
  ],
  'reverse' => false,
  'content_heading' => 'Conectividade e segurança para empresas modernas',
  'content_text' => 'Na Dualinfor, compreendemos que uma infraestrutura de TI sólida é a base de qualquer negócio. As nossas soluções de Redes Estruturadas & Computing foram desenhadas para oferecer alta performance, escalabilidade e segurança, garantindo que a sua empresa esteja sempre preparada para crescer.',
  'content_image' => get_template_directory_uri() . '/assets/img/img-redes/redesimage3.png',
));

?>

<?php get_footer(); ?>
