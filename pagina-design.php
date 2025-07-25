<?php

/**  Template Name: Página Design
 * Description: Página personalizada para a página Design da Dualinfor.
 */

get_header();
?>


<?php
get_template_part('template-parts/consultadoria-section-hero', null, array(
  'title' => 'Design e Imagem Corporativa: Eleve a identidade da sua empresa com a Dualinfor',
  'subtitle' => 'Crie uma imagem corporativa forte, reconhecível e alinhada aos valores da sua empresa. Desenvolvemos soluções criativas que destacam a sua marca no mercado.',
  'image' => get_template_directory_uri() . '/assets/img/img-design/designhero.png',
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
  'title' => 'Comunicação Visual que reflete a essência da sua marca',
  'paragraph' => 'Na Dualinfor, acreditamos que a imagem corporativa é muito mais do que o design de um logótipo – é a forma como a sua empresa comunica os seus valores, missão e visão. Com as nossas soluções criativas, criamos identidades visuais que captam a atenção e geram impacto.',
  'image' => get_template_directory_uri() . '/assets/img/img-design/secondaryhero.png',
  'image_right' => false
));
?>

<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê escolher o serviço de design e imagem corporativa da Dualinfor?',
  'subtitle' => 'O nosso foco é traduzir a identidade da sua marca numa comunicação visual única e memorável. Descubra como podemos ajudar a destacar o seu negócio.',

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
      'icon' => get_template_directory_uri() . '/assets/img/img-design/icone1.svg',
      'title' => 'Identidade Visual Consistente e Memorável',
      'items' => array(
        'Criação de logótipos, tipografias e paletas de cores que refletem a essência da sua marca.',
        'Desenvolvimento de uma identidade visual que seja facilmente reconhecida pelo mercado.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-design/icone2.svg',
      'title' => 'Design Personalizado para Diferentes Necessidades',
      'items' => array(
        'Soluções adaptadas para empresas de qualquer dimensão e setor.',
        'Criação de brochuras, cartões de visita, banners digitais, apresentações e muito mais.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-design/icone3.svg',
      'title' => 'Comunicação Coerente em Todos os Canais',
      'items' => array(
        'Garantimos uma comunicação consistente da sua marca, tanto em meios digitais como impressos.',
        'Integração de materiais visuais para sites, redes sociais, e-mails e materiais promocionais.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-design/icone4.svg',
      'title' => 'Reforço da Presença no Mercado',
      'items' => array(
        'Diferencie a sua empresa da concorrência com designs exclusivos e profissionais.',
        'Melhore a perceção da sua marca junto de clientes e parceiros.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-design/icone5.svg',
      'title' => 'Alinhamento Estratégico com os valores da empresa',
      'items' => array(
        'Trabalhamos consigo para garantir que a identidade visual reflete a missão, visão e valores do seu negócio.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-design/icone6.svg',
      'title' => 'Soluções Sustentáveis e Modernas',
      'items' => array(
        'Design de materiais impressos com recursos sustentáveis e digitais adaptados às tendências atuais.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-design/icone7.svg',
      'title' => 'Equipa Criativa Especializada',
      'items' => array(
        'Designers experientes que transformam ideias em materiais visuais de impacto.',
        'Colaboração próxima para garantir que o resultado final excede as expectativas.'
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