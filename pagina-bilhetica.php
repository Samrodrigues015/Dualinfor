<?php
 /** Template Name: Página Bilhetica
  * Description: Página personalizada para a página Bilhetica da Dualinfor.
  */
get_header();

?>

<?php
get_template_part('template-parts/consultadoria-section-hero', null, array(
  'title' => 'Software de Bilhética Dualinfor: Gestão eficiente para eventos e serviços',
  'subtitle' => 'Automatize a criação, gestão e controlo de bilhetes com uma solução flexível e personalizada para o seu negócio. Oferecemos a tecnologia ideal para gerir bilhetes em eventos, transportes e serviços públicos.',
  'image' => get_template_directory_uri() . '/assets/img/img-bilhetica/herobilhetica.png',
  'btn_primary_text' => 'Solicite uma Reunião Personalizada',
  'btn_primary_link' => '#formulario',
  'btn_secondary_text' => 'Fale com um Especialista Agora',
  'btn_secondary_link' => '#formulario',
  'align_left' => true
));
?>

<?php
get_template_part('template-parts/hero-section-secondary', null, array(
  'title' => 'A Solução completa para a Gestão de Bilhética',
  'paragraph' => 'O Software de Bilhética da Dualinfor foi desenvolvido para responder às necessidades específicas de empresas e instituições que procuram simplificar a gestão de bilhetes, reduzir custos e melhorar a experiência do cliente.',
  'image' => get_template_directory_uri() . '/assets/img/img-bilhetica/herosecondary.png',
  'image_right' => true
));
?>

<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê escolher o software de Bilhética da Dualinfor?',
  'subtitle' => 'Com tecnologia de ponta e uma abordagem personalizada, o nosso software de bilhética oferece eficiência, flexibilidade e controlo absoluto para diferentes setores e necessidades.',

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
      'icon' => get_template_directory_uri() . '/assets/img/img-bilhetica/icone1.svg',
      'title' => 'Gestão Automatizada de Bilhetes',
      'items' => array(
        'Criação e emissão de bilhetes em tempo real.',
        'Suporte para bilhetes digitais e impressos.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-bilhetica/icone2.svg',
      'title' => 'Integração Total',
      'items' => array(
        'Compatível com sistemas de pagamento, terminais POS e plataformas online.',
        'Ligação fácil a aplicações móveis para venda e validação de bilhetes.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-bilhetica/icone3.svg',
      'title' => 'Melhoria da Experiência do Cliente',
      'items' => array(
        'Reduza filas e tempos de espera com processos automatizados.',
        'Ofereça opções de compra online ou presencial com a mesma eficiência.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-bilhetica/icone4.svg',
      'title' => 'Monitorização e Relatórios em Tempo Real',
      'items' => array(
        'Acompanhe as vendas e a utilização de bilhetes de forma instantânea.',
        'Gere relatórios detalhados para análise de desempenho.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-bilhetica/icone5.svg',
      'title' => 'Flexibilidade e Personalização',
      'items' => array(
        'Adapte o sistema ao tipo de evento ou serviço: transportes, espetáculos, feiras ou serviços públicos.',
        'Opções para personalizar bilhetes com logótipos, cores e designs específicos.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-bilhetica/icone6.svg',
      'title' => 'Conformidade Legal e Segurança',
      'items' => array(
        'Cumpra as normas fiscais e de proteção de dados em vigor em Portugal.',
        'Sistema seguro para prevenir fraudes e duplicação de bilhetes.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-bilhetica/icone7.svg',
      'title' => 'Suporte Técnico Especializado',
      'items' => array(
        'Consultoria, instalação e formação para garantir que o sistema opera com eficiência máxima.',
        'Assistência contínua para atualização e resolução de problemas.'
      )
    )
  ),
  'cta' => array(
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => '<img src="' . get_template_directory_uri() . '/assets/img/img-consultadoria/icone8.svg" alt="Ícone orçamento">',
    'url' => 'formulario'
  )
));
?>

<?php
get_template_part('template-parts/consultadoria-solutions-section', null, array(
  'title' => 'Como o software de Bilhética da Dualinfor eleva a gestão em diferentes setores',
  'paragraph' => 'Seja qual for o tamanho ou tipo de evento ou serviço, o nosso software adapta-se às suas necessidades, garantindo eficiência e uma experiência superior para os utilizadores.',
  'image' => get_template_directory_uri() . '/assets/img/img-bilhetica/imageevento.png',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-bilhetica/icone8.svg',
      'title' => 'Eventos e Espetáculos',
      'description' => '<ul><li>Emissão de bilhetes personalizados para concertos, peças de teatro e conferências.</li><li>Controlo rápido e seguro de entradas em eventos de grande escala.</li></ul>'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-bilhetica/icone9.svg',
      'title' => 'Transportes Públicos',
      'description' => '<ul><li>Venda e validação de bilhetes em terminais ou dispositivos móveis.</li><li>Monitorização de fluxos e gestão de passes mensais.</li></ul>'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-bilhetica/icone10.svg',
      'title' => 'Feiras e Exposições',
      'description' => '<ul><li>Bilhetes digitais e impressos com QR codes para acesso rápido.</li><li>Relatórios detalhados sobre a participação e desempenho do evento.</li></ul>'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-bilhetica/icone11.svg',
      'title' => 'Serviços Públicos',
      'description' => '<ul><li>Emissão de bilhetes de atendimento para organizar filas e gerir tempos de espera.</li><li>Monitorização de fluxos para otimizar recursos e melhorar a experiência do cidadão.</li></ul>'
    )
  )
));
?>



