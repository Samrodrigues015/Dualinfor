<?php

/**
 * Template Name: Página Soluções Visuais
 * Description: Página personalizada para Página soluções visuais da Dualinfor.
 */

get_header();
?>

<?php
get_template_part('template-parts/produtos-hero-section', null, array(
  'title' => 'Soluções visuais da Dualinfor: comunicação dinâmica que capta a atenção',
  'description' => 'Transforme a forma como comunica com os seus clientes. Descubra como os nossos monitores profissionais, videowalls e sistemas de digital signage tornam a comunicação mais envolvente e eficaz.',
  'image_main' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/solucoesvisuais1.png',
  'image_secondary' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/solucoesvisuais2.png',
  'cta_primary' => [
    'url' => '#',
    'label' => 'Peça um Orçamento Personalizado',
    'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconesetabranca.svg',
  ],
  'cta_secondary' => [
    'url' => '#',
    'label' => 'Fale com um Especialista',
  ],
  'reverse' => true,
  'content_heading' => 'Comunicação visual inovadora para negócios modernos',
  'content_text' => 'Na era da informação, captar a atenção do cliente é essencial. As Soluções Visuais da Dualinfor permitem transformar a comunicação do seu negócio com tecnologia avançada, garantindo impacto visual, eficiência e resultados tangíveis.',
  'content_image' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/solucoesvisuais3.png',
));

?>

<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê escolher as soluções visuais da Dualinfor?',
  'subtitle' => 'Desenvolvemos soluções que combinam qualidade de imagem superior, flexibilidade e inovação tecnológica para ajudar o seu negócio a destacar-se.',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/icone1.svg',
      'title' => 'Imagens de Alta Qualidade',
      'items' => array(
        'Resolução até 4K Ultra HD, garantindo cores vibrantes e nitidez em qualquer ambiente.',
        'Ideal para atrair clientes e comunicar mensagens claras e impactantes.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/icone2.svg',
      'title' => 'Versatilidade',
      'items' => array(
        'Equipamentos adaptáveis a diferentes espaços, desde pequenas lojas até grandes áreas comerciais ou salas de conferências.',
        'Soluções personalizadas para qualquer setor: retalho, saúde, educação ou hotelaria.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/icone3.svg',
      'title' => 'Gestão Remota',
      'items' => 'Ferramentas de gestão centralizada permitem actualizar conteúdos de forma simples e rápida, de qualquer lugar.'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/icone4.svg',
      'title' => 'Soluções de Digital Signage',
      'items' => 'Sistemas de sinalética digital que permitem criar experiências dinâmicas e personalizadas para os seus clientes.'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/icone5.svg',
      'title' => 'Eficiência Energética',
      'items' => 'Equipamentos com consumo reduzido de energia e certificações que promovem a sustentabilidade.'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/icone6.svg',
      'title' => 'Apoio Técnico Dualinfor',
      'items' => array(
        'Consultoria e instalação por uma equipa especializada.',
        'Suporte contínuo para garantir que as suas soluções estão sempre a funcionar no seu melhor.'
      )
    )
  )
));
?>

<?php
get_template_part('template-parts/produtos-features-section', null, array(
  'title' => 'Funcionalidades que potenciam a sua comunicação visual',
  'description' => 'As Soluções Visuais da Dualinfor integram as mais recentes inovações tecnológicas para oferecer qualidade e eficiência em todas as aplicações.',
  'col1_title' => 'Funcionalidade',
  'col2_title' => 'Descrição',
  'col1_items' => [
    'Resolução 4K Ultra HD',
    'Conectividade Avançada',
    'Monitores Tácteis',
    'Sistemas Modulares',
    'Sinalética Dinâmica'
  ],
  'col2_items' => [
    'Imagens nítidas e detalhadas para captar a atenção do público.',
    'Wi-Fi, HDMI, USB e integração com plataformas de cloud para gestão de conteúdos.',
    'Interação fácil e intuitiva para experiências imersivas.',
    'Videowalls configuráveis para adaptar-se a qualquer espaço.',
    'Possibilidade de personalizar e agendar conteúdos visuais para máxima relevância.'
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
  'title' => 'Adapte as nossas soluções visuais ao seu negócio',
  'subtitle' => 'Desde a criação de uma experiência de compra memorável até à apresentação de informações de forma clara e eficiente, as Soluções Visuais da Dualinfor adaptam-se às necessidades do seu setor.',
  'image' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/imageloja.png',
  'image_position' => 'left',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/iconeloja.svg',
      'title' => 'Retalho',
      'list' => array(
        'Exiba promoções e novidades de forma dinâmica para captar a atenção dos clientes.',
        'Videowalls para vitrinas ou áreas de destaque.',
      ),
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/iconecruz.svg',
      'title' => 'Saúde',
      'list' => array(
        'Utilização de sinalética digital para orientar pacientes e partilhar informações importantes.',
        'Monitores em salas de espera para melhorar a experiência do cliente.',
      ),
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-solucoesvisuais/iconeeducacao.svg',
      'title' => 'Educação',
      'list' => array(
        'Apresentação de conteúdos educativos em monitores interativos para envolver alunos e professores.',
        'Criação de ambientes colaborativos em salas de aula.',
      ),
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconemala.svg',
      'title' => 'Hotelaria e Restauração',
      'list' => array(
        'Digital signage para apresentar menus digitais e promoções.',
        'Monitores para exibição de eventos ou atrações locais.',
      ),
    ),
  ),
));
?>


<?php get_footer(); ?>
