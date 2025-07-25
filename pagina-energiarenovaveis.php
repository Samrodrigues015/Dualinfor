<?php

/**
 * Template Name: Página Energias Renováveis
 * Description: Página personalizada para as soluções de energias renováveis da Dualinfor.
 */

get_header();
?>
 
<?php
get_template_part('template-parts/produtos-hero-section', null, array(
  'title' => 'Energias renováveis Dualinfor: Sustentabilidade e eficiência ao serviço da sua empresa',
  'description' => 'Reduza custos, aumente a eficiência energética e contribua para um futuro mais sustentável. Descubra como as nossas soluções em energias renováveis podem transformar o seu negócio.',
  'image_main' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/energiarenovaveis.png',
  'image_secondary' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/lampada.png',
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
  'content_heading' => 'Transforme o Consumo Energético da Sua Empresa com Soluções Sustentáveis',
  'content_text' => 'As soluções em energias renováveis da Dualinfor foram desenhadas para empresas que procuram reduzir custos operacionais e a sua pegada de carbono. Com tecnologia avançada e consultoria especializada, ajudamos o seu negócio a ser mais eficiente e sustentável.',
  'content_image' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/energiasolar.png',
));

?>

<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê Escolher as Soluções Dualinfor em Energias Renováveis?',
  'subtitle' => 'Investir em energias renováveis não é apenas uma decisão financeira inteligente, é também um compromisso com o futuro do planeta. Conheça os benefícios de trabalhar com a Dualinfor.',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/icone1.svg',
      'title' => 'Redução de Custos Energéticos',
      'items' => array(
        'Diminuição significativa da fatura de energia ao aproveitar fontes renováveis.',
        'Rápido retorno do investimento com redução de custos operacionais.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/icone2.svg',
      'title' => 'Sustentabilidade Empresarial',
      'items' => array(
        'Reduza a pegada de carbono e alinhe-se com as práticas globais de responsabilidade ambiental.',
        'Cumprimento de metas de sustentabilidade exigidas por grandes mercados.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/icone3.svg',
      'title' => 'Tecnologia de Ponta',
      'items' => array(
        'Instalação de sistemas de painéis solares fotovoltaicos eficientes e de longa durabilidade.',
        'Integração com sistemas de armazenamento de energia para maximizar o aproveitamento.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/icone4.svg',
      'title' => 'Conformidade e Incentivos Fiscais',
      'items' => array(
        'Apoio no acesso a incentivos fiscais e financiamentos para projetos de energias renováveis.',
        'Cumprimento de regulamentos nacionais e internacionais de eficiência energética.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/icone5.svg',
      'title' => 'Monitorização e Gestão em Tempo Real',
      'items' => array(
        'Sistemas inteligentes que permitem monitorizar a produção e consumo de energia.',
        'Relatórios detalhados para otimização contínua.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/icone6.svg',
      'title' => 'Soluções Adaptadas ao Seu Negócio',
      'items' => 'Personalização para diferentes setores, desde indústrias a pequenas empresas e instituições públicas.'
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/icone7.svg',
      'title' => 'Assistência Especializada Dualinfor',
      'items' => 'Consultoria, instalação e manutenção asseguradas por uma equipa técnica qualificada.'
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
  'title' => 'Tecnologia inovadora para um futuro sustentável',
  'description' => 'As nossas soluções em energias renováveis combinam tecnologia de ponta e eficiência para garantir um impacto positivo.',
  'col1_title' => 'Funcionalidade',
  'col2_title' => 'Descrição',
  'col1_items' => [
    'Painéis Solares Fotovoltaicos',
    'Armazenamento de Energia',
    'Monitorização Inteligente',
    'Eficiência Energética',
    'Variedade de Estilos',
    'Soluções Modulares'
  ],
  'col2_items' => [
    'Alta eficiência na captação e conversão de energia solar.',
    'Sistemas de baterias para aproveitar energia excedente.',
    'Plataforma com relatórios em tempo real.',
    'Soluções para reduzir perdas energéticas.',
    'Estilo adaptado ao ambiente empresarial.',
    'Componentes facilmente escaláveis.'
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
    array(
      'nome' => 'Pedro Oliveira',
      'cargo' => ' Diretor de Operações, Empresa XYZ',
      'mensagem' => 'Graças à consultadoria da Dualinfor, conseguimos reduzir os custos operacionais em 20% e melhorar significativamente a eficiência dos nossos processos. O acompanhamento da equipa foi fundamental para o sucesso.'
    ),
    array(
      'nome' => 'Sofia Marques',
      'cargo' => ' Diretora de Marketing, Empresa XYZ',
      'mensagem' => 'A Dualinfor ajudou-nos a modernizar a identidade visual da nossa empresa. O novo design reforçou a nossa imagem no mercado e contribuiu para atrair novos clientes.'
    ),
    array(
      'nome' => 'Ana Rodrigues',
      'cargo' => ' Gestora de Operações, Empresa XYZ.',
      'mensagem' => 'Com as soluções MPS da Dualinfor, conseguimos reduzir os custos de impressão em 30% e melhorar a eficiência na gestão documental. A equipa foi excelente durante toda a implementação.'
    ),
    array(
      'nome' => 'João Carvalho',
      'cargo' => ' Gerente de Loja, Empresa XYZ.',
      'mensagem' => 'Com a solução de Gestão de Filas de Espera da Dualinfor, organizámos o atendimento na nossa loja e reduzimos o tempo de espera em 30%. A satisfação dos clientes aumentou significativamente.'
    ),
    array(
      'nome' => 'Miguel Silva',
      'cargo' => 'Organizador de Eventos, Empresa XYZ.',
      'mensagem' => 'Graças ao software de bilhética da Dualinfor, conseguimos melhorar significativamente a gestão de entradas nos nossos eventos. A personalização de bilhetes e os relatórios detalhados foram uma mais-valia.'
    ),
    array(
      'nome' => 'Ana Lopes',
      'cargo' => 'Gestora de Marketing, Loja XYZ',
      'mensagem' => 'Com o Xopvision, conseguimos melhorar a comunicação com os nossos clientes e aumentar as vendas em 25%. O sistema é intuitivo e a equipa da Dualinfor foi impecável no suporte técnico.'
    ),
    array(
      'nome' => 'Joana Mendes',
      'cargo' => ' Diretora de TI, Empresa XYZ',
      'mensagem' => 'A Dualinfor ajudou-nos a implementar um sistema robusto de cibersegurança. Desde então, conseguimos evitar vários incidentes e operar com total confiança.'
    ),
  ),
));
?>

<?php
get_template_part('template-parts/produtos-solutions-section', null, array(
  'title' => 'Soluções adaptadas a todos os setores empresariais',
  'subtitle' => 'Seja qual for o tamanho ou setor da sua empresa, as soluções de energias renováveis da Dualinfor garantem eficiência energética e sustentabilidade.',
  'image' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/galpao.png',
  'reverse' => false,
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconetv.svg',
      'title' => 'Indústria e Logística',
      'list' => array(
        'Reduza os custos operacionais ao alimentar instalações industriais com energia solar.',
        'Monitorize o consumo energético para evitar desperdícios.',
      ),
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconepme.svg',
      'title' => 'Pequenas e Médias Empresas (PME)',
      'list' => array(
        'Instalações de baixo custo e rápidas para empresas em crescimento.',
        'Aproveite incentivos fiscais para investir em sustentabilidade.',
      ),
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconeinstituicoes.svg',
      'title' => 'Instituições Públicas',
      'list' => array(
        'Modernize edifícios e reduza custos em escolas, hospitais e outros serviços públicos.',
        'Aumente a eficiência e alinhe-se com metas governamentais de energia limpa.',
      ),
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconemala.svg',
      'title' => 'Hotelaria e Turismo',
      'list' => 'Geração de energia renovável para reduzir custos e atrair clientes que valorizam sustentabilidade.',
    ),
  ),
));
?>

<?php
get_template_part('template-parts/produtos-complementary-section', null, array(
  'title' => 'Soluções complementares para melhorar a eficiência energética',
  'image' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/imagempc.png',
  'image_position' => 'right', // ou 'left'
  'cta_text' => 'Invista no Futuro da Sua Empresa com as Energias Renováveis Dualinfor',
  'cta_color' => '#293992', // podes usar qualquer cor aqui, como '#9A2686'
  'button_text' => 'Peça Orçamento Personalizado',
  'services' => array(
    array(
      'title' => 'Redes Estruturadas & Computing',
      'description' => 'Conectividade para suportar sistemas de monitorização de energia.',
    ),
    array(
      'title' => 'Impressoras e Multifunções',
      'description' => 'Equipamentos energeticamente eficientes.',
    ),
    array(
      'title' => 'Videovigilância',
      'description' => 'Monitorização de segurança alimentada por energia renovável.',
    ),
  )
));
?>

<?php
get_template_part('template-parts/formulario-section', null, array(
  'title' => 'Peça já o seu orçamento personalizado',
  'paragraphs' => array(
    'Quer saber como as soluções em energias renováveis da Dualinfor podem beneficiar a sua empresa?',
    'Preencha o formulário abaixo e receba uma proposta ajustada às suas necessidades.',
    '<em>Garantimos total privacidade e uma resposta no prazo máximo de 24 horas úteis.</em>'
  )
));
?>

<?php
get_template_part('template-parts/produtos-doubt-section', null, array(
  'title' => 'Esclareça as suas dúvidas sobre Energias Renováveis',
  'title_centered' => true, // ou false para alinhar à esquerda
  'image' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/imagepredio.png',
  'faqs' => array(
    array(
      'question' => 'Qual é o tempo médio de retorno do investimento?',
      'answer' => 'Sim, são intuitivas e não requerem formação técnica.',
    ),
    array(
      'question' => 'A Dualinfor ajuda com incentivos fiscais?',
      'answer' => 'Sim, oferecemos apoio na candidatura a incentivos e subsídios disponíveis em Portugal.',
    ),
    array(
      'question' => 'Os sistemas de energia renovável requerem muita manutenção?',
      'answer' => 'A manutenção é mínima, sendo necessária apenas limpeza periódica e verificação técnica.',
    ),
    array(
      'question' => 'É possível armazenar a energia gerada?',
      'answer' => 'Sim, utilizamos sistemas de armazenamento que permitem guardar energia para utilização futura.',
    ),
  )
));
?>

<?php get_footer(); ?>
