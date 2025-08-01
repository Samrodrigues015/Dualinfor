<?php
/**
 * Template Name: Página Gavetas Inteligentes
 * Description: Página personalizada para a página gavetas inteligentes da Dualinfor.
 */

get_header();
?>
 
<?php
get_template_part('template-parts/produtos-hero-section', null, array(
  'title' => 'Gavetas Inteligentes de dinheiro: Segurança, eficiência e controlo em cada transação
',
  'description' => 'Aumente a segurança do numerário, reduza erros e simplifique os processos no ponto de venda com as soluções inovadoras da Dualinfor.',
  'image_main' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/gavetasinteligenteshero.png',
  'image_secondary' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/gavetasinteligentes2.png',
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
  'content_heading' => 'Gestão de numerário inteligente para empresas modernas',
  'content_text' => 'As Gavetas Inteligentes de Dinheiro da Dualinfor foram desenvolvidas para eliminar os desafios de gestão de numerário. Desde a segurança no manuseamento de dinheiro até à automatização do fecho de caixa, as nossas soluções garantem eficiência e controlo absoluto em qualquer setor.',
  'content_image' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/gavetasinteligentes3.png',
));

?>

<?php
get_template_part('template-parts/produtos-benefits-section', null, array(
  'title' => 'Porquê escolher as gavetas inteligentes Dualinfor?',
  'subtitle' => 'Com as Gavetas Inteligentes de Dinheiro, simplifique processos operacionais, minimize erros e garanta total segurança no manuseamento de numerário.',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/icone1.svg',
      'title' => 'Aumento da Segurança',
      'items' => array(
        'Reduza o risco de furtos internos e externos com sistemas de controlo avançados.',
        'Funcionalidades de monitorização e autenticação de utilizadores.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/icone2.svg',
      'title' => 'Eficiência no Fecho de Caixa',
      'items' => array(
        'Automatize o processo de reconciliação de caixa, reduzindo o tempo e os erros associados.',
        'Relatórios automáticos detalhados que facilitam a gestão financeira.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/icone3.svg',
      'title' => 'Eliminação de Erros Humanos',
      'items' => array(
        'Contagem precisa do numerário em tempo real.',
        'Diminuição de discrepâncias e tempo gasto em correções.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/icone4.svg',
      'title' => 'Monitorização em Tempo Real',
      'items' => array(
        'Integração com sistemas de gestão para acesso remoto a dados de transações e relatórios.',
        'Alarmes automáticos em caso de irregularidades.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/icone5.svg',
      'title' => 'Facilidade de Integração',
      'items' => array(
        'Compatível com sistemas de ponto de venda (POS) já existentes.',
        'Adaptação às necessidades de diferentes setores, como retalho, restauração e supermercados.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/icone6.svg',
      'title' => 'Durabilidade e Design Compacto',
      'items' => array(
        'Construção robusta que assegura durabilidade em ambientes de alto movimento.',
        'Design ergonómico que ocupa pouco espaço.'
      )
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/icone7.svg',
      'title' => 'Conformidade Legal',
      'items' => 'Totalmente compatível com a legislação fiscal portuguesa e normas de segurança.'
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
  'title' => 'Funcionalidades que fazem a diferença na gestão de numerário',
  'description' => 'As Gavetas Inteligentes de Dinheiro da Dualinfor integram tecnologia de ponta para garantir uma gestão eficaz, segura e simples do numerário no ponto de venda.',
  'col1_title' => 'Funcionalidade',
  'col2_title' => 'Descrição',
  'col1_items' => [
    'Contagem Automática',
    'Monitorização Remota',
    'Fecho Seguro',
    'Integração POS',
    'Relatórios Detalhados',
    'Alarme Integrado'
  ],
  'col2_items' => [
    'Contagem instantânea de moedas e notas com precisão absoluta.',
    'Acesso em tempo real a transações e relatórios financeiros.',
    'Sistemas de bloqueio automático para prevenir acessos não autorizados.',
    'Compatível com todos os sistemas de ponto de venda modernos.',
    'Geração automática de relatórios de reconciliação e discrepâncias.',
    'Notificações de segurança em caso de tentativa de abertura não autorizada.'
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
  'title' => 'Adapte as gavetas inteligentes ao seu negócio',
  'subtitle' => 'Seja qual for o tamanho ou setor do seu negócio, as nossas soluções adaptam-se para oferecer segurança e eficiência no manuseamento de numerário.',
  'image' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/impressorapreta.png',
  'image_position' => 'left',
  'cards' => array(
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/iconechaveiro.svg',
      'title' => 'Supermercados e Grandes Retalhistas',
      'list' => array(
        'Automatize o fecho de caixa em horários de maior fluxo.',
        'Reduza discrepâncias financeiras e otimize a gestão.',
      ),
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/iconerestaurante.svg',
      'title' => 'Restauração e Cafés',
      'list' => array(
        'Velocidade e precisão no processamento de pagamentos.',
        'Design compacto que se adapta a balcões pequenos.',
      ),
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconepme.svg',
      'title' => 'Pequenas Empresas e PME',
      'list' => array(
        'Ferramentas acessíveis para garantir controlo total do numerário.',
        'Relatórios que ajudam na tomada de decisões financeiras.',
      ),
    ),
    array(
      'icon' => get_template_directory_uri() . '/assets/img/img-energiarenovaveis/iconeinstituicoes.svg',
      'title' => 'Instituições Públicas e Serviços',
      'list' => array(
        'Segurança adicional no manuseamento de numerário em contextos sensíveis.',
        'Conformidade com normas legais e fiscais.',
      ),
    ),
  ),
));
?>

<?php
get_template_part('template-parts/produtos-complementary-section', null, array(
  'title' => 'Soluções complementares que potenciam a gestão do seu negócio',
  'image' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/mulherescritorio.png',
  'image_position' => 'right',
  'cta_text' => 'Peça um Orçamento Personalizado',
  'cta_color' => '#293992',
  'button_text' => 'Peça um Orçamento Personalizado',
  'services' => array(
    array(
      'title' => 'Software de Faturação e P.O.S',
      'description' => 'Equipamentos energeticamente eficientes.',
      'url' => '/pagina-faturacao/'
    ),
    array(
      'title' => 'Redes Estruturadas & Computing',
      'description' => 'Conectividade segura e escalável.',
      'url' => '/pagina-redes-e-computing/'
    ),
    array(
      'title' => 'Videovigilância',
      'description' => 'Monitorização de segurança para o ponto de venda.',
      'url' => '/pagina-videvigilancia/'
    ),
  )
));
?>

<?php
get_template_part('template-parts/formulario-section', null, array(
  'title' => 'Peça já o seu orçamento personalizado',
  'paragraphs' => array(
    'Quer saber como as Gavetas Inteligentes de Dinheiro da Dualinfor podem transformar a gestão do numerário no seu negócio?',
    'Preencha o formulário abaixo e receba uma proposta ajustada às suas necessidades.',
    '<em>Garantimos total privacidade e uma resposta no prazo máximo de 24 horas úteis.</em>'
  ),
  'fields_overrides' => array(
    'area' => array(
      'label' => 'Número de Monitores/Videowalls Necessários.',
      'placeholder' => 'Ex: 15'
    )
  )
));
?>

<?php
get_template_part('template-parts/produtos-doubt-section', null, array(
  'title' => 'Resolvemos as Suas Dúvidas Sobre as Gavetas Inteligentes',
  'title_centered' => false, 
  'image' => get_template_directory_uri() . '/assets/img/img-gavetasinteligentes/farmacia.png',
  'faqs' => array(
    array(
      'question' => 'As gavetas são compatíveis com sistemas POS existentes?',
      'answer' => 'Sim, as nossas gavetas integram-se facilmente com os sistemas POS mais utilizados no mercado.',
    ),
    array(
      'question' => 'É possível aceder remotamente às informações da gaveta?',
      'answer' => 'Sim, os sistemas incluem monitorização em tempo real através de plataformas digitais.',
    ),
    array(
      'question' => 'Qual o suporte técnico oferecido?',
      'answer' => 'Oferecemos suporte completo, incluindo instalação, manutenção e formação para a sua equipa.',
    ),
    array(
      'question' => 'É necessária formação para utilizar as gavetas?',
      'answer' => 'O sistema é intuitivo, mas oferecemos formação inicial para garantir que a equipa utiliza todas as funcionalidades.',
    ),
  )
));
?>




<?php get_footer(); ?>
