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

<?php
get_template_part('template-parts/consultadoria-solutions-section', null, array(
  'title' => 'Soluções de Design Estratégico que Transformam Negócios em Diversos Setores',
  'paragraph' => 'Seja para um novo negócio ou uma marca consolidada, criamos materiais visuais que ajudam a transmitir credibilidade e profissionalismo.',
  'image' => get_template_directory_uri() . '/assets/img/img-design/notebook.png',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-design/icone9.svg',
      'title' => 'Pequenas e Médias Empresas (PME)',
      'description' => 'Criação de identidades visuais e materiais promocionais para negócios e campanhas.'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-design/icone10.svg',
      'title' => 'Instituições Públicas e Educação',
      'description' => 'Design de relatórios institucionais, materiais educativos e modernização de logótipos e documentos oficiais.'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-design/icone11.svg',
      'title' => 'Eventos e Marketing',
      'description' => 'Criação de materiais visuais para eventos promocionais, incluindo stands, banners e apresentações.'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-design/icone12.svg',
      'title' => 'Setor Criativo e Cultural',
      'description' => 'Criação de portfólios, catálogos e identidade visual para projetos artísticos e culturais.'
    )
  )
));
?>



<?php
get_template_part('template-parts/produtos-features-section', null, array(
  'title' => 'Funcionalidades que garantem qualidade e impacto visual',
  'description' => 'Do conceito inicial à entrega do produto final, garantimos um processo criativo que resulta em soluções únicas e profissionais.',
  'col1_title' => 'Funcionalidade',
  'col2_title' => 'Descrição',
  'col1_items' => [
    'Criação de Logótipos',
    'Manual de Identidade Visual',
    'Design Gráfico Promocional',
    'Design Digital',
    'Rebranding',
    'Impressão e Produção'
  ],
  'col2_items' => [
    'Desenvolvimento de logótipos únicos e versáteis para diferentes aplicações.',
    'Definição de padrões de uso, tipografias, cores e aplicações para consistência.',
    'Criação de brochuras, folhetos, apresentações e materiais promocionais.',
    'Banners para redes sociais, websites e e-mails marketing.',
    'Modernização ou reformulação completa da identidade visual da sua marca.',
    'Apoio na impressão de materiais com acabamentos de alta qualidade.'
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
  'title' => 'Soluções que complementam o Design e Imagem Corporativa',
  'services' => [
    [
      'title' => 'Impressoras e Multifunções',
      'description' => 'Produza materiais promocionais internamente com qualidade profissional.'
    ],
    [
      'title' => 'Unibind – Encadernação e Personalização',
      'description' => 'Dê um toque final profissional aos seus documentos.'
    ],
    [
      'title' => 'Soluções de Sinalética Digital',
      'description' => 'Reforce a sua marca com conteúdos dinâmicos.'
    ]
  ],
  'images' => [
    [
      'src' => get_template_directory_uri() . '/assets/img/img-design/impressora.png',
      'alt' => 'Circuit board technology'
    ],
    [
      'src' => get_template_directory_uri() . '/assets/img/img-design/cardernos.png',
      'alt' => 'Pessoa a trabalhar com tecnologia'
    ],
    [
      'src' => get_template_directory_uri() . '/assets/img/img-design/comercio.png',
      'alt' => 'Documento digital'
    ]
  ]
]);
?>

<?php
get_template_part('template-parts/produtos-doubt-section', null, array(
  'title' => 'Esclareça as suas dúvidas sobre o serviço de Design e Imagem Corporativa',
  'title_centered' => true,
  'image' => get_template_directory_uri() . '/assets/img/img-design/cores.png',
  'faqs' => array(
    array(
      'question' => 'A Dualinfor oferece rebranding para marcas já existentes?',
      'answer' => 'Sim, podemos modernizar a identidade visual da sua marca mantendo os elementos essenciais.',
    ),
    array(
      'question' => 'O serviço inclui materiais impressos e digitais?',
      'answer' => '',
    ),
    array(
      'question' => 'Quanto tempo demora o processo de criação de um logótipo?',
      'answer' => '',
    ),
    array(
      'question' => 'É possível criar um manual de identidade visual?',
      'answer' => '',
    ),
  )
));
?>

<?php
get_template_part('template-parts/formulario-section', null, array(
  'title' => 'Peça já o seu orçamento personalizado',
  'paragraphs' => array(
    'Quer saber como as soluções de Design e Imagem Corporativa da Dualinfor podem transformar a sua marca? 
Preencha o formulário abaixo e receba uma proposta ajustada às suas necessidades.',
    '<em>Garantimos total privacidade e uma resposta no prazo máximo de 24 horas úteis.</em>'
  ),
  'fields_overrides' => array(
    'area' => array(
      'label' => 'Tipo de Projeto',
      'placeholder' => 'Ex: Instalação de sistema POS, consultoria informática.',
      'type' => 'text'
    )
  )
));
?>


<?php get_footer(); ?>