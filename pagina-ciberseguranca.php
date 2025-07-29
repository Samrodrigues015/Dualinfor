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

<?php
get_template_part('template-parts/consultadoria-solutions-section', null, array(
  'title' => "Como a Dualinfor assegura proteção e segurança em diferentes setores de negócios",
  'paragraph' => 'As nossas soluções de cibersegurança adaptam-se a qualquer setor, protegendo dados sensíveis e garantindo operações contínuas.',
  'image' => get_template_directory_uri() . '/assets/img/img-ciberseguranca/seguranca-tecnologia.png',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-ciberseguranca/icone8.svg',
      'title' => 'Empresas de Tecnologia',
      'description' => '• Proteção de dados confidenciais e sistemas críticos contra ciberataques.' . "\n" . '• Monitorização contínua para garantir conformidade com regulamentações de segurança.'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-ciberseguranca/icone9.svg',
      'title' => 'Saúde e Instituições Públicas',
      'description' => '• Segurança de registos médicos e dados de pacientes.' . "\n" . '• Soluções de backup para garantir acesso ininterrupto a informações críticas.'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-ciberseguranca/icone10.svg',
      'title' => 'Indústria e Logística',
      'description' => '• Proteção de redes e sistemas operacionais contra ataques que possam causar paralisações.' . "\n" . '• Garantia de segurança em dispositivos IoT (Internet das Coisas).'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-ciberseguranca/icone11.svg',
      'title' => 'Setor Financeiro',
      'description' => '• Prevenção de fraudes e proteção de transações financeiras.' . "\n" . '• Auditorias regulares para garantir conformidade com normas regulatórias.'
    )
  )
));
?>


<?php
get_template_part('template-parts/produtos-features-section', null, array(
  'title' => 'Funcionalidades de segurança que protegem cada aspeto do seu negócio',
  'description' => 'As nossas soluções de cibersegurança combinam inovação tecnológica e uma abordagem prática para proteger dados e sistemas críticos.',
  'col1_title' => 'Funcionalidade',
  'col2_title' => 'Descrição',
  'col1_items' => [
    'Firewalls de Próxima Geração',
    'Antivírus Empresarial',
    'Soluções de Backup e Recuperação',
    'Gestão de Acessos',
    'Monitorização Contínua',
    'Auditorias de Segurança'
  ],
  'col2_items' => [
    'Bloqueio avançado de ataques e filtragem de tráfego suspeito em tempo real.',
    'Proteção contra malware, ransomware e ameaças zero-day.',
    'Backups automáticos com opções de recuperação rápida em caso de incidentes.',
    'Autenticação multifator (2FA) e controlo detalhado de privilégios de utilizadores.',
    'Sistemas de deteção e resposta a ameaças com alertas automáticos.',
    'Análise regular da infraestrutura para identificar vulnerabilidades.'
  ]
));
?>

