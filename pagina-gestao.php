<?php

/** Template Name: Página Gestão
 * Description: Página personalizada para a página Gestão da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/consultadoria-section-hero', null, array(
  'title' => 'Gestão de filas Dualinfor: organização e eficiência para um atendimento de excelência',
  'subtitle' => 'Otimize o fluxo de clientes, reduza tempos de espera e melhore a experiência de atendimento. As nossas soluções adaptam-se a empresas de qualquer dimensão.',
  'image' => get_template_directory_uri() . '/assets/img/img-gestao/herogestao.png',
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
  'title' => 'Organize o atendimento e melhore a satisfação dos seus clientes',
  'paragraph' => 'A Gestão de Filas de Espera da Dualinfor oferece soluções tecnológicas para organizar e agilizar o atendimento em qualquer tipo de negócio. Com ferramentas inovadoras, garantimos maior eficiência operacional e uma experiência mais positiva para os seus clientes.',
  'image' => get_template_directory_uri() . '/assets/img/img-gestao/herosecondary.png',
  'image_right' => false
));
?>

<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê escolher a gestão de filas de espera da Dualinfor?',
  'subtitle' => 'As nossas soluções combinam tecnologia avançada com uma interface simples, garantindo que o atendimento ao cliente é organizado, eficiente e satisfatório.',

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
      'icon' => get_template_directory_uri() . '/assets/img/img-gestao/icone1.svg',
      'title' => 'Redução de Tempos de Espera',
      'items' => array(
        'Otimize os fluxos de atendimento para evitar filas longas e desorganizadas.',
        'Melhore a eficiência da equipa ao gerir prioridades de forma inteligente.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gestao/icone2.svg',
      'title' => 'Melhoria da Experiência do Cliente',
      'items' => array(
        'Ofereça um ambiente organizado e transparente com sistemas de senhas e ecrãs informativos.',
        'Notifique os clientes em tempo real sobre o seu estado na fila.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gestao/icone3.svg',
      'title' => 'Aumento da Produtividade',
      'items' => array(
        'Libere a equipa para focar em tarefas importantes enquanto o sistema gere os fluxos de clientes.',
        'Diminua a pressão sobre os colaboradores, garantindo um atendimento mais eficiente.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gestao/icone4.svg',
      'title' => 'Gestão Centralizada',
      'items' => array(
        'Controle múltiplos pontos de atendimento a partir de um único sistema.',
        'Relatórios detalhados sobre os tempos médios de espera, número de atendimentos e desempenho da equipa.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gestao/icone5.svg',
      'title' => 'Integração com Outras Soluções',
      'items' => array(
        'Total compatibilidade com soluções de POS, sistemas de gestão e plataformas de agendamento.',
        'Suporte para notificações por SMS ou e-mail.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gestao/icone6.svg',
      'title' => 'Flexibilidade e Escalabilidade',
      'items' => array(
        'Soluções adaptáveis a diferentes sectores, desde pequenos negócios até grandes instituições públicas.',
        'Personalização para necessidades específicas, como atendimento prioritário ou multilingue.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gestao/icone7.svg',
      'title' => 'Assistência Técnica Dualinfor',
      'items' => array(
        'Consultoria, instalação e suporte técnico contínuo para garantir que o sistema opera de forma eficiente.'
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