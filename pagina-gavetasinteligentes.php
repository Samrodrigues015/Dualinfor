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

<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê escolher as gavetas inteligentes Dualinfor?',
  'subtitle' => 'Com as Gavetas Inteligentes de Dinheiro, simplifique processos operacionais, minimize erros e garanta total segurança no manuseamento de numerário.',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/icone1.svg',
      'title' => 'Aumento da Segurança',
      'items' => array(
        'Reduza o risco de furtos internos e externos com sistemas de controlo avançados.',
        'Funcionalidades de monitorização e autenticação de utilizadores.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/icone2.svg',
      'title' => 'Eficiência no Fecho de Caixa',
      'items' => array(
        'Automatize o processo de reconciliação de caixa, reduzindo o tempo e os erros associados.',
        'Relatórios automáticos detalhados que facilitam a gestão financeira.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/icone3.svg',
      'title' => 'Eliminação de Erros Humanos',
      'items' => array(
        'Contagem precisa do numerário em tempo real.',
        'Diminuição de discrepâncias e tempo gasto em correções.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/icone4.svg',
      'title' => 'Monitorização em Tempo Real',
      'items' => array(
        'Integração com sistemas de gestão para acesso remoto a dados de transações e relatórios.',
        'Alarmes automáticos em caso de irregularidades.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/icone5.svg',
      'title' => 'Facilidade de Integração',
      'items' => array(
        'Compatível com sistemas de ponto de venda (POS) já existentes.',
        'Adaptação às necessidades de diferentes setores, como retalho, restauração e supermercados.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/icone6.svg',
      'title' => 'Durabilidade e Design Compacto',
      'items' => array(
        'Construção robusta que assegura durabilidade em ambientes de alto movimento.',
        'Design ergonómico que ocupa pouco espaço.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/icone7.svg',
      'title' => 'Conformidade Legal',
      'items' => 'Totalmente compatível com a legislação fiscal portuguesa e normas de segurança.'
    )
  ),
  'cta' => array(
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => '<svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z" transform="rotate(-90 12 12)"/></svg>'
  )
));
?>

<?php get_footer(); ?>
