<?php
/**
 * Template Name: Página Soluções Visuais
 * Description: Página personalizada para Página soluções visuais da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/produtos-hero-section', null, array(
  'title' => 'Soluções visuais da Dualinfor: comunicação dinâmica que capta a atenção',
  'description' => 'Transforme a forma como comunica com os seus clientes. Descubra como os nossos monitores profissionais, videowalls e sistemas de digital signage tornam a comunicação mais envolvente e eficaz.',
  'image_main' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/solucoesvisuais1.png',
  'image_secondary' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/solucoesvisuais2.png',
  'cta_primary' => [
    'url' => '#',
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconesetabranca.svg',
  ],
  'cta_secondary' => [
    'url' => '#',
    'label' => 'Fale com um Especialista',
  ],
  'reverse' => true,
  'content_heading' => 'Comunicação visual inovadora para negócios modernos',
  'content_text' => 'Na era da informação, captar a atenção do cliente é essencial. As Soluções Visuais da Dualinfor permitem transformar a comunicação do seu negócio com tecnologia avançada, garantindo impacto visual, eficiência e resultados tangíveis.',
  'content_image' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/solucoesvisuais3.png',
));

?>

<?php get_footer(); ?>
