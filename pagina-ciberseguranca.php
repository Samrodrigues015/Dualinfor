<?php

/**
 * Template Name: Página Cibersegurança
 * Description: Página personalizada para a página Cibersegurança da Dualinfor.
 */
get_header();
?>


<?php
get_template_part('template-parts/consultadoria-section-hero', null, array(
  'title' => 'Cibersegurança Dualinfor: Proteja os dados e operações da sua empresa contra ameaças digitais',
  'subtitle' => 'Identifique, previna e resolva ataques cibernéticos com soluções avançadas de segurança digital. Mantenha os seus sistemas, informações e operações protegidos com a Dualinfor.',
  'image' => get_template_directory_uri() . '/assets/img/img-ciberseguranca/herociberseguranca.png',
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
  'title' => 'Soluções de cibersegurança que garantem tranquilidade e confiança',
  'paragraph' => 'Diante dos crescentes riscos cibernéticos, a Dualinfor oferece soluções personalizadas de cibersegurança para proteger dados, mitigar ameaças e garantir a continuidade do seu negócio.',
  'image' => get_template_directory_uri() . '/assets/img/img-ciberseguranca/herosecondary.png',
  'image_right' => false
));
?>

<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê escolher a Dualinfor para proteger a sua empresa?',
  'subtitle' => 'Com tecnologia de ponta e uma equipa experiente, as nossas soluções de cibersegurança oferecem proteção total contra ameaças digitais, ajudando a sua empresa a operar com confiança.',

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
      'icon' => get_template_directory_uri() . '/assets/img/img-ciberseguranca/icone1.svg',
      'title' => 'Proteção Avançada Contra Ameaças',
      'items' => array(
        'Identifique e bloqueie ataques cibernéticos em tempo real.',
        'Defenda a sua empresa contra ransomware, phishing, malware e outros tipos de ameaças.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-ciberseguranca/icone2.svg',
      'title' => 'Segurança de Dados',
      'items' => array(
        'Proteja informações sensíveis com encriptação de dados e backups automáticos.',
        'Garanta a conformidade com o Regulamento Geral de Proteção de Dados (RGPD).'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-ciberseguranca/icone3.svg',
      'title' => 'Monitorização 24/7',
      'items' => array(
        'Monitorização constante dos sistemas para detetar e responder rapidamente a qualquer incidente.',
        'Minimização de impactos operacionais em caso de ataques.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-ciberseguranca/icone4.svg',
      'title' => 'Prevenção de Acessos Não Autorizados',
      'items' => array(
        'Implementação de firewalls, autenticação de dois fatores (2FA) e gestão de privilégios de acesso.',
        'Controlo rigoroso sobre quem acede aos dados e sistemas da empresa.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-ciberseguranca/icone5.svg',
      'title' => 'Relatórios Detalhados e Auditorias',
      'items' => array(
        'Obtenha relatórios regulares sobre o estado de segurança da sua infraestrutura.',
        'Identifique vulnerabilidades e implemente melhorias continuamente.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-ciberseguranca/icone6.svg',
      'title' => 'Soluções Escaláveis e Personalizadas',
      'items' => array(
        'Sistemas adaptados às necessidades específicas da sua empresa, seja uma PME ou uma grande corporação.',
        'Escalabilidade para acompanhar o crescimento do seu negócio.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-ciberseguranca/icone7.svg',
      'title' => 'Formação em Segurança Cibernética',
      'items' => array(
        'Treine a sua equipa para identificar e prevenir riscos cibernéticos.',
        'Reduza erros humanos, uma das principais causas de falhas de segurança.'
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