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

<?php
get_template_part('template-parts/consultadoria-solutions-section', null, array(
  'title' => 'Consultoria que resolve os desafios dos negócios em diferentes setores',
  'paragraph' => 'Desde pequenas empresas a grandes corporações, as nossas soluções de consultadoria são adaptáveis a qualquer setor ou desafio.',
  'image' => get_template_directory_uri() . '/assets/img/img-consultadoria/grupo.png',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-consultadoria/icone9.svg',
      'title' => 'PMEs em Crescimento',
      'description' => 'Diagnóstico de operações para identificar oportunidades de expansão e implementação de tecnologias que promovem o crescimento sustentável.'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-consultadoria/icone10.svg',
      'title' => 'Indústria e Logística',
      'description' => 'Automação de processos para reduzir custos operacionais e soluções de monitorização em tempo real para otimizar a gestão de stocks e logística.'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-consultadoria/icone11.svg',
      'title' => 'Saúde e Instituições Públicas',
      'description' => 'Apoio na digitalização de processos administrativos, gestão de dados sensíveis e implementação de soluções em conformidade com o RGPD.'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-consultadoria/icone12.svg',
      'title' => 'Setor Financeiro',
      'description' => 'Consultoria em cibersegurança para proteger transações e dados dos clientes, com análise de processos para aumentar a eficiência nos fluxos financeiros.'
    )
  )
));
?>


<?php
get_template_part('template-parts/produtos-features-section', null, array(
  'title' => 'Consultadoria personalizada e baseada em resultados',
  'description' => 'As nossas soluções de consultadoria foram desenhadas para responder às necessidades específicas do mercado empresarial português, garantindo resultados tangíveis.',
  'col1_title' => 'Funcionalidade',
  'col2_title' => 'Descrição',
  'col1_items' => [
    'Análise de Processos',
    'Planeamento Estratégico',
    'Transformação Digital',
    'Segurança e Conformidade',
    'Otimização de Recursos',
    'Relatórios Detalhados'
  ],
  'col2_items' => [
    'Avaliação detalhada das operações empresariais para identificar ineficiências.',
    'Criação de planos personalizados para otimizar a gestão e os recursos.',
    'Consultoria em modernização de sistemas, incluindo cloud e automação de tarefas.',
    'Recomendações para melhorar a proteção de dados e cumprir regulamentos legais.',
    'Estratégias para reduzir custos e melhorar o desempenho da equipa e sistemas.',
    'Acompanhamento contínuo com métricas e relatórios para medir resultados.'
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
<?php get_footer(); ?>