<?php
get_template_part('template-parts/testemunhos-section', null, array(
  'title' => 'O que dizem os nossos clientes?',
  'testemunhos' => array(
    array(
      'nome' => 'Ana Rodrigues',
      'cargo' => 'Diretora de Operações, Thyssenkrupp',
      'mensagem' => 'Graças à Dualinfor, reduzimos os custos operacionais em 30% com soluções de impressão personalizadas.'
    ),
    array(
      'nome' => 'Inês Costa',
      'cargo' => 'Diretora de Marketing, Empresa XYZ',
      'mensagem' => 'Com as soluções Unibind Peleman da Dualinfor, melhorámos a apresentação das nossas propostas comerciais. O impacto visual fez toda a diferença para os nossos clientes.'
    ),
    array(
      'nome' => 'Carlos Ferreira',
      'cargo' => 'Diretor Técnico, Indústria Y',
      'mensagem' => 'Investimento que valeu a pena! A poupança energética é notável e o acompanhamento pós-instalação é exemplar.'
    ),
    array(
      'nome' => 'Joana Mendes',
      'cargo' => 'Diretora de TI, Empresa XYZ',
      'mensagem' => 'A Dualinfor ajudou-nos a implementar um sistema robusto de cibersegurança. Desde então, evitámos vários incidentes e operamos com total confiança.'
    ),
    array(
      'nome' => 'Nome do Cliente',
      'cargo' => 'Cargo da empresa',
      'mensagem' => 'Com as soluções Lexmark da Dualinfor, conseguimos reduzir os custos de impressão em 30% e aumentar a segurança dos nossos documentos.'
    ),
    array(
      'nome' => 'José Silva',
      'cargo' => 'Diretor de Operações, Indústria X',
      'mensagem' => 'Com a instalação de painéis solares pela Dualinfor, reduzimos a nossa fatura energética em 40%. A equipa foi excelente na implementação e acompanhamento do projeto.'
    ),
    array(
      'nome' => 'Paulo Oliveira',
      'cargo' => 'Gerente de Supermercado Fresco & Bom',
      'mensagem' => 'Com as Gavetas Inteligentes de Dinheiro da Dualinfor, conseguimos reduzir os erros no fecho de caixa em 80%.'
    ),
    array(
      'nome' => 'João Moreira',
      'cargo' => 'Proprietário de Restaurante XYZ',
      'mensagem' => 'Desde que implementámos o Software P.O.S da Dualinfor, a gestão do nosso restaurante tornou-se mais eficiente.'
    ),
    array(
      'nome' => 'Maria Santos',
      'cargo' => 'Gerente de Loja, XYZ Lda',
      'mensagem' => 'Desde que implementámos o Software P.O.S da Dualinfor, a gestão do nosso restaurante tornou-se mais eficiente.'
    ),
    array(
      'nome' => 'Rui Martins',
      'cargo' => 'Diretor de TI, Empresa XYZ',
      'mensagem' => 'Com as soluções de Redes Estruturadas da Dualinfor, conseguimos melhorar significativamente a conectividade entre os nossos escritórios.'
    ),
    array(
      'nome' => 'Pedro Oliveira',
      'cargo' => 'Gestor de Operações, Empresa XYZ',
      'mensagem' => 'Desde que adquirimos os digitalizadores da Dualinfor, reduzimos o tempo de processamento de documentos em 50%.'
    ),
    array(
      'nome' => 'Ana Costa',
      'cargo' => 'Gerente de Escritório, XYZ Lda',
      'mensagem' => 'Com as impressoras Epson da Dualinfor, reduzimos os custos em 30% e aumentámos a produtividade da nossa equipa.'
    ),
  ),
));
?>

<?php
get_template_part('template-parts/consultadoria-complementary-section', null, [
    'title' => 'Soluções Complementares para Maximizar a Segurança',
    'services' => [
        [
            'title' => 'Redes Estruturadas & Computing',
            'description' => 'Infraestruturas seguras para suportar soluções de cibersegurança.'
        ],
        [
            'title' => 'Software de Backup e Recuperação',
            'description' => 'Garantia de continuidade operacional em caso de incidentes.'
        ],
        [
            'title' => 'Gestão de Filas de Espera',
            'description' => 'Integração de segurança em sistemas de atendimento presencial.'
        ]
    ],
    'images' => [
        [
            'src' => get_template_directory_uri() . '/assets/img/img-ciberseguranca/fila.png',
            'alt' => 'Circuit board technology'
        ],
        [
            'src' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/cabos.png',
            'alt' => 'Pessoa a trabalhar com tecnologia'
        ],
        [
            'src' => get_template_directory_uri() . '/assets/img/img-xopvision/mesa.png',
            'alt' => 'Documento digital'
        ]
    ]
]);
?>

<?php
get_template_part('template-parts/produtos-doubt-section', null, array(
  'title' => 'Esclareça as suas dúvidas sobre as soluções de Cibersegurança',
  'title_centered' => true,
  'image' => get_template_directory_uri() . '/assets/img/img-ciberseguranca/notebook.png',
  'faqs' => array(
    array(
      'question' => 'As soluções são adequadas para pequenas empresas?',
      'answer' => 'Sim, as nossas soluções são personalizáveis para empresas de qualquer dimensão.',
    ),
    array(
      'question' => 'É possível garantir a conformidade com o RGPD?',
      'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ),
    array(
      'question' => 'A Dualinfor oferece suporte contínuo?',
      'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ),
    array(
      'question' => 'Qual é o tempo necessário para implementar as soluções?',
      'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.',
    ),
  )
));
?>

<?php
get_template_part('template-parts/formulario-section', null, array(
  'title' => 'Peça já o seu orçamento personalizado',
  'paragraphs' => array(
    'Quer saber como as soluções de cibersegurança da Dualinfor podem proteger a sua empresa? Preencha o formulário abaixo e receba uma análise personalizada.',
    '<em>Garantimos total privacidade e uma resposta no prazo máximo de 24 horas úteis.</em>'
  ),
  'fields_overrides' => array(
    'area' => array(
      'label' => 'Áreas de Interesse',
      'placeholder' => 'Ex: POS, Impressão, Consultadoria, Cibersegurança',
      'type' => 'number'
    )
  )
));
?>

<?php get_footer(); ?>