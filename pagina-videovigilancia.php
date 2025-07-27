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

<?php
get_template_part('template-parts/consultadoria-solutions-section', null, array(
  'title' => "Como as soluções da Dualinfor garantem\nsegurança em diferentes setores",
  'paragraph' => 'De pequenos negócios a grandes corporações, as nossas soluções adaptam-se a qualquer ambiente, garantindo tranquilidade e controlo total.',
  'image' => get_template_directory_uri() . '/assets/img/img-videovigilancia/teclado-controlo-acessos.png',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-videovigilancia/icone8.svg',
      'title' => 'Lojas e Retalho',
      'description' => '
        <ul>
          <li>Monitorize áreas de venda e entradas para evitar perdas e melhorar a experiência do cliente.</li>
          <li>Análise de comportamento dos consumidores para otimizar layouts.</li>
        </ul>'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-videovigilancia/icone9.svg',
      'title' => 'Armazéns e Logística',
      'description' => '
        <ul>
          <li>Supervisione operações de carga e descarga para evitar erros e roubos.</li>
          <li>Controlo de acesso a zonas restritas.</li>
        </ul>'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-videovigilancia/icone10.svg',
      'title' => 'Escritórios Corporativos',
      'description' => '
        <ul>
          <li>Monitorização de acessos a áreas sensíveis, como salas de servidores.</li>
          <li>Proteção de colaboradores e equipamentos.</li>
        </ul>'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-videovigilancia/icone11.svg',
      'title' => 'Instituições Públicas e Educação',
      'description' => '
        <ul>
          <li>Segurança em escolas, hospitais e outras instituições para garantir a proteção de pessoas e bens.</li>
          <li>Monitorização em larga escala para espaços públicos.</li>
        </ul>'
    )
  )
));
?>


<?php
get_template_part('template-parts/produtos-features-section', null, array(
  'title' => 'Funcionalidades que elevam a segurança do seu negócio',
  'description' => 'As soluções de videovigilância da Dualinfor combinam inovação e confiabilidade para garantir proteção total em todas as áreas do seu negócio.',
  'col1_title' => 'Funcionalidade',
  'col2_title' => 'Descrição',
  'col1_items' => [
    'Câmaras de Alta Resolução',
    'Gravação na Cloud',
    'Reconhecimento Facial',
    'Integração com IoT',
    'Alertas Automáticos',
    'Interfaces Intuitivas'
  ],
  'col2_items' => [
    'Imagens nítidas com tecnologia 4K e visão noturna avançada.',
    'Armazenamento seguro e acessível de qualquer lugar.',
    'Identificação automática para maior controlo de acessos.',
    'Compatível com sistemas de automação para segurança adicional.',
    'Notificações em tempo real para eventos críticos ou atividades suspeitas.',
    'Gestão fácil de câmaras e gravações através de aplicações móveis e desktop.'
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