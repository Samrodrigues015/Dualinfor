<?php
/**
 * Template Name: Página Xopvision
 * Description: Página personalizada para a página Xopvision da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/consultadoria-section-hero', null, array(
  'title' => 'Xopvision – Digital Signage: Comunicação visual dinâmica que cativa e converte',
  'subtitle' => 'Transforme monitores e videowalls em ferramentas de comunicação impactantes. Com a Dualinfor, crie experiências visuais personalizadas que captam a atenção e reforçam a sua marca.',
  'image' => get_template_directory_uri() . '/assets/img/img-xopvision/heroxopvision.png',
  'btn_primary_text' => 'Solicite uma Reunião Personalizada',
  'btn_primary_link' => '#formulario',
  'btn_secondary_text' => 'Fale com um Especialista Agora',
  'btn_secondary_link' => '#contacto',
  'align_left' => true,
  'layout_type' => 'titulo-botoes-paragrafo'
));
?>

<?php
get_template_part('template-parts/hero-section-secondary', null, array(
  'title' => 'Digital Signage: A solução inovadora para modernizar a comunicação do seu negócio',
  'paragraph' => 'O Xopvision – Digital Signage é uma plataforma intuitiva para criar e gerir conteúdos digitais, ideal para destacar marcas, informar em tempo real e melhorar a experiência do cliente.',
  'image' => get_template_directory_uri() . '/assets/img/img-xopvision/herosecondary.png',
  'image_right' => false
));
?>

<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê escolher o Xopvision Digital Signage da Dualinfor?',
  'subtitle' => 'As soluções Xopvision transformam qualquer espaço num ponto de comunicação interativa, valorizando o seu negócio com Digital Signage.',

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
      'icon' => get_template_directory_uri() . '/assets/img/img-xopvision/icone1.svg',
      'title' => 'Comunicação Dinâmica e Personalizada',
      'items' => array(
        'Crie conteúdos visuais atrativos para captar a atenção do público.',
        'Adapte mensagens em tempo real, de forma simples e intuitiva.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-xopvision/icone2.svg',
      'title' => 'Melhoria da Experiência do Cliente',
      'items' => array(
        'Exiba informações úteis, como menus digitais, promoções ou horários.',
        'Torne a experiência mais envolvente e informativa.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-xopvision/icone3.svg',
      'title' => 'Gestão Centralizada de Conteúdos',
      'items' => array(
        'Controle múltiplos ecrãs a partir de uma única plataforma.',
        'Agende e personalize conteúdos para diferentes localizações.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-xopvision/icone4.svg',
      'title' => 'Aumento das Vendas',
      'items' => array(
        'Promova produtos e serviços de forma visual e estratégica.',
        'Destaque promoções e novidades no momento certo.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-xopvision/icone5.svg',
      'title' => 'Integração Total com Redes e Sistemas',
      'items' => array(
        'Compatível com redes estruturadas e sistemas de marketing digital.',
        'Gestão eficiente mesmo em múltiplas localizações.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-xopvision/icone6.svg',
      'title' => 'Flexibilidade e Escalabilidade',
      'items' => array(
        'Soluções adaptáveis para empresas de qualquer dimensão.',
        'Cresça connosco, integrando mais dispositivos e funcionalidades à medida que o seu negócio evolui.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-xopvision/icone7.svg',
      'title' => 'Sustentabilidade e Eficiência',
      'items' => array(
        'Substitua materiais impressos por comunicação digital, reduzindo o desperdício.',
        'Opções de gestão energética para minimizar o consumo.'
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
