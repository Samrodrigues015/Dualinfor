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

<?php
get_template_part('template-parts/hero-section-secondary', null, array(
  'title' => 'A Solução completa para a Gestão de Bilhética',
  'paragraph' => 'O Software de Bilhética da Dualinfor foi desenvolvido para responder às necessidades específicas de empresas e instituições que procuram simplificar a gestão de bilhetes, reduzir custos e melhorar a experiência do cliente.',
  'image' => get_template_directory_uri() . '/assets/img/img-bilhetica/herosecondary.png',
  'image_right' => true
));
?>

<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê escolher o software de Bilhética da Dualinfor?',
  'subtitle' => 'Com tecnologia de ponta e uma abordagem personalizada, o nosso software de bilhética oferece eficiência, flexibilidade e controlo absoluto para diferentes setores e necessidades.',

  // Personalização visual
  'bg_color' => '#f2f2f2',
  'text_color' => '#1c1c1c',
  'card_bg_color' => '#ece5eb',
  'icon_color' => '#9a2686',
  'list_color' => '#1c1c1c',
  'list_bullet_color' => '#1c1c1c',
  'btn_mobile_bg' => '#e5d3e2',
  'btn_mobile_color' => '#1c1c1c',
  'btn_mobile_hover_bg' => '#7d1f6b',
  'btn_mobile_hover_color' => '#ffffff',

  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-bilhetica/icone1.svg',
      'title' => 'Gestão Automatizada de Bilhetes',
      'items' => array(
        'Criação e emissão de bilhetes em tempo real.',
        'Suporte para bilhetes digitais e impressos.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-bilhetica/icone2.svg',
      'title' => 'Integração Total',
      'items' => array(
        'Compatível com sistemas de pagamento, terminais POS e plataformas online.',
        'Ligação fácil a aplicações móveis para venda e validação de bilhetes.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-bilhetica/icone3.svg',
      'title' => 'Melhoria da Experiência do Cliente',
      'items' => array(
        'Reduza filas e tempos de espera com processos automatizados.',
        'Ofereça opções de compra online ou presencial com a mesma eficiência.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-bilhetica/icone4.svg',
      'title' => 'Monitorização e Relatórios em Tempo Real',
      'items' => array(
        'Acompanhe as vendas e a utilização de bilhetes de forma instantânea.',
        'Gere relatórios detalhados para análise de desempenho.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-bilhetica/icone5.svg',
      'title' => 'Flexibilidade e Personalização',
      'items' => array(
        'Adapte o sistema ao tipo de evento ou serviço: transportes, espetáculos, feiras ou serviços públicos.',
        'Opções para personalizar bilhetes com logótipos, cores e designs específicos.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-bilhetica/icone6.svg',
      'title' => 'Conformidade Legal e Segurança',
      'items' => array(
        'Cumpra as normas fiscais e de proteção de dados em vigor em Portugal.',
        'Sistema seguro para prevenir fraudes e duplicação de bilhetes.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-bilhetica/icone7.svg',
      'title' => 'Suporte Técnico Especializado',
      'items' => array(
        'Consultoria, instalação e formação para garantir que o sistema opera com eficiência máxima.',
        'Assistência contínua para atualização e resolução de problemas.'
      )
    )
  ),
  'cta' => array(
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => '<img src="' . get_template_directory_uri() . '/assets/img/img-consultadoria/icone8.svg" alt="Ícone orçamento">'
  )
));
?>


<?php get_footer(); ?>
