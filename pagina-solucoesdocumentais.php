<?php

/**
 * Template Name: Página Soluções Documentais
 * Description: Página personalizada para a página Soluções Documentais da Dualinfor.
 */
 get_header();

 ?>

<?php
get_template_part('template-parts/consultadoria-section-hero', null, array(
  'title' => 'Soluções Documentais MPS: Gestão inteligente de impressão e documentos para empresas modernas',
  'subtitle' => 'Reduza custos, aumente a eficiência e simplifique a gestão documental com as nossas soluções personalizadas de Managed Print Services.',
  'image' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/herosolucoes.png',
  'btn_primary_text' => 'Solicite uma Reunião Personalizada',
  'btn_primary_link' => '#formulario',
  'btn_secondary_text' => 'Fale com um Especialista Agora',
  'btn_secondary_link' => '#contacto',
  'align_left' => true
));
?>

<?php
get_template_part('template-parts/hero-section-secondary', null, array(
  'title' => 'Simplifique e optimize a gestão de documentos e impressões',
  'paragraph' => 'As Soluções Documentais MPS da Dualinfor foram desenvolvidas para ajudar as empresas a gerir e otimizar o seu parque de impressão e documentos. Reduza custos, elimine desperdícios e garanta a segurança e a eficiência na gestão documental.',
  'image' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/herosecondary.png',
  'image_right' => true
));
?>

