<?php

/** Template Name: Página Consultoria
 * Description: Página personalizada para a página Consultoria da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/consultadoria-section-hero', null, array(
  'title' => 'Consultadoria Dualinfor: Soluções Estratégicas para Impulsionar o Sucesso do Seu Negócio',
  'subtitle' => 'Receba orientação especializada para transformar os desafios do seu negócio em oportunidades de crescimento. Juntos, encontramos a solução ideal para cada etapa da sua operação.',
  'image' => get_template_directory_uri() . '/assets/img/img-consultadoria/heroconsultadoria.png',
  'btn_primary_text' => 'Solicite uma Reunião Personalizada',
  'btn_primary_link' => '#formulario',
  'btn_secondary_text' => 'Fale com um Especialista Agora',
  'btn_secondary_link' => '#contacto',
  'align_left' => true
));
?>

<?php
get_template_part('template-parts/hero-section-secondary', null, array(
  'title' => 'Consultoria que resolve problemas e cria oportunidades',
  'paragraph' => 'Com mais de 25 anos de experiência no mercado, a Dualinfor oferece serviços de consultadoria que ajudam empresas de qualquer dimensão a alcançar maior eficiência, segurança e crescimento sustentável. Da análise à implementação, estamos ao seu lado em cada passo.',
  'image' => get_template_directory_uri() . '/assets/img/img-consultadoria/reuniao.png',
  'image_right' => true
));
?>

<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê escolher os serviços de Consultadoria da Dualinfor?',
  'subtitle' => 'Combinamos conhecimento técnico, experiência no mercado e uma abordagem personalizada para entregar soluções práticas e mensuráveis para o seu negócio.',

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
      'icon' => get_template_directory_uri() . '/assets/img/img-consultadoria/icone1.svg',
      'title' => 'Diagnóstico Personalizado',
      'items' => array(
        'Análise detalhada das operações da sua empresa para identificar áreas de melhoria.',
        'Recomendações práticas baseadas nas necessidades específicas do seu negócio.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-consultadoria/icone2.svg',
      'title' => 'Soluções Inovadoras e Escaláveis',
      'items' => array(
        'Planos adaptados ao crescimento da sua empresa, integrando as melhores tecnologias do mercado.',
        'Foco na implementação de estratégias de eficiência e redução de custos.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-consultadoria/icone3.svg',
      'title' => 'Orientação Especializada',
      'items' => array(
        'Consultores experientes que trabalham consigo para encontrar a solução ideal.',
        'Apoio desde a fase de planeamento até à implementação das estratégias propostas.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-consultadoria/icone4.svg',
      'title' => 'Melhoria da Eficiência Operacional',
      'items' => array(
        'Identificação de ineficiências nos processos e recomendação de soluções automatizadas.',
        'Otimização de recursos humanos e tecnológicos.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-consultadoria/icone5.svg',
      'title' => 'Apoio na Transformação Digital',
      'items' => array(
        'Implementação de sistemas que modernizam a gestão empresarial.',
        'Soluções em cloud, cibersegurança e infraestruturas de TI robustas.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-consultadoria/icone6.svg',
      'title' => 'Conformidade e Segurança',
      'items' => array(
        'Garantia de que os processos e sistemas da sua empresa estão em conformidade com regulamentos legais, como o RGPD.',
        'Soluções seguras para proteger os dados da sua organização.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-consultadoria/icone7.svg',
      'title' => 'Acompanhamento Contínuo',
      'items' => array(
        'Relatórios regulares e acompanhamento proativo para garantir que os objetivos são atingidos.',
        'Ajustes estratégicos conforme necessário, para responder às mudanças do mercado.'
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