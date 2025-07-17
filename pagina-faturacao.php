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

<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê escolher o software de faturação e P.O.S da Dualinfor?',
  'subtitle' => 'Criámos soluções que se adaptam a diferentes setores e tamanhos de negócios, oferecendo funcionalidades avançadas que otimizam as operações e melhoram a experiência do cliente.',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/icone1.svg',
      'title' => 'Faturação Simples e Rápida',
      'items' => array(
        'Processamento de transações em segundos.',
        'Funcionalidades intuitivas para reduzir erros no ponto de venda.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/icone2.svg',
      'title' => 'Gestão de Inventário em Tempo Real',
      'items' => array(
        'Controle o stock do seu negócio e receba alertas para reposições.',
        'Relatórios detalhados que facilitam a tomada de decisões.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/icone3.svg',
      'title' => 'Personalização de Funcionalidades',
      'items' => array(
        'Configure o software de acordo com as necessidades específicas do seu setor.',
        'Adicione módulos como gestão de mesas, entrega ao domicílio ou cartões de fidelização.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/icone4.svg',
      'title' => 'Relatórios Financeiros Detalhados',
      'items' => array(
        'Geração automática de relatórios de vendas, margens de lucro e desempenho da equipa.',
        'Exportação direta para ferramentas de contabilidade.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/icone5.svg',
      'title' => 'Conformidade Legal',
      'items' => 'Totalmente certificado para garantir conformidade com as normas fiscais e legislação portuguesa.'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/icone6.svg',
      'title' => 'Facilidade de Integração',
      'items' => 'Integra-se com sistemas de pagamento, plataformas de e-commerce e aplicações de gestão empresarial.'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/icone7.svg',
      'title' => 'Suporte Técnico Dedicado',
      'items' => 'Assistência personalizada durante a implementação e suporte contínuo para assegurar o máximo desempenho.'
    )
  ),
  'cta' => array(
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => '<svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z" transform="rotate(-90 12 12)"/></svg>'
  )
));
?>

<?php
get_template_part('template-parts/produtos-features-section', null, array(
  'title' => 'Funcionalidades que simplificam a gestão e aumentam a eficiência',
  'description' => 'O Software de Faturação e P.O.S da Dualinfor inclui as mais recentes inovações tecnológicas, garantindo que a sua empresa opera com a máxima eficiência.',
  'col1_title' => 'Funcionalidade',
  'col2_title' => 'Descrição',
  'col1_items' => [
    'Gestão de Vendas',
    'Gestão de Inventário',
    'Relatórios Personalizáveis',
    'Conectividade Cloud',
    'Integração Multicanal',
    'Gestão de Clientes'
  ],
  'col2_items' => [
    'Processamento rápido de transações com múltiplos métodos de pagamento.',
    'Monitorização automática de stocks com alertas em tempo real.',
    'Relatórios automáticos com métricas como vendas diárias e margens de lucro.',
    'Aceda aos dados do seu negócio em qualquer lugar, em tempo real.',
    'Compatível com lojas físicas, e-commerce e aplicações móveis.',
    'Ferramentas para fidelização e análise de comportamento do consumidor.'
  ]
));
?>

<?php get_footer(); ?>