<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê escolher as Soluções Documentais MPS da Dualinfor?',
  'subtitle' => 'Com uma abordagem personalizada e tecnologia de ponta, as nossas soluções MPS permitem transformar a forma como a sua empresa gere documentos e impressões.',

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
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/icone1.svg',
      'title' => 'Redução de Custos Operacionais',
      'items' => array(
        'Identifique e elimine desperdícios com relatórios detalhados sobre o uso de impressoras e consumíveis.',
        'Pague apenas pelo que realmente utiliza, reduzindo custos desnecessários.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/icone2.svg',
      'title' => 'Monitorização em Tempo Real',
      'items' => array(
        'Acompanhe a utilização do parque de impressão em tempo real.',
        'Receba notificações automáticas para reposição de consumíveis ou manutenção.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/icone3.svg',
      'title' => 'Eficiência Operacional',
      'items' => array(
        'Otimize fluxos de trabalho com soluções que integram digitalização, impressão e gestão de documentos num único sistema.',
        'Automatize tarefas repetitivas para poupar tempo e esforço.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/icone4.svg',
      'title' => 'Sustentabilidade',
      'items' => array(
        'Reduza o consumo de papel e energia, contribuindo para as metas de sustentabilidade da sua empresa.',
        'Utilize consumíveis e equipamentos de impressão certificados com impacto ambiental reduzido.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/icone5.svg',
      'title' => 'Segurança Documental',
      'items' => array(
        'Proteja dados sensíveis com sistemas de autenticação e encriptação.',
        'Garantia de conformidade com o RGPD e outras regulamentações de proteção de dados.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/icone6.svg',
      'title' => 'Soluções Escaláveis e Personalizadas',
      'items' => array(
        'Configure as soluções de acordo com as necessidades específicas da sua empresa, seja uma PME ou uma grande corporação.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/icone7.svg',
      'title' => 'Suporte Técnico Especializado Dualinfor',
      'items' => array(
        'Consultoria, implementação e manutenção realizadas por uma equipa experiente.',
        'Apoio contínuo para garantir o desempenho ideal do sistema.'
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
  'title' => "Como as soluções MPS Dualinfor\ntransformam empresas em diferentes setores",
  'paragraph' => 'Desde pequenas empresas a grandes corporações, as nossas soluções adaptam-se a qualquer dimensão ou necessidade, garantindo eficiência e controlo total.',
  'image' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/escritorio.png',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/icone8.svg',
      'title' => 'Escritórios Corporativos',
      'description' => '
        <ul>
          <li>Gestão centralizada de equipamentos de impressão e digitalização.</li>
          <li>Fluxos de trabalho simplificados para maior produtividade.</li>
        </ul>'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/icone9.svg',
      'title' => 'Educação',
      'description' => '
        <ul>
          <li>Impressão e digitalização de materiais pedagógicos.</li>
          <li>Redução de custos com papel e toner em escolas e universidades.</li>
        </ul>'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/icone10.svg',
      'title' => 'Saúde',
      'description' => '
        <ul>
          <li>Proteção de dados sensíveis em registos médicos com sistemas de autenticação.</li>
          <li>Digitalização de documentos para facilitar o acesso e partilha entre departamentos.</li>
        </ul>'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/icone11.svg',
      'title' => 'Logística e Indústria',
      'description' => '
        <ul>
          <li>Impressão eficiente de etiquetas, faturas e documentos operacionais.</li>
          <li>Monitorização em tempo real para evitar paragens.</li>
        </ul>'
    )
  )
));
?>



<?php
get_template_part('template-parts/produtos-features-section', null, array(
  'title' => 'Funcionalidades que garantem eficiência e controlo total',
  'description' => 'As Soluções Documentais MPS da Dualinfor integram tecnologia avançada para garantir uma gestão inteligente e eficiente de documentos e impressões.',
  'col1_title' => 'Funcionalidade',
  'col2_title' => 'Descrição',
  'col1_items' => [
    'Monitorização Remota',
    'Digitalização Inteligente',
    'Gestão de Consumos',
    'Segurança Avançada',
    'Integração Cloud',
    'Alertas Proativos'
  ],
  'col2_items' => [
    'Controle em tempo real o desempenho e a utilização dos equipamentos de impressão.',
    'Converta documentos físicos em arquivos digitais organizados e pesquisáveis.',
    'Relatórios detalhados sobre o consumo de toner, papel e energia.',
    'Autenticação de utilizadores e encriptação de documentos confidenciais.',
    'Aceda e partilhe documentos digitalizados em plataformas como Google Drive ou OneDrive.',
    'Notificações automáticas para manutenção ou reposição de consumíveis.'
  ]
));
?>

<?php
get_template_part('template-parts/carousel-empresas', null, array(
  'title' => 'Explore nossas soluções',
  'cards' => array(
    array(
      'logo' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/PaperCut-Logotype.png',
      'alt'  => 'PaperCut',
      'link' => '#'
    ),
    array(
      'logo' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/cctec_logotype.png',
      'alt'  => 'CCTEC',
      'link' => '#'
    ),
    array(
      'logo' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/sharp-logotype.png',
      'alt'  => 'SHARP',
      'link' => '#'
    ),
    array(
      'logo' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/logo-mxbox.png',
      'alt'  => 'MyBox',
      'link' => '#'
    ),
    array(
      'logo' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/Lexmark-logotype.png',
      'alt'  => 'Lexmark',
      'link' => '#'
    )
  )
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
    'title' => 'Soluções complementares que potenciam a Gestão Documental',
    'services' => [
        [
            'title' => 'Redes Estruturadas & Computing',
            'description' => 'Infraestruturas para suportar sistemas de gestão documental.'
        ],
        [
            'title' => 'Impressoras e Multifunções',
            'description' => 'Equipamentos de alta eficiência integrados às soluções MPS.'
        ],
        [
            'title' => 'Software de Faturação e POS',
            'description' => 'Integração com a gestão financeira da empresa.'
        ]
    ],
    'images' => [
        [
            'src' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/impressora.png',
            'alt' => 'Circuit board technology'
        ],
        [
            'src' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/cabos.png',
            'alt' => 'Pessoa a trabalhar com tecnologia'
        ],
        [
            'src' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/comercio.png',
            'alt' => 'Documento digital'
        ]
    ]
]);
?>

<?php
get_template_part('template-parts/produtos-doubt-section', null, array(
  'title' => 'Esclareça as suas dúvidas sobre as soluções MPS',
  'title_centered' => true,
  'image' => get_template_directory_uri() . '/assets/img/img-gestao/caneta.png',
  'faqs' => array(
    array(
      'question' => 'É possível integrar as soluções MPS com os sistemas existentes?',
      'answer' => 'Sim, as nossas soluções são compatíveis com a maioria dos sistemas de TI e plataformas cloud.',
    ),
    array(
      'question' => 'Os relatórios de utilização são automáticos?',
      'answer' => 'Sim, os relatórios são gerados automaticamente e podem ser personalizados de acordo com as suas necessidades.',
    ),
    array(
      'question' => 'Qual o suporte técnico oferecido pela Dualinfor?',
      'answer' => 'Oferecemos instalação, formação e suporte contínuo para garantir que as soluções MPS funcionem de forma eficiente.',
    ),
    array(
      'question' => 'As soluções MPS são adequadas para empresas pequenas?',
      'answer' => 'Oferecemos instalação, formação e suporte contínuo para garantir que as soluções MPS funcionem de forma eficiente.',
    ),
  )
));
?>

<?php
get_template_part('template-parts/formulario-section', null, array(
  'title' => 'Peça já o seu orçamento personalizado',
  'paragraphs' => array(
    'Quer saber como as Soluções Documentais MPS da Dualinfor podem transformar a gestão de documentos e impressões na sua empresa?
Preencha o formulário abaixo e receba uma proposta ajustada às suas necessidades.',
    '<em>Garantimos total privacidade e uma resposta no prazo máximo de 24 horas úteis.</em>'
  ),
  'fields_overrides' => array(
    'area' => array(
      'label' => 'Número de Equipamentos de Impressão',
      'placeholder' => 'Ex: 15',
      'type' => 'number'
    )
  )
));
?>

<?php get_footer(); ?>