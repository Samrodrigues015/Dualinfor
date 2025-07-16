<?php
/**
 * Template Name: Página Gavetas Inteligentes
 * Description: Página personalizada para a página gavetas inteligentes da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/produtos-hero-section', null, array(
  'title' => 'Gavetas Inteligentes de dinheiro: Segurança, eficiência e controlo em cada transação
',
  'description' => 'Aumente a segurança do numerário, reduza erros e simplifique os processos no ponto de venda com as soluções inovadoras da Dualinfor.',
  'image_main' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/gavetasinteligenteshero.png',
  'image_secondary' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/gavetasinteligentes2.png',
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
  'content_heading' => 'Gestão de numerário inteligente para empresas modernas',
  'content_text' => 'As Gavetas Inteligentes de Dinheiro da Dualinfor foram desenvolvidas para eliminar os desafios de gestão de numerário. Desde a segurança no manuseamento de dinheiro até à automatização do fecho de caixa, as nossas soluções garantem eficiência e controlo absoluto em qualquer setor.',
  'content_image' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/gavetasinteligentes3.png',
));

?>

<?php get_footer(); ?>