<?php
get_template_part('template-parts/produtos-features-section', null, array(
  'title' => 'Funcionalidades que transformam a gestão de Bilhética',
  'description' => 'O Software de Bilhética da Dualinfor integra tecnologia de ponta com funcionalidades intuitivas para tornar a gestão de bilhetes mais eficiente e acessível.',
  'col1_title' => 'Funcionalidade',
  'col2_title' => 'Descrição',
  'col1_items' => [
    'Emissão de Bilhetes em Tempo Real Remota',
    'Validação Digital',
    'Gestão de Vendas Multicanal',
    'Monitorização de Utilização',
    'Relatórios e Métricas',
    'Personalização de Bilhetes'
  ],
  'col2_items' => [
    'Criação rápida de bilhetes para eventos ou transportes, impressos ou digitais.',
    'Escaneamento de bilhetes através de QR codes ou NFC para controlo rápido.',
    'Suporte para vendas online, presencial e por terminais POS.',
    'Acompanhe a entrada e saída de utilizadores em tempo real.',
    'Relatórios automáticos sobre vendas, utilização e controlo financeiro.',
    'Adicione logótipos, designs e informações específicas ao bilhete.'
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
    'title' => 'Soluções complementares para potenciar a Gestão de Bilhetes',
    'services' => [
        [
            'title' => 'Software de Faturação e POS',
            'description' => 'Integre as vendas de bilhetes com a gestão financeira.',
            'url' => '/pagina-faturacao/'
        ],
        [
            'title' => 'Redes Estruturadas & Computing',
            'description' => 'Conectividade segura para suportar o sistema de bilhética.',
            'url' => '/pagina-redes-e-computing/'
        ],
        [
            'title' => 'Controlo de Acessos',
            'description' => 'Monitorize entradas com segurança adicional.',
            'url' => '/pagina-consultadoria/'
        ]
    ],
    'images' => [
        [
            'src' => get_template_directory_uri() . '/assets/img/img-consultadoria/image.png',
            'alt' => 'Circuit board technology'
        ],
        [
            'src' => get_template_directory_uri() . '/assets/img/img-solucoes-documentais/comercio.png',
            'alt' => 'Pessoa a trabalhar com tecnologia'
        ],
        [
            'src' => get_template_directory_uri() . '/assets/img/img-bilhetica/aeroporto.png',
            'alt' => 'Documento digital'
        ]
    ]
]);
?>

<?php
get_template_part('template-parts/produtos-doubt-section', null, array(
  'title' => 'Esclareça as suas dúvidas sobre o Software de Bilhética',
  'title_centered' => true,
  'image' => get_template_directory_uri() . '/assets/img/img-bilhetica/casal.png',
  'faqs' => array(
    array(
      'question' => 'O software suporta bilhetes digitais e impressos?',
      'answer' => 'Sim, oferece suporte para ambos os formatos, permitindo flexibilidade total.',
    ),
    array(
      'question' => 'É possível personalizar os bilhetes?',
      'answer' => 'Sim, pode incluir logótipos, cores e informações específicas nos bilhetes.',
    ),
    array(
      'question' => 'O sistema é compatível com dispositivos móveis?',
      'answer' => 'Sim, permite validação através de dispositivos móveis, como smartphones e tablets.',
    ),
    array(
      'question' => 'Qual o suporte técnico oferecido pela Dualinfor?',
      'answer' => 'Oferecemos instalação, formação e suporte contínuo para garantir que o sistema opera de forma eficiente.',
    ),
  )
));
?>

<?php
get_template_part('template-parts/formulario-section', null, array(
  'title' => 'Peça já o seu orçamento personalizado',
  'paragraphs' => array(
    'Quer saber como o Software de Bilhética da Dualinfor pode transformar a gestão de bilhetes no seu negócio? 
Preencha o formulário abaixo e receba uma proposta ajustada às suas necessidades.',
    '<em>Garantimos total privacidade e uma resposta no prazo máximo de 24 horas úteis.</em>'
  ),
  'fields_overrides' => array(
    'area' => array(
      'label' => 'Volume de Bilhetes Mensais',
      'placeholder' => 'Ex: 150',
      'type' => 'number'
    )
  )
));
?>


<?php get_footer(); ?>
