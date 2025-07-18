<?php
/**
 * Template Name: Página Impressoras Multifuncionais
 * Description: Página personalizada para a página Impressoras Multifuncionais da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/produtos-hero-section', null, array(
  'title' => 'Impressoras e Multifunções Epson: Produtividade, sustentabilidade e eficiência em cada impressão',
  'description' => 'Combinamos a tecnologia de impressão de última geração da Epson com o suporte técnico especializado da Dualinfor para oferecer soluções personalizadas que otimizam as operações da sua empresa.',
  'image_main' => get_template_directory_uri() . '/assets/img/img-impressoras/impressorasimage1.png',
  'image_secondary' => get_template_directory_uri() . '/assets/img/img-impressoras/impressorasimage2.png',
  'cta_primary' => [
    'url' => '#',
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconesetabranca.svg',
  ],
  'cta_secondary' => [
    'url' => '#',
    'label' => 'Fale com um Especialista Agora',
  ],
  'reverse' => false,
  'content_heading' => 'Transforme a Gestão Documental da sua empresa com a Dualinfor e a tecnologia Epson',
  'content_text' => 'As impressoras e multifunções Epson são soluções inteligentes que ajudam empresas de todos os tamanhos a reduzir custos, aumentar a eficiência e alcançar metas de sustentabilidade, adaptando-se às necessidades específicas de cada cliente.',
  'content_image' => get_template_directory_uri() . '/assets/img/img-impressoras/impressorasimage3.png',
));

?>

<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê Escolher as Impressoras Epson?',
  'subtitle' => 'As nossas impressoras e multifunções Epson foram projetadas para oferecer valor real ao seu negócio. Descubra como estas soluções podem transformar a forma como trabalha com documentos.',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-impressoras/icone1.svg',
      'title' => 'Qualidade Imbatível de Impressão',
      'items' => array(
        'Resolução de até 1200 x 1200 dpi, garantindo uma qualidade de impressão nítida e profissional.',
        'Ideal para documentos corporativos, gráficos e materiais promocionais.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-impressoras/icone2.svg',
      'title' => 'Eficiência Energética',
      'items' => array(
        'Equipadas com tecnologia de jato de tinta sem calor, consomem até 85% menos energia do que impressoras laser tradicionais.',
        'Certificação Energy Star, contribuindo para uma operação mais sustentável.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-impressoras/icone3.svg',
      'title' => 'Multifunções Completas',
      'items' => array(
        'Impressão, cópia, digitalização e envio de fax integrados num único equipamento.',
        'Permite digitalizar documentos diretamente para e-mail, cloud ou servidores empresariais.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-impressoras/icone4.svg',
      'title' => 'Soluções Adaptáveis a Qualquer Negócio',
      'items' => array(
        'Compatíveis com A4 e A3, com opções para impressão monocromática ou a cores.',
        'Equipamentos modulares para atender empresas de qualquer dimensão.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-impressoras/icone5.svg',
      'title' => 'Velocidade e Produtividade',
      'items' => array(
        'Impressão até 40 páginas por minuto, ideal para ambientes com grande volume de documentos.',
        'Capacidade de papel ajustável, suportando até 500 folhas por bandeja.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-impressoras/icone6.svg',
      'title' => 'Conectividade e Mobilidade',
      'items' => array(
        'Total integração com Wi-Fi, Ethernet e USB.',
        'Impressão móvel via Google Cloud Print, Apple AirPrint e aplicações Epson Connect.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-impressoras/icone7.svg',
      'title' => 'Segurança Avançada',
      'items' => array(
        'Proteja os seus dados com opções de impressão confidencial e autenticação de utilizadores.',
        'Garantia de conformidade com normas de proteção de dados, como o RGPD.'
      )
    )
  ),
  'cta' => array(
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => '<svg viewBox="0 0 24 24"><path d="M7.41 8.59L12 13.17l4.59-4.58L18 10l-6 6-6-6 1.41-1.41z" transform="rotate(-90 12 12)"/></svg>'
  )
));
?>

<?php get_template_part('template-parts/impressora-epson-block'); ?>


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
get_template_part('template-parts/produtos-complementary-section', null, array(
  'title' => 'Soluções complementares para potenciar o seu negócio',
  'image' => get_template_directory_uri() . '/assets/img/img-impressoras/cameravigilancia.png',
  'image_position' => 'right', 
  'cta_text' => 'Invista no Futuro da Sua Empresa com as Energias Renováveis Dualinfor',
  'cta_color' => '#293992', 
  'button_text' => 'Peça um Orçamento Personalizado',
  'services' => array(
    array(
      'title' => 'Gaveta Inteligente de Dinheiro',
      'description' => 'Segurança e eficiência na gestão de numerário',
    ),
    array(
      'title' => 'Soluções de Videovigilância',
      'description' => 'Proteja o seu espaço e ativos.',
    ),
    array(
      'title' => 'Software de Faturação e POS',
      'description' => 'Simplifique a gestão de vendas.',
    ),
  )
));
?>

<?php get_footer(); ?>
