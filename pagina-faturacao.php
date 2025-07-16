<?php
/**
 * Template Name: Página Faturação
 * Description: Página personalizada para Página Faturação e POS da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/produtos-hero-section', null, array(
  'title' => 'Software de faturação e P.O.S Dualinfor: A solução completa para a gestão do seu negócio',
  'description' => 'Automatize e simplifique a gestão de vendas, inventário e relatórios financeiros. Com a Dualinfor, o controlo do seu negócio está sempre ao seu alcance.',
  'image_main' => get_template_directory_uri() . '/assets/img/img-faturacao/faturacaoimage1.png',
  'image_secondary' => get_template_directory_uri() . '/assets/img/img-faturacao/faturacaoimage2.png',
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
  'content_heading' => 'Simplifique a gestão e maximize os resultados com o software P.O.S Dualinfor',
  'content_text' => 'O Software de Faturação e Ponto de Venda (P.O.S) da Dualinfor foi desenvolvido para atender às necessidades específicas de negócios no setor do retalho, restauração e serviços. Combine eficiência, controlo e facilidade de uso num sistema robusto e adaptável.',
  'content_image' => get_template_directory_uri() . '/assets/img/img-faturacao/faturacaoimage3.png',
));

?>

<?php get_footer(); ?>
