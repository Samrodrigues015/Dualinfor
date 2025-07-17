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

<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê Escolher as Impressoras Epson?',
  'subtitle' => 'As nossas impressoras e multifunções Epson foram projetadas para oferecer valor real ao seu negócio. Descubra como estas soluções podem transformar a forma como trabalha com documentos.',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-impressoras/icone1.svg',
      'title' => 'Qualidade Imbatível de Impressão',
      'items' => array(
        'Resolução de até 1200 x 1200 dpi, garantindo uma qualidade de impressão nítida e profissional.',
        'Ideal para documentos corporativos, gráficos e materiais promocionais.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-impressoras/icone2.svg',
      'title' => 'Eficiência Energética',
      'items' => array(
        'Equipadas com tecnologia de jato de tinta sem calor, consomem até 85% menos energia do que impressoras laser tradicionais.',
        'Certificação Energy Star, contribuindo para uma operação mais sustentável.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-impressoras/icone3.svg',
      'title' => 'Multifunções Completas',
      'items' => array(
        'Impressão, cópia, digitalização e envio de fax integrados num único equipamento.',
        'Permite digitalizar documentos diretamente para e-mail, cloud ou servidores empresariais.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-impressoras/icone4.svg',
      'title' => 'Soluções Adaptáveis a Qualquer Negócio',
      'items' => array(
        'Compatíveis com A4 e A3, com opções para impressão monocromática ou a cores.',
        'Equipamentos modulares para atender empresas de qualquer dimensão.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-impressoras/icone5.svg',
      'title' => 'Velocidade e Produtividade',
      'items' => array(
        'Impressão até 40 páginas por minuto, ideal para ambientes com grande volume de documentos.',
        'Capacidade de papel ajustável, suportando até 500 folhas por bandeja.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-impressoras/icone6.svg',
      'title' => 'Conectividade e Mobilidade',
      'items' => array(
        'Total integração com Wi-Fi, Ethernet e USB.',
        'Impressão móvel via Google Cloud Print, Apple AirPrint e aplicações Epson Connect.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-impressoras/icone7.svg',
      'title' => 'Segurança Avançada',
      'items' => array(
        'Proteja os seus dados com opções de impressão confidencial e autenticação de utilizadores.',
        'Garantia de conformidade com normas de proteção de dados, como o RGPD.'
      )
    )
  ),
  'cta' => array(
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => '<svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z" transform="rotate(-90 12 12)"/></svg>'
  )
));
?>

<?php get_template_part('template-parts/impressora-epson-block'); ?>


<?php get_footer(); ?>
