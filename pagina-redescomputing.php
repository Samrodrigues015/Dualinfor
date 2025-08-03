<?php

/**
 * Template Name: Página Redes e Computing
 * Description: Página personalizada para página Redes e Computing da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/produtos-hero-section', null, array(
  'title' => 'Redes estruturadas e soluções de computing: A conectividade e eficiência que a sua empresa precisa',
  'description' => 'Desde a conceção até à implementação, oferecemos soluções robustas e escaláveis que garantem a continuidade operacional e a segurança das infraestruturas de TI.',
  'image_main' => get_template_directory_uri() . '/assets/img/img-redes/redesimage1.png',
  'image_secondary' => get_template_directory_uri() . '/assets/img/img-redes/redesimage2.png',
  'cta_primary' => [
    'url' => '#formulario',
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconesetabranca.svg',
  ],
  'cta_secondary' => [
    'url' => '#formulario',
    'label' => 'Fale com um Especialista',
  ],
  'reverse' => false,
  'content_heading' => 'Conectividade e segurança para empresas modernas',
  'content_text' => 'Na Dualinfor, compreendemos que uma infraestrutura de TI sólida é a base de qualquer negócio. As nossas soluções de Redes Estruturadas & Computing foram desenhadas para oferecer alta performance, escalabilidade e segurança, garantindo que a sua empresa esteja sempre preparada para crescer.',
  'content_image' => get_template_directory_uri() . '/assets/img/img-redes/redesimage3.png',
));

?>

<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê escolher a Dualinfor para redes e computing?',
  'subtitle' => 'As nossas soluções são personalizadas para atender às necessidades específicas de empresas de diferentes tamanhos e setores. Trabalhamos lado a lado consigo para garantir que a sua infraestrutura está sempre à altura dos desafios do mercado.',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-redes/icone1.svg',
      'title' => 'Alta Performance',
      'items' => array(
        'Redes com velocidades que suportam até 10 Gbps, garantindo um desempenho ideal para grandes volumes de dados.',
        'Conexões estáveis para evitar interrupções nas operações diárias.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-redes/icone2.svg',
      'title' => 'Escalabilidade Garantida',
      'items' => array(
        'Estruturas modulares que permitem crescimento sem necessidade de grandes atualizações.',
        'Preparado para suportar novas tecnologias como IoT e computação em cloud.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-redes/icone3.svg',
      'title' => 'Segurança Avançada',
      'items' => array(
        'Monitorização em tempo real para identificação de ameaças e resposta imediata.',
        'Soluções integradas com firewalls e encriptação de dados.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-redes/icone4.svg',
      'title' => 'Eficiência Energética',
      'items' => 'Equipamentos otimizados para consumo reduzido, ajudando a sua empresa a poupar energia e reduzir a pegada ambiental.'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-redes/icone5.svg',
      'title' => 'Simplicidade na Gestão',
      'items' => array(
        'Centralização da gestão de redes, permitindo que a sua equipa de TI tenha controlo total a partir de uma interface única.',
        'Integrado com softwares empresariais e cloud.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-redes/icone6.svg',
      'title' => 'Suporte Especializado da Dualinfor',
      'items' => array(
        'Consultoria, instalação e manutenção por uma equipa altamente qualificada.',
        'Acompanhamento contínuo para garantir o máximo desempenho.'
      )
    )
  )
));
?>


<?php
get_template_part('template-parts/produtos-features-section', null, array(
  'title' => 'Funcionalidades que fazem a diferença nas operações Empresariais',
  'description' => 'As nossas soluções combinam a mais recente tecnologia com configurações personalizadas para garantir que a sua infraestrutura está sempre no topo.',
  'col1_title' => 'Funcionalidade',
  'col2_title' => 'Descrição',
  'col1_items' => [
    'Velocidade de Rede',
    'Gestão Centralizada',
    'Compatibilidade IoT',
    'Segurança Avançada',
    'Escalabilidade Modular',
    'Conectividade Cloud'
  ],
  'col2_items' => [
    'Até 10 Gbps com suporte para alta densidade de dispositivos.',
    'Ferramentas que permitem monitorizar e ajustar redes em tempo real.',
    'Suporte para dispositivos IoT para empresas que utilizam soluções inteligentes.',
    'Firewalls, deteção de intrusões e monitorização constante de vulnerabilidades.',
    'Redes estruturadas que se adaptam ao crescimento da sua empresa.',
    'Integração com serviços de cloud como Microsoft Azure e Google Cloud.'
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
  'title' => 'Como as Redes Estruturadas & Computing podem transformar o seu negócio',
  'subtitle' => 'Independente do setor em que atua, as nossas soluções são projetadas para simplificar a gestão, aumentar a eficiência e garantir resultados tangíveis.',
  'image' => get_template_directory_uri() . '/assets/img/img-redes/tecnologia.png',
  'image_position' => 'right',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconetv.svg',
      'title' => 'Corporativo e Escritórios',
      'list' => array(
        'Infraestruturas que garantem conectividade estável para equipas grandes e dispersas.',
        'Redes centralizadas que facilitam a gestão de dados e dispositivos.',
      ),
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/iconeeducacao.svg',
      'title' => 'Educação',
      'list' => array(
        'Suporte para redes de alta densidade, essenciais para instituições de ensino digital.',
        'Integração com plataformas de e-learning.',
      ),
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/iconecruz.svg',
      'title' => 'Saúde',
      'list' => array(
        'Redes seguras para o processamento de dados confidenciais, como registos médicos.',
        'Conectividade ininterrupta para operações críticas.',
      ),
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/iconeloja.svg',
      'title' => 'Logística e Indústria',
      'list' => array(
        'Gestão de dispositivos IoT para controlo e monitorização de operações em tempo real.',
        'Redes resistentes para ambientes industriais exigentes.',
      ),
    ),
  ),
));
?>

<?php
get_template_part('template-parts/produtos-complementary-section', null, array(
  'title' => 'Soluções que complementam o software de faturação e P.O.S',
  'image' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/gavetasinteligenteshero.png',
  'image_position' => 'right',
  'cta_text' => 'Invista no Futuro da Sua Empresa com as Energias Renováveis Dualinfor',
  'cta_color' => '#293992',
  'button_text' => 'Peça um Orçamento Personalizado',
  'services' => array(
    array(
      'title' => 'Gaveta Inteligente de Dinheiro',
      'description' => 'Otimize a gestão de numerário no ponto de venda.',
      'url' => site_url ('/pagina-gavetas-inteligentes/')
    ),
    array(
      'title' => 'Redes Estruturadas & Computing',
      'description' => 'Conectividade robusta para suportar sistemas POS.',
      'url' => site_url('/pagina-redes-e-computing/')
    ),
    array(
      'title' => 'Videovigilância',
      'description' => 'Garanta segurança nas transações e no ambiente de trabalho.',
      'url' => site_url('/pagina-videvigilancia/'),
    ),
  )
));
?>

<?php
get_template_part('template-parts/formulario-section', null, array(
  'title' => 'Peça já o seu orçamento personalizado',
  'paragraphs' => array(
    'Quer saber como o Software de Faturação e P.O.S Dualinfor pode transformar o seu negócio?',
    'Preencha o formulário abaixo e receba uma proposta ajustada às suas necessidades.',
    '<em>Garantimos total privacidade e uma resposta no prazo máximo de 24 horas úteis.</em>'
  ),
  'fields_overrides' => array(
    'area' => array(
      'label' => 'Número de Estações de POS Necessárias.',
      'placeholder' => 'Ex: 15'
    )
  )
));
?>

<?php
get_template_part('template-parts/produtos-doubt-section', null, array(
  'title' => 'Esclareça as suas dúvidas sobre Redes Estruturadas',
  'title_centered' => false, 
  'image' => get_template_directory_uri() . '/assets/img/img-redes/tecnico.png',
  'faqs' => array(
    array(
      'question' => 'As redes estruturadas podem ser adaptadas ao crescimento da minha empresa?',
      'answer' => 'Sim, todas as nossas soluções são escaláveis e permitem expansão conforme as necessidades.',
    ),
    array(
      'question' => 'As redes incluem soluções de segurança?',
      'answer' => 'Sim, as nossas soluções integram firewalls e monitorização contínua para máxima proteção.',
    ),
    array(
      'question' => 'Qual o tempo de implementação de uma rede estruturada?',
      'answer' => 'O tempo depende do tamanho e complexidade do projeto, mas garantimos uma execução eficiente.',
    ),
    array(
      'question' => 'Qual o suporte técnico oferecido?',
      'answer' => 'Oferecemos suporte completo: consultoria, instalação, manutenção e upgrades.',
    ),
  )
));
?>

<?php get_footer(); ?>
