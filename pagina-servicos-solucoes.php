<?php
//* Template Name: Página Serviços e Soluções
//* Description: Página personalizada para Página Serviços e Soluções da Dualinfor.

get_header();
?>

<main>
  <!-- Hero Section -->
  <section class="hero cybersecurity-hero">
    <div class="container">
      <div class="hero-content">
        <div class="hero-text-section">
          <div class="hero-left">
            <h1>Cibersegurança Dualinfor:</h1>
            <h2>Proteja os dados e operações da sua empresa contra ameaças digitais</h2>
            <div class="hero-buttons">
              <a href="#formulario" class="btn-primary">Peça um Diagnóstico Gratuito
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-servicos/iconeseta.svg" alt="icone seta">
              </a>
              <a href="#formulario" class="btn-secondary">Fale com um Especialista Agora</a>
            </div>
          </div>
          <div class="hero-right">
            <div class="hero-description">
              <p>Identifique, previna e neutralize ataques cibernéticos com soluções avançadas de segurança digital. Mantenha os seus sistemas, informações e operações protegidos com a Dualinfor.</p>
            </div>
          </div>
        </div>
        <div class="hero-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-servicos/image1.png" alt="Cybersecurity interface with digital security icons">
        </div>
      </div>
    </div>
  </section>

  <!-- Cybersecurity Solutions Section -->
  <section class="solutions-intro-section">
    <div class="container">
      <div class="solutions-intro-content">
        <div class="solutions-intro-left">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-servicos/image2.png" alt="Cybersecurity control room">
        </div>
        <div class="solutions-intro-right">
          <h2>Soluções de Cibersegurança para máxima proteção e confiança</h2>
          <p>Com o aumento das ameaças cibernéticas, proteger os dados e sistemas da sua empresa tornou-se mais essencial do que nunca. Na Dualinfor, oferecemos <strong>soluções avançadas de cibersegurança</strong> especializadas para reduzir riscos, proteger informações sensíveis e garantir a continuidade das suas operações.</p>
        </div>
      </div>
    </div>
  </section>

  <?php
  get_template_part('template-parts/produtos-benefits-section', null, array(
    'title' => 'Por que escolher a Dualinfor para proteger a sua empresa?',
    'subtitle' => 'Com tecnologia de ponta e uma equipa experiente, as nossas soluções de cibersegurança garantem proteção total contra ameaças digitais, permitindo que a sua empresa opere com máxima segurança e confiança.',

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
        'icon' => get_template_directory_uri() . '/assets/img/img-consultadoria/icone1.svg',
        'title' => 'Proteção Avançada Contra Ameaças',
        'items' => array(
          'Identificação e bloqueio de ataques em tempo real, incluindo ransomware, phishing e malware.'
        )
      ),
      array(
        'icon' => get_template_directory_uri() . '/assets/img/img-consultadoria/icone2.svg',
        'title' => 'Segurança de Dados Reforçada',
        'items' => array(
          'Encriptação avançada e backups automáticos para proteger informações sensíveis, garantindo conformidade com o RGPD.'
        )
      ),
      array(
        'icon' => get_template_directory_uri() . '/assets/img/img-consultadoria/icone3.svg',
        'title' => 'Monitorização 24/7',
        'items' => array(
          'Supervisão permanente dos sistemas, com respostas imediatas a incidentes para minimizar impactos.'
        )
      ),
      array(
        'icon' => get_template_directory_uri() . '/assets/img/img-consultadoria/icone4.svg',
        'title' => 'Prevenção de Acessos Não Autorizados',
        'items' => array(
          'Firewalls, autenticação multifator (2FA) e controlo de privilégios de acesso para proteger os dados da empresa.'
        )
      ),
      array(
        'icon' => get_template_directory_uri() . '/assets/img/img-consultadoria/icone5.svg',
        'title' => 'Relatórios e Auditorias de Segurança',
        'items' => array(
          'Análises regulares que identificam vulnerabilidades e orientam melhorias contínuas.'
        )
      ),
      array(
        'icon' => get_template_directory_uri() . '/assets/img/img-consultadoria/icone6.svg',
        'title' => 'Soluções Flexíveis e Personalizadas',
        'items' => array(
          'Adaptação às necessidades específicas de PMEs e grandes empresas.'
        )
      ),
      array(
        'icon' => get_template_directory_uri() . '/assets/img/img-consultadoria/icone7.svg',
        'title' => 'Formação em Cibersegurança',
        'items' => array(
          'Capacitação de equipas para identificar e prevenir riscos cibernéticos, reduzindo erros humanos.'
        )
      )
    ),
    'cta' => array(
      'label' => 'Peça um Orçamento Personalizado',
      'icon' => '<img src="' . get_template_directory_uri() . '/assets/img/img-consultadoria/icone8.svg" alt="Ícone orçamento">',
      'url' => '#formulario'
    )
  ));
  ?>

  <?php
  get_template_part('template-parts/consultadoria-solutions-section', null, array(
    'title' => 'Como a Dualinfor garante proteção em diversos setores',
    'paragraph' => 'As nossas soluções de cibersegurança são flexíveis e adaptam-se a qualquer setor, garantindo a segurança de dados sensíveis e a continuidade das operações.',
    'image' => get_template_directory_uri() . '/assets/img/img-servicos/image4.png',
    'cards' => array(
      array(
        'icon' => get_template_directory_uri() . '/assets/img/img-consultadoria/icone9.svg',
        'title' => 'Empresas de Tecnologia',
        'description' => 'Proteção de dados confidenciais e conformidade com normas de segurança.'
      ),
      array(
        'icon' => get_template_directory_uri() . '/assets/img/img-consultadoria/icone11.svg',
        'title' => 'Saúde e Instituições Públicas',
        'description' => 'Proteção de registos médicos e backup seguro de informações críticas.'
      ),
      array(
        'icon' => get_template_directory_uri() . '/assets/img/img-consultadoria/icone10.svg',
        'title' => 'Indústria e Logística',
        'description' => 'Segurança avançada para redes operacionais e dispositivos IoT.'
      ),
      array(
        'icon' => get_template_directory_uri() . '/assets/img/img-consultadoria/icone12.svg',
        'title' => 'Setor Financeiro',
        'description' => 'Prevenção de fraudes e auditorias regulares para garantir conformidade.'
      )
    )
  ));
  ?>


  <?php
  get_template_part('template-parts/produtos-features-section', null, array(
    'title' => 'Funcionalidades de segurança que protegem todos os aspetos do seu negócio',
    'description' => 'As nossas soluções de cibersegurança aliam inovação tecnológica a uma abordagem prática, garantindo a proteção de dados e sistemas críticos.',
    'col1_title' => 'Funcionalidade',
    'col2_title' => 'Descrição',
    'col1_items' => [
      'Firewalls de Próxima Geração',
      'Antivírus Empresarial',
      'Backup Automático e Recuperação Rápida',
      'Gestão Segura de Acessos',
      'Monitorização Contínua de Ameaças',
      'Auditorias de Cibersegurança'
    ],
    'col2_items' => [
      'Filtragem de tráfego e bloqueio avançado de ataques em tempo real.',
      'Proteção contra malware, ransomware e ameaças zero-day.',
      'Cópias de segurança automáticas e recuperação eficiente em caso de incidentes.',
      'Autenticação multifator (2FA) e gestão avançada de privilégios.',
      'Sistemas inteligentes de deteção de ameaças com alertas em tempo real.',
      'Avaliações regulares para identificar e corrigir vulnerabilidades.'
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

  <!-- Companies Section -->
  <section class="companies-section">
    <div class="container">
      <div class="companies-content-centered">
        <div class="company-logos-strip">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-servicos/imagelogo.png" alt="Company logos strip">
        </div>
      </div>
    </div>
  </section>
  <?php
  get_template_part('template-parts/consultadoria-complementary-section', null, [
    'title' => 'Soluções complementares para maximizar a segurança',
    'services' => [
      [
        'title' => 'Redes Estruturadas & Computing',
        'description' => '',
        'url' => '/pagina-redes-e-computing/'
      ],
      [
        'title' => 'Software de Backup e Recuperação',
        'description' => '',
        'url' => '/pagina-faturacao/'
      ],
      [
        'title' => 'Gestão de Filas de Espera',
        'description' => '',
        'url' => '/pagina-gestao-fila-de-espera/'
      ]
    ],
    'images' => [
      [
        'src' => get_template_directory_uri() . '/assets/img/img-servicos/image5.png',
        'alt' => 'Escritório com computadores'
      ],
      [
        'src' => get_template_directory_uri() . '/assets/img/img-servicos/image6.png',
        'alt' => 'Infraestrutura de servidores'
      ],
      [
        'src' => get_template_directory_uri() . '/assets/img/img-servicos/image7.png',
        'alt' => 'Pessoa a usar sistema de pagamento'
      ]
    ]
  ]);
  ?>

<?php
get_template_part('template-parts/produtos-doubt-section', null, array(
  'title' => 'Esclareça todas as suas dúvidas sobre as soluções de cibersegurança',
  'title_centered' => false,
  'image' => get_template_directory_uri() . '/assets/img/img-servicos/image8.png',
  'faqs' => array(
    array(
      'question' => 'As soluções são adequadas para pequenas empresas?',
      'answer' => 'Sim, personalizamos soluções para empresas de qualquer dimensão.'
    ),
    array(
      'question' => 'É possível personalizar capas com o logótipo da empresa?',
      'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ),
    array(
      'question' => 'Quais são os tamanhos compatíveis com os equipamentos?',
      'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    ),
    array(
      'question' => 'A Dualinfor disponibiliza suporte técnico?',
      'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.'
    )
  )
));
?>

<?php
get_template_part('template-parts/formulario-section', null, array(
  'title' => 'Peça já o seu diagnóstico de segurança',
  'paragraphs' => array(
    'Quer saber como proteger os seus sistemas? Preencha o formulário e receba uma análise personalizada.',
    '<em>Garantimos total privacidade e uma resposta no prazo máximo de 24 horas úteis.</em>'
  ),
  'button_text' => 'Pedir Diagnóstico',
  'fields_overrides' => array(
    'area' => array(
      'label' => 'Volume Médio',
      'placeholder' => '', // Pode ser adicionado se quiseres um texto de exemplo
      'type' => 'number'
    )
  )
));
?>

</main>

<?php get_footer(); ?>