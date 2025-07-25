<?php

/**
 * Template Name: Página Videovigilancia
 *  Description: Página personalizada para a página Videovigilancia da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/consultadoria-section-hero', null, array(
  'title' => 'Videovigilância Dualinfor: Segurança avançada para empresas de qualquer dimensão',
  'subtitle' => 'Proteja o seu espaço, ativos e equipa com soluções de videovigilância de alta tecnologia, personalizadas para responder às necessidades do seu negócio.',
  'image' => get_template_directory_uri() . '/assets/img/img-videovigilancia/herovideovigilancia.png',
  'btn_primary_text' => 'Solicite uma Reunião Personalizada',
  'btn_primary_link' => '#formulario',
  'btn_secondary_text' => 'Fale com um Especialista Agora',
  'btn_secondary_link' => '#contacto',
  'align_left' => true
));
?>

<?php
get_template_part('template-parts/hero-section-secondary', null, array(
  'title' => 'Soluções de videovigilância que garantem Tranquilidade e eficiência operacional',
  'paragraph' => 'Na Dualinfor, compreendemos que a segurança é uma prioridade. Por isso, oferecemos sistemas de videovigilância de última geração, que vão além da monitorização, ajudando a prevenir incidentes, proteger ativos e assegurar o cumprimento de normas legais.',
  'image' => get_template_directory_uri() . '/assets/img/img-videovigilancia/herosecondary.png',
  'image_right' => true
));
?>

<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê escolher as soluções de Videovigilância da Dualinfor?',
  'subtitle' => 'Com tecnologia de ponta e uma abordagem personalizada, as nossas soluções garantem que cada área do seu negócio está protegida, permitindo-lhe focar-se no crescimento da sua empresa.',

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
      'icon' => get_template_directory_uri() . '/assets/img/img-videovigilancia/icone1.svg',
      'title' => 'Monitorização em Tempo Real',
      'items' => array(
        'Visualize e controle câmaras remotamente através de dispositivos móveis ou computadores.',
        'Permite decisões rápidas em caso de incidentes.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-videovigilancia/icone2.svg',
      'title' => 'Gravação de Alta Definição',
      'items' => array(
        'Imagens nítidas em 4K, mesmo com pouca luz.',
        'Recurso ideal para identificar pessoas, veículos e objetos em movimento.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-videovigilancia/icone3.svg',
      'title' => 'Sistemas de Alarme Integrados',
      'items' => array(
        'Notificações automáticas para atividades suspeitas ou acessos não autorizados.',
        'Reduza o tempo de resposta em situações críticas.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-videovigilancia/icone4.svg',
      'title' => 'Conformidade Legal e Privacidade',
      'items' => array(
        'Soluções configuradas para cumprir com o Regulamento Geral de Proteção de Dados (RGPD).',
        'Garantia de privacidade para colaboradores e clientes.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-videovigilancia/icone5.svg',
      'title' => 'Soluções Escaláveis e Personalizadas',
      'items' => array(
        'Desde pequenas lojas até grandes instalações industriais, ajustamos o sistema ao tamanho e necessidades do seu negócio.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-videovigilancia/icone6.svg',
      'title' => 'Suporte Técnico Especializado',
      'items' => array(
        'Consultoria, instalação e manutenção contínua realizadas por uma equipa experiente.',
        'Monitorização 24/7 para garantir que tudo funciona sem falhas.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-videovigilancia/icone7.svg',
      'title' => 'Eficiência Operacional',
      'items' => array(
        'Reduza custos relacionados com perdas, roubos e interrupções operacionais.',
        'Melhore a gestão de acessos e fluxos de pessoas.'
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