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

<?php
get_template_part('template-parts/produtos-features-section', null, array(
  'title' => 'Funcionalidades que potenciam a Comunicação Visual do seu negócio',
  'description' => 'O Xopvision – Digital Signage combina tecnologia de ponta e uma interface simples para transformar a forma como comunica com clientes e colaboradores.',
  'col1_title' => 'Funcionalidade',
  'col2_title' => 'Descrição',
  'col1_items' => [
    'Gestão Remota',
    'Conteúdos Dinâmicos',
    'Programação de Conteúdos',
    'Integração Cloud',
    'Soluções Multidispositivo',
    'Relatórios e Métricas'
  ],
  'col2_items' => [
    'Controle e actualize conteúdos em tempo real a partir de qualquer dispositivo.',
    'Suporte para vídeos, imagens, feeds de redes sociais, e informações em tempo real.',
    'Agendamento automático de campanhas e mensagens por dia, hora ou localização.',
    'Aceda e actualize conteúdos através da cloud, garantindo flexibilidade total.',
    'Compatível com monitores profissionais, videowalls e dispositivos móveis.',
    'Análise de desempenho de conteúdos para optimizar campanhas futuras.'
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
