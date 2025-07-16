<?php
/**
 * Template Name: Página Impressoras Multifuncionais
 * Description: Página personalizada para a página Impressoras Multifuncionais da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/produtos-hero-section', null, array(
  'title' => 'Impressoras e Multifunções Epson: Produtividade, sustentabilidade e eficiência em cada impressão',
  'description' => 'Combinamos a tecnologia de impressão de última geração da Epson com o suporte técnico especializado da Dualinfor para oferecer soluções personalizadas que otimizam as operações da sua empresa.',
  'image_main' => get_template_directory_uri() . '/assets/img/img-impressoras/impressorasimage1.png',
  'image_secondary' => get_template_directory_uri() . '/assets/img/img-impressoras/impressorasimage2.png',
  'cta_primary' => [
    'url' => '#',
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconesetabranca.svg',
  ],
  'cta_secondary' => [
    'url' => '#',
    'label' => 'Fale com um Especialista Agora',
  ],
  'reverse' => false,
  'content_heading' => 'Transforme a Gestão Documental da sua empresa com a Dualinfor e a tecnologia Epson',
  'content_text' => 'As impressoras e multifunções Epson são soluções inteligentes que ajudam empresas de todos os tamanhos a reduzir custos, aumentar a eficiência e alcançar metas de sustentabilidade, adaptando-se às necessidades específicas de cada cliente.',
  'content_image' => get_template_directory_uri() . '/assets/img/img-impressoras/impressorasimage3.png',
));

?>

<?php get_footer(); ?>
