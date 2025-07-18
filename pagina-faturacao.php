<?php
/**
 * Template Name: Página Faturação
 * Description: Página personalizada para Página Faturação e POS da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/produtos-hero-section', null, array(
  'title' => 'Software de faturação e P.O.S Dualinfor: A solução completa para a gestão do seu negócio',
  'description' => 'Automatize e simplifique a gestão de vendas, inventário e relatórios financeiros. Com a Dualinfor, o controlo do seu negócio está sempre ao seu alcance.',
  'image_main' => get_template_directory_uri() . '/assets/img/img-faturacao/faturacaoimage1.png',
  'image_secondary' => get_template_directory_uri() . '/assets/img/img-faturacao/faturacaoimage2.png',
  'cta_primary' => [
    'url' => '#',
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconesetabranca.svg',
  ],
  'cta_secondary' => [
    'url' => '#',
    'label' => 'Fale com um Especialista',
  ],
  'reverse' => false,
  'content_heading' => 'Simplifique a gestão e maximize os resultados com o software P.O.S Dualinfor',
  'content_text' => 'O Software de Faturação e Ponto de Venda (P.O.S) da Dualinfor foi desenvolvido para atender às necessidades específicas de negócios no setor do retalho, restauração e serviços. Combine eficiência, controlo e facilidade de uso num sistema robusto e adaptável.',
  'content_image' => get_template_directory_uri() . '/assets/img/img-faturacao/faturacaoimage3.png',
));

?>

<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê escolher o software de faturação e P.O.S da Dualinfor?',
  'subtitle' => 'Criámos soluções que se adaptam a diferentes setores e tamanhos de negócios, oferecendo funcionalidades avançadas que otimizam as operações e melhoram a experiência do cliente.',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/icone1.svg',
      'title' => 'Faturação Simples e Rápida',
      'items' => array(
        'Processamento de transações em segundos.',
        'Funcionalidades intuitivas para reduzir erros no ponto de venda.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/icone2.svg',
      'title' => 'Gestão de Inventário em Tempo Real',
      'items' => array(
        'Controle o stock do seu negócio e receba alertas para reposições.',
        'Relatórios detalhados que facilitam a tomada de decisões.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/icone3.svg',
      'title' => 'Personalização de Funcionalidades',
      'items' => array(
        'Configure o software de acordo com as necessidades específicas do seu setor.',
        'Adicione módulos como gestão de mesas, entrega ao domicílio ou cartões de fidelização.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/icone4.svg',
      'title' => 'Relatórios Financeiros Detalhados',
      'items' => array(
        'Geração automática de relatórios de vendas, margens de lucro e desempenho da equipa.',
        'Exportação direta para ferramentas de contabilidade.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/icone5.svg',
      'title' => 'Conformidade Legal',
      'items' => 'Totalmente certificado para garantir conformidade com as normas fiscais e legislação portuguesa.'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/icone6.svg',
      'title' => 'Facilidade de Integração',
      'items' => 'Integra-se com sistemas de pagamento, plataformas de e-commerce e aplicações de gestão empresarial.'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/icone7.svg',
      'title' => 'Suporte Técnico Dedicado',
      'items' => 'Assistência personalizada durante a implementação e suporte contínuo para assegurar o máximo desempenho.'
    )
  ),
  'cta' => array(
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => '<svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z" transform="rotate(-90 12 12)"/></svg>'
  )
));
?>

<?php
get_template_part('template-parts/produtos-features-section', null, array(
  'title' => 'Funcionalidades que simplificam a gestão e aumentam a eficiência',
  'description' => 'O Software de Faturação e P.O.S da Dualinfor inclui as mais recentes inovações tecnológicas, garantindo que a sua empresa opera com a máxima eficiência.',
  'col1_title' => 'Funcionalidade',
  'col2_title' => 'Descrição',
  'col1_items' => [
    'Gestão de Vendas',
    'Gestão de Inventário',
    'Relatórios Personalizáveis',
    'Conectividade Cloud',
    'Integração Multicanal',
    'Gestão de Clientes'
  ],
  'col2_items' => [
    'Processamento rápido de transações com múltiplos métodos de pagamento.',
    'Monitorização automática de stocks com alertas em tempo real.',
    'Relatórios automáticos com métricas como vendas diárias e margens de lucro.',
    'Aceda aos dados do seu negócio em qualquer lugar, em tempo real.',
    'Compatível com lojas físicas, e-commerce e aplicações móveis.',
    'Ferramentas para fidelização e análise de comportamento do consumidor.'
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
  'title' => 'Como o software P.O.S Dualinfor transforma negócios de todos os setores',
  'subtitle' => 'Seja qual for o tamanho ou setor do seu negócio, o nosso Software de Faturação e P.O.S adapta-se para garantir máxima eficiência.',
  'image' => get_template_directory_uri() . '/assets/img/img-faturacao/mulherfaturacao.png', 
  'image_position' => 'right',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/iconerestaurante.svg',
      'title' => 'Restaurantes e Cafés',
      'list' => array(
        'Gestão de mesas, pedidos e entrega ao domicílio.',
        'Faturação rápida para reduzir tempos de espera.',
      ),
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/iconeloja.svg',
      'title' => 'Lojas de Retalho',
      'list' => array(
        'Controle de inventário e promoções em tempo real.',
        'Integração com sistemas de e-commerce para vendas online.',
      ),
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/iconecruz.svg',
      'title' => 'Farmácias e Saúde',
      'list' => array(
        'Gerir produtos sensíveis e acompanhar o stock de medicamentos.',
        'Ferramentas para emissão de faturas compatíveis com o sistema nacional de saúde.',
      ),
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconepme.svg',
      'title' => 'Pequenos Negócios e PME',
      'list' => array(
        'Sistema acessível e escalável para acompanhar o crescimento do negócio.',
        'Relatórios financeiros simples para decisões rápidas.',
      ),
    ),
  ),
));
?>

<?php
get_template_part('template-parts/produtos-complementary-section', null, array(
  'title' => 'Soluções que complementam o software de faturação e P.O.S',
  'image' => get_template_directory_uri() . '/assets/img/img-faturacao/cabos.png',
  'image_position' => 'right', 
  'cta_text' => 'Invista no Futuro da Sua Empresa com as Energias Renováveis Dualinfor',
  'cta_color' => '#293992', 
  'button_text' => 'Peça um Orçamento Personalizado',
  'services' => array(
    array(
      'title' => 'Gaveta Inteligente de Dinheiro',
      'description' => 'Otimize a gestão de numerário no ponto de venda.',
    ),
    array(
      'title' => 'Redes Estruturadas & Computing',
      'description' => 'Conectividade robusta para suportar sistemas POS.',
    ),
    array(
      'title' => 'Videovigilância',
      'description' => 'Garanta segurança nas transações e no ambiente de trabalho.',
    ),
  )
));
?>


<?php get_footer(); ?>
