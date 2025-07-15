<?php
/**
 * Template Name: Página Energias Renováveis
 * Description: Página personalizada para as soluções de energias renováveis da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/produtos-hero-section', null, array(
  'title' => 'Energias renováveis Dualinfor: Sustentabilidade e eficiência ao serviço da sua empresa',
  'description' => 'Reduza custos, aumente a eficiência energética e contribua para um futuro mais sustentável. Descubra como as nossas soluções em energias renováveis podem transformar o seu negócio.',
  'image_main' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/energiarenovaveis.png',
  'image_secondary' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/lampada.png',
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
  'content_heading' => 'Transforme o Consumo Energético da Sua Empresa com Soluções Sustentáveis',
  'content_text' => 'As soluções em energias renováveis da Dualinfor foram desenhadas para empresas que procuram reduzir custos operacionais e a sua pegada de carbono. Com tecnologia avançada e consultoria especializada, ajudamos o seu negócio a ser mais eficiente e sustentável.',
  'content_image' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/energiasolar.png',
));

?>

<?php get_footer(); ?>
