<?php
/**
 * Template Name: Página Digitalizadores
 * Description: Página personalizada para a página Digitalizadores da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/produtos-hero-section', null, array(
  'title' => 'Digitalizadores Dualinfor: Eficiência na estão de documentos ao alcance da sua empresa',
  'description' => 'Transforme documentos físicos em arquivos digitais organizados, seguros e fáceis de aceder. Com a Dualinfor, leve a digitalização ao próximo nível.',
  'image_main' => get_template_directory_uri() . '/assets/img/img-digitalizadores/digitalizadoresimage2.png',
  'image_secondary' => get_template_directory_uri() . '/assets/img/img-digitalizadores/digitalizadoresimage1.png',
  'cta_primary' => [
    'url' => '#',
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconesetabranca.svg',
  ],
  'cta_secondary' => [
    'url' => '#',
    'label' => 'Fale com um Especialista Agora',
  ],
  'reverse' => true,
  'content_heading' => 'Digitalize, organize e proteja documentos com tecnologia avançada',
  'content_text' => 'Os digitalizadores Dualinfor foram criados para resolver os desafios de gestão documental das empresas modernas. Seja para digitalizar contratos, registos médicos ou materiais académicos, oferecemos soluções rápidas, eficientes e adaptáveis a todas as necessidades.',
  'content_image' => get_template_directory_uri() . '/assets/img/img-digitalizadores/digitalizadoresimage3.png',
));

?>


<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê escolher os digitalizadores da Dualinfor?',
  'subtitle' => 'As nossas soluções de digitalização são projetadas para oferecer benefícios tangíveis à sua empresa, permitindo que poupe tempo, reduza custos e proteja informações sensíveis.',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-digitalizadores/icone1.svg',
      'title' => 'Velocidade de Digitalização Superior',
      'items' => array(
        'Digitalize até 60 páginas por minuto, ideal para grandes volumes de trabalho.',
        'Minimize o tempo gasto em tarefas manuais.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-digitalizadores/icone2.svg',
      'title' => 'Qualidade de Imagem Excepcional',
      'items' => array(
        'Resolução de até 1200 dpi para capturar todos os detalhes dos seus documentos.',
        'Ideal para arquivos legais, técnicos e gráficos.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-digitalizadores/icone3.svg',
      'title' => 'Soluções de Organização Automática',
      'items' => array(
        'Ferramentas integradas para classificar, renomear e arquivar documentos digitalizados.',
        'Opções para digitalizar diretamente para PDF pesquisável.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-digitalizadores/icone4.svg',
      'title' => 'Conformidade e Segurança',
      'items' => array(
        'Garantia de conformidade com o RGPD, protegendo dados sensíveis durante o processo de digitalização.',
        'Funções de autenticação para controlar acessos.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-digitalizadores/icone5.svg',
      'title' => 'Integração Total',
      'items' => 'Compatível com sistemas de gestão documental (DMS), cloud (Google Drive, OneDrive) e redes empresariais.'
    ),
     array(
      'icon' => get_template_directory_uri() . '/assets/img/img-digitalizadores/icone6.svg',
      'title' => 'Design Compacto e Versátil',
      'items' => array(
        'Modelos adaptáveis a escritórios pequenos ou grandes centros corporativos.',
        'Digitalização de vários tipos de documentos: papel A4/A3, cartões, recibos e documentos encadernados.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-digitalizadores/icone7.svg',
      'title' => 'Eficiência Energética',
      'items' => 'Consumo reduzido com tecnologia de baixo impacto ambiental.'
    )
  ),
  'cta' => array(
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => '<img src="' . get_template_directory_uri() . '/assets/img/img-energiarenovaveis/icone8.svg" alt="Ícone orçamento">'
  )
));
?>

<?php
get_template_part('template-parts/produtos-features-section', null, array(
  'title' => 'Funcionalidades que fazem a diferença na Gestão Documental',
  'description' => 'Os digitalizadores Dualinfor estão equipados com as mais recentes tecnologias para garantir qualidade, rapidez e simplicidade em todas as tarefas de digitalização.',
  'col1_title' => 'Funcionalidade',
  'col2_title' => 'Descrição',
  'col1_items' => [
    'Velocidade',
    'Resolução',
    'Alimentação',
    'Conectividade',
    'Software Integrados'
  ],
  'col2_items' => [
    'Até 60 páginas por minuto, com digitalização frente e verso simultânea.',
    'Resolução de até 1200 dpi para imagens nítidas e detalhadas.',
    'Capacidade de processar até 100 folhas por vez com alimentação automática.',
    'USB, Wi-Fi, Ethernet, integração com cloud e sistemas empresariais.',
    'Ferramentas para OCR (Reconhecimento Óptico de Caracteres) e PDFs pesquisáveis.'
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
get_template_part('template-parts/produtos-solutions-section', null, array(
  'title' => 'Digitalizadores adaptados a todas as necessidades empresariais',
  'subtitle' => 'Desde a digitalização de arquivos históricos até à organização de registos médicos, os digitalizadores da Dualinfor são ferramentas versáteis e essenciais para qualquer setor.',
  'image' => get_template_directory_uri() . '/assets/img/img-digitalizadores/epson.png', 
  'image_position' => 'left',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconeinstituicoes.svg',
      'title' => 'Administração Pública',
      'list' => array(
        'Digitalize e organize processos administrativos para fácil consulta.',
        'Arquivos protegidos contra perdas e danos.',
      ),
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/iconeeducacao.svg',
      'title' => 'Educação',
      'list' => array(
        'Transforme materiais físicos em digitais para partilha com alunos e docentes.',
        'Crie arquivos pesquisáveis para acesso rápido.',
      ),
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/iconecruz.svg',
      'title' => 'Saúde',
      'list' => array(
        'Digitalize registos médicos com segurança e confidencialidade.',
        'Reduza o espaço ocupado por documentos físicos.',
      ),
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconepme.svg',
      'title' => 'PME e Escritórios',
      'list' => array(
        'Organize contratos e faturas com eficiência.',
        'Envie documentos digitalizados diretamente para e-mails ou cloud.',
      ),
    ),
  ),
));
?>

<?php
get_template_part('template-parts/produtos-complementary-section', null, array(
  'title' => 'Soluções complementares que potenciam a Gestão Documental',
  'image' => get_template_directory_uri() . '/assets/img/img-digitalizadores/impressora.png',
  'image_position' => 'right', 
  'cta_text' => 'Peça um Orçamento Personalizado',
  'cta_color' => '#293992', 
  'button_text' => 'Peça um Orçamento Personalizado',
  'services' => array(
    array(
      'title' => 'Soluções de Videovigilância',
      'description' => 'Segurança para documentos físicos e espaços de trabalho.',
    ),
    array(
      'title' => 'Impressoras e Multifunções',
      'description' => 'Complemento ideal para impressão e digitalização integrada.',
    ),
    array(
      'title' => 'Soluções Documentais MPS',
      'description' => 'Gestão de impressão e fluxos de trabalho.',
    ),
  )
));
?>

<?php
get_template_part('template-parts/formulario-section', null, array(
  'title' => 'Peça já o seu orçamento personalizado',
  'paragraphs' => array(
    'Quer saber qual o digitalizador ideal para a sua empresa? Preencha o formulário abaixo e receba uma solução personalizada para as suas necessidades.',
    '<em>Garantimos total privacidade e uma resposta no prazo máximo de 24 horas úteis.</em>'
  ),
  'fields_overrides' => array(
    'area' => array(
      'label' => 'Volume Médio de Documentos',
      'placeholder' => 'Ex: 15'
    )
  )
));
?>

<?php
get_template_part('template-parts/produtos-doubt-section', null, array(
  'title' => 'Esclareça as suas dúvidas sobre Digitalizadores',
  'title_centered' => false, 
  'image' => get_template_directory_uri() . '/assets/img/img-digitalizadores/imagefaq.png',
  'faqs' => array(
    array(
      'question' => 'Os digitalizadores são compatíveis com sistemas Mac e Windows?',
      'answer' => 'Sim, são compatíveis com ambos os sistemas operativos.',
    ),
    array(
      'question' => 'Posso digitalizar para PDF pesquisável?',
      'answer' => 'Sim, todos os nossos modelos suportam OCR para criar PDFs pesquisáveis.',
    ),
    array(
      'question' => 'Qual o suporte técnico incluído?',
      'answer' => 'Oferecemos suporte especializado, manutenção preventiva e formação para equipas.',
    ),
    array(
      'question' => 'É possível digitalizar documentos A3?',
      'answer' => 'Sim, temos modelos com suporte para formatos A3.',
    ),
  )
));
?>

<?php get_footer(); ?>
