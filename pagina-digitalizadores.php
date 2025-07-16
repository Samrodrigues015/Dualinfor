<?php
/**
 * Template Name: Página Digitalizadores
 * Description: Página personalizada para a página Digitalizadores da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/produtos-hero-section', null, array(
  'title' => 'Digitalizadores Dualinfor: Eficiência na estão de documentos ao alcance da sua empresa',
  'description' => 'Transforme documentos físicos em arquivos digitais organizados, seguros e fáceis de aceder. Com a Dualinfor, leve a digitalização ao próximo nível.',
  'image_main' => get_template_directory_uri() . '/assets/img/img-digitalizadores/digitalizadoresimage2.png',
  'image_secondary' => get_template_directory_uri() . '/assets/img/img-digitalizadores/digitalizadoresimage1.png',
  'cta_primary' => [
    'url' => '#',
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconesetabranca.svg',
  ],
  'cta_secondary' => [
    'url' => '#',
    'label' => 'Fale com um Especialista Agora',
  ],
  'reverse' => true,
  'content_heading' => 'Digitalize, organize e proteja documentos com tecnologia avançada',
  'content_text' => 'Os digitalizadores Dualinfor foram criados para resolver os desafios de gestão documental das empresas modernas. Seja para digitalizar contratos, registos médicos ou materiais académicos, oferecemos soluções rápidas, eficientes e adaptáveis a todas as necessidades.',
  'content_image' => get_template_directory_uri() . '/assets/img/img-digitalizadores/digitalizadoresimage3.png',
));

?>

<?php get_footer(); ?>
