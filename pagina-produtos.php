<?php

/*
Template Name: Página Produtos
*/
get_header();
?>

<main>
  <!-- Hero Section -->
  <section class="unibind-hero">
    <div class="unibind-container">
      <div class="unibind-left-column">
        <div class="text-content">
          <h1>Unibind Peleman:<br>Apresente os seus documentos com profissionalismo e elegância</h1>
          <p>Transforme relatórios, propostas e materiais promocionais em apresentações impactantes. A
            Dualinfor garante que a sua imagem corporativa se destaque.</p>
          <div class="button-group">
            <a href="#formulario" class="btn btn-primary">
              Peça um Orçamento Personalizado
              <span class="btn-arrow">></span>
            </a>
            <a href="#formulario" class="btn btn-secondary">Fale com um Especialista Agora</a>
          </div>
        </div>
        <div class="image-bottom-left">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-produtos/books.png" alt="Notebooks and a pen on a wooden desk">
        </div>
      </div>

      <div class="unibind-right-column">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-produtos/caderno.png" alt="Close-up of a black spiral bound document" class="main-image">
        <div class="overlay-card">
          <h2>Encadernação e personalização que fazem a diferença na apresentação da sua empresa</h2>
          <div class="card-footer">
            <p>Solicite um Orçamento Personalizado</p>
            <a href="#formulario" class="icon-button">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M7 17L17 7" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                <path d="M7 7H17V17" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
              </svg>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Professional Identity Section -->
  <section class="professional-identity">
    <div class="container">
      <div class="professional-content">
        <h2>Encadernação personalizada: destaque a identidade da sua empresa com profissionalismo</h2>
        <p>Na Dualinfor, acreditamos que a apresentação faz a diferença. As soluções de encadernação e
          personalização da Unibind Peleman são ideais para destacar a sua marca e transmitir
          profissionalismo.</p>
        <div class="professional-image-showcase">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-produtos/cadernizacao.png" alt="Encadernação personalizada" />
        </div>
      </div>
    </div>
  </section>

  <?php
  get_template_part('template-parts/produtos-benefits-section', null, array(
    'title' => 'Por que optar pela Encadernação e Personalização da Dualinfor?',
    'subtitle' => 'Com tecnologia de ponta e utilização intuitiva, oferecemos soluções que valorizam a imagem da sua empresa e garantem resultados profissionais.',
    'cards' => array(
      array(
        'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/icone1.svg',
        'title' => 'Apresentação Profissional e Impactante',
        'items' => 'Relatórios e materiais com acabamentos premium para causar uma impressão duradoura.'
      ),
      array(
        'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/icone2.svg',
        'title' => 'Facilidade de Utilização',
        'items' => 'Equipamentos intuitivos para encadernações rápidas e sem esforço.'
      ),
      array(
        'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/icone3.svg',
        'title' => 'Versatilidade nos Materiais',
        'items' => 'Compatível com capas rígidas, flexíveis e opções personalizadas com logótipos e designs.'
      ),
      array(
        'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/icone4.svg',
        'title' => 'Durabilidade Garantida',
        'items' => 'Encadernações resistentes ao desgaste, ideais para documentos frequentemente manuseados.'
      ),
      array(
        'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/icone5.svg',
        'title' => 'Soluções Sustentáveis',
        'items' => 'Materiais recicláveis e práticas ambientais responsáveis para uma solução mais sustentável.'
      ),
      array(
        'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/icone6.svg',
        'title' => 'Flexibilidade de Volume',
        'items' => 'Adaptável a pequenas tiragens ou produção em massa.'
      ),
      array(
        'icon' => get_template_directory_uri() . '/assets/img/img-faturacao/icone7.svg',
        'title' => 'Suporte Técnico Especializado',
        'items' => 'Consultoria, instalação e manutenção garantidas pela equipa Dualinfor.'
      )
    ),
    'cta' => array(
      'label' => 'Peça um Orçamento Personalizado',
      'icon' => '<img src="' . get_template_directory_uri() . '/assets/img/img-faturacao/icone8.svg" alt="Ícone orçamento">'
    )
  ));
  ?>


  <?php
  get_template_part('template-parts/produtos-features-section', null, array(
    'title' => 'Tecnologia Avançada de Encadernação e Personalização',
    'description' => 'As soluções da Unibind Peleman oferecem funcionalidades inovadoras para um processo simplificado e resultados excecionais.',
    'col1_title' => 'Funcionalidade',
    'col2_title' => 'Descrição',
    'col1_items' => [
      'Processo Rápido',
      'Personalização Exclusiva',
      'Capacidade Versátil',
      'Durabilidade Superior',
      'Variedade de Estilos',
      'Soluções Plug-and-Play'
    ],
    'col2_items' => [
      'Encadernação em menos de 90 segundos, ideal para alta produtividade.',
      'Impressão de logótipos e designs diretamente na capa.',
      'Compatível com formatos A4, A5 e documentos até 340 folhas.',
      'Materiais robustos e resistentes ao uso diário.',
      'Capas rígidas, flexíveis e opções transparentes para diferentes necessidades.',
      'Equipamentos fáceis de usar, sem configurações complexas.'
    ]
  ));
  ?>


  <!-- Business Solutions Section -->
  <section class="business-solutions">
    <div class="container">
      <div class="business-header">
        <h2>Unibind Peleman: Soluções à medida de qualquer necessidade empresarial</h2>
        <p>De relatórios corporativos a materiais promocionais, as nossas soluções garantem um desempenho excecional em qualquer contexto.</p>
      </div>

      <div class="business-main-content">
        <div class="business-image-wrapper">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-produtos/business.png" alt="Two business professionals smiling and looking at a laptop.">
        </div>

        <div class="business-grid">
          <div class="business-card">
            <div class="business-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="41" height="41" viewBox="0 0 41 41" fill="none">
                <path d="M35.875 24.1568C35.875 22.3026 34.3426 20.7948 32.4583 20.7948H29.0417C27.1574 20.7948 25.625 22.3026 25.625 24.1568C22.7994 24.1568 20.5 26.4194 20.5 29.1998V35.9239C20.5 38.7043 22.7994 40.9669 25.625 40.9669H35.875C38.7006 40.9669 41 38.7043 41 35.9239V29.1998C41 26.4194 38.7006 24.1568 35.875 24.1568ZM29.0417 22.4758H32.4583C33.4013 22.4758 34.1667 23.2289 34.1667 24.1568H27.3333C27.3333 23.2289 28.0987 22.4758 29.0417 22.4758ZM25.625 25.8378H35.875C37.7593 25.8378 39.2917 27.3457 39.2917 29.1998V30.8809H22.2083V29.1998C22.2083 27.3457 23.7407 25.8378 25.625 25.8378ZM35.875 39.2859H25.625C23.7407 39.2859 22.2083 37.7781 22.2083 35.9239V32.5619H29.8958V35.0834C29.8958 35.5474 30.2785 35.9239 30.75 35.9239C31.2215 35.9239 31.6042 35.5474 31.6042 35.0834V32.5619H39.2917V35.9239C39.2917 37.7781 37.7593 39.2859 35.875 39.2859ZM17.0833 40.1264C17.0833 40.5904 16.7007 40.9669 16.2292 40.9669H7.6875C3.44913 40.9669 0 37.573 0 33.4024V8.18713C0 4.01653 3.44913 0.622559 7.6875 0.622559H19.6458C23.8842 0.622559 27.3333 4.01653 27.3333 8.18713V16.5922C27.3333 17.0562 26.9507 17.4327 26.4792 17.4327C26.0077 17.4327 25.625 17.0562 25.625 16.5922V8.18713C25.625 4.94277 22.9429 2.30357 19.6458 2.30357H7.6875C4.39042 2.30357 1.70833 4.94277 1.70833 8.18713V33.4024C1.70833 36.6467 4.39042 39.2859 7.6875 39.2859H16.2292C16.7007 39.2859 17.0833 39.6625 17.0833 40.1264ZM11.9583 23.3163C11.9583 23.7802 11.5757 24.1568 11.1042 24.1568H7.6875C7.216 24.1568 6.83333 23.7802 6.83333 23.3163C6.83333 22.8523 7.216 22.4758 7.6875 22.4758H11.1042C11.5757 22.4758 11.9583 22.8523 11.9583 23.3163ZM20.5 23.3163C20.5 23.7802 20.1173 24.1568 19.6458 24.1568H16.2292C15.7577 24.1568 15.375 23.7802 15.375 23.3163C15.375 22.8523 15.7577 22.4758 16.2292 22.4758H19.6458C20.1173 22.4758 20.5 22.8523 20.5 23.3163ZM11.9583 30.0403C11.9583 30.5043 11.5757 30.8809 11.1042 30.8809H7.6875C7.216 30.8809 6.83333 30.5043 6.83333 30.0403C6.83333 29.5764 7.216 29.1998 7.6875 29.1998H11.1042C11.5757 29.1998 11.9583 29.5764 11.9583 30.0403ZM11.9583 9.86815C11.9583 10.3321 11.5757 10.7087 11.1042 10.7087H7.6875C7.216 10.7087 6.83333 10.3321 6.83333 9.86815C6.83333 9.40419 7.216 9.02764 7.6875 9.02764H11.1042C11.5757 9.02764 11.9583 9.40419 11.9583 9.86815ZM20.5 9.86815C20.5 10.3321 20.1173 10.7087 19.6458 10.7087H16.2292C15.7577 10.7087 15.375 10.3321 15.375 9.86815C15.375 9.40419 15.7577 9.02764 16.2292 9.02764H19.6458C20.1173 9.02764 20.5 9.40419 20.5 9.86815ZM11.9583 16.5922C11.9583 17.0562 11.5757 17.4327 11.1042 17.4327H7.6875C7.216 17.4327 6.83333 17.0562 6.83333 16.5922C6.83333 16.1283 7.216 15.7517 7.6875 15.7517H11.1042C11.5757 15.7517 11.9583 16.1283 11.9583 16.5922ZM20.5 16.5922C20.5 17.0562 20.1173 17.4327 19.6458 17.4327H16.2292C15.7577 17.4327 15.375 17.0562 15.375 16.5922C15.375 16.1283 15.7577 15.7517 16.2292 15.7517H19.6458C20.1173 15.7517 20.5 16.1283 20.5 16.5922Z" fill="#9A2686" />
              </svg>
            </div>
            <h3>Empresas e Corporações</h3>
            <p>Apresente relatórios anuais, propostas e apresentações de negócios com qualidade premium.</p>
          </div>
          <div class="business-card">
            <div class="business-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="33" height="39" viewBox="0 0 33 39" fill="none">
                <path d="M25.4375 0.606445H7.5625C3.5325 0.606445 0.25 3.83646 0.25 7.80202V33.3863C0.25 36.4724 2.80125 38.9828 5.9375 38.9828H25.4375C29.4675 38.9828 32.75 35.7528 32.75 31.7872V7.80202C32.75 3.83646 29.4675 0.606445 25.4375 0.606445ZM31.125 7.80202V27.7897H8.375V2.20546H25.4375C28.5737 2.20546 31.125 4.71592 31.125 7.80202ZM1.875 7.80202C1.875 4.98775 4.00375 2.65319 6.75 2.26942V27.7897H5.9375C4.345 27.7897 2.915 28.4293 1.875 29.4687V7.80202ZM25.4375 37.3838H5.9375C3.695 37.3838 1.875 35.5929 1.875 33.3863C1.875 31.1796 3.695 29.3887 5.9375 29.3887H31.125V31.7872C31.125 34.8733 28.5737 37.3838 25.4375 37.3838ZM13.12 22.9447C13.5425 23.0886 14.0138 22.8807 14.16 22.465L15.7362 18.1956H23.5525L25.1287 22.465C25.2425 22.7848 25.5675 22.9927 25.8925 22.9927C25.99 22.9927 26.0713 22.9927 26.1688 22.9447C26.5913 22.8008 26.8025 22.3371 26.6562 21.9213L21.6675 8.39365C21.3588 7.54617 20.5625 7.00251 19.6362 7.00251C18.71 7.00251 17.93 7.54617 17.6213 8.39365L12.6325 21.9213C12.4862 22.3371 12.6975 22.8008 13.12 22.9447ZM19.1488 8.93732C19.2625 8.6335 19.5387 8.60152 19.6362 8.60152C19.7338 8.60152 20.0262 8.6335 20.14 8.93732L22.9675 16.5966H16.3375L19.165 8.93732H19.1488Z" fill="#9A2686" />
              </svg>
            </div>
            <h3>Educação</h3>
            <p>Encadernação de teses, manuais e materiais didáticos, garantindo organização e durabilidade.</p>
          </div>
          <div class="business-card">
            <div class="business-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="47" height="47" viewBox="0 0 47 47" fill="none">
                <path d="M34.2714 0.569336C33.7309 0.569336 33.2922 0.998746 33.2922 1.52784C33.2922 8.13002 28.5334 12.0714 20.5628 12.0714H6.85428C3.07463 12.0714 0 15.0811 0 18.7809V22.6149C0 24.8348 1.10648 26.8055 2.81026 28.0286L9.87604 43.4682C10.7338 45.3564 12.651 46.5776 14.7641 46.5776C16.415 46.5776 17.9386 45.7686 18.8395 44.4113C19.7384 43.056 19.8755 41.3633 19.2018 39.8776L14.2569 29.3245H20.5648C28.5354 29.3245 33.2942 33.2658 33.2942 39.868C33.2942 40.3971 33.7329 40.8265 34.2734 40.8265C34.8139 40.8265 35.2525 40.3971 35.2525 39.868V1.52784C35.2525 0.998746 34.8119 0.569336 34.2714 0.569336ZM17.4157 40.6655C17.8231 41.5607 17.7428 42.5442 17.1984 43.3666C16.652 44.189 15.7668 44.6606 14.7641 44.6606C13.4246 44.6606 12.2085 43.888 11.664 42.688L5.48538 29.1903C5.92797 29.2785 6.38623 29.3245 6.85428 29.3245H12.1007L17.4157 40.6655ZM33.2922 32.9706C30.9089 29.4318 26.4654 27.4075 20.5628 27.4075H6.85428C4.15565 27.4075 1.95837 25.2585 1.95837 22.6149V18.7809C1.95837 16.1374 4.15565 13.9884 6.85428 13.9884H20.5628C26.4654 13.9884 30.9089 11.9621 33.2922 8.42524V32.9706ZM46.897 30.7105C46.7247 31.0459 46.378 31.2396 46.0216 31.2396C45.8747 31.2396 45.7259 31.207 45.5829 31.138L41.6662 29.221C41.1825 28.9832 40.9866 28.4081 41.2275 27.9346C41.4723 27.4611 42.0579 27.2714 42.5416 27.5052L46.4583 29.4222C46.942 29.66 47.1379 30.237 46.897 30.7105ZM41.2275 13.4574C40.9866 12.9839 41.1825 12.4088 41.6662 12.1711L45.5829 10.2541C46.0666 10.0183 46.6542 10.21 46.897 10.6835C47.1379 11.157 46.942 11.7321 46.4583 11.9698L42.5416 13.8868C42.4006 13.9558 42.2517 13.9884 42.1029 13.9884C41.7445 13.9884 41.3999 13.7909 41.2275 13.4574ZM41.1237 20.696C41.1237 20.1669 41.5624 19.7375 42.1029 19.7375H46.0196C46.5602 19.7375 46.9988 20.1669 46.9988 20.696C46.9988 21.2251 46.5602 21.6545 46.0196 21.6545H42.1029C41.5624 21.6545 41.1237 21.2251 41.1237 20.696Z" fill="#9A2686" />
              </svg>
            </div>
            <h3>Marketing e Publicidade</h3>
            <p>Personalizações que destacam a sua marca em catálogos, brochuras e materiais promocionais.</p>
          </div>
          <div class="business-card">
            <div class="business-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                <g clip-path="url(#clip0_660_4270)">
                  <path d="M33.3333 10H36.6667C38.505 10 40 8.505 40 6.66667V3.33333C40 1.495 38.505 0 36.6667 0H33.3333C31.495 0 30 1.495 30 3.33333H10C10 1.495 8.505 0 6.66667 0H3.33333C1.495 0 0 1.495 0 3.33333V6.66667C0 8.505 1.495 10 3.33333 10V30C1.495 30 0 31.495 0 33.3333V36.6667C0 38.505 1.495 40 3.33333 40H6.66667C8.505 40 10 38.505 10 36.6667H30C30 38.505 31.495 40 33.3333 40H36.6667C38.505 40 40 38.505 40 36.6667V33.3333C40 31.495 38.505 30 36.6667 30H33.3333C32.9383 30 32.56 30.07 32.2083 30.1967L25.855 23.8433C26.36 23.2583 26.6667 22.4983 26.6667 21.6667V18.3333C26.6667 17.5017 26.36 16.7417 25.855 16.1567L32.2083 9.80333C32.56 9.93 32.9383 10 33.3333 10ZM31.6667 3.33333C31.6667 2.415 32.415 1.66667 33.3333 1.66667H36.6667C37.585 1.66667 38.3333 2.415 38.3333 3.33333V6.66667C38.3333 7.585 37.585 8.33333 36.6667 8.33333H33.3333C32.415 8.33333 31.6667 7.585 31.6667 6.66667V3.33333ZM1.66667 6.66667V3.33333C1.66667 2.415 2.415 1.66667 3.33333 1.66667H6.66667C7.585 1.66667 8.33333 2.415 8.33333 3.33333V6.66667C8.33333 7.585 7.585 8.33333 6.66667 8.33333H3.33333C2.415 8.33333 1.66667 7.585 1.66667 6.66667ZM8.33333 36.6667C8.33333 37.585 7.585 38.3333 6.66667 38.3333H3.33333C2.415 38.3333 1.66667 37.585 1.66667 36.6667V33.3333C1.66667 32.415 2.415 31.6667 3.33333 31.6667H6.66667C7.585 31.6667 8.33333 32.415 8.33333 33.3333V36.6667ZM10 35V33.3333C10 31.495 8.505 30 6.66667 30H5V10H6.66667C8.505 10 10 8.505 10 6.66667V5H30V6.66667C30 7.49833 30.3067 8.25833 30.8117 8.84333L24.4583 15.1967C24.1067 15.07 23.7283 15 23.3333 15H20C18.1617 15 16.6667 16.495 16.6667 18.3333V21.6667C16.6667 23.505 18.1617 25 20 25H23.3333C23.7283 25 24.1067 24.93 24.4583 24.8033L30.8117 31.1567C30.3067 31.7417 30 32.5017 30 33.3333V35H10ZM25 18.3333V21.6667C25 22.585 24.2517 23.3333 23.3333 23.3333H20C19.0817 23.3333 18.3333 22.585 18.3333 21.6667V18.3333C18.3333 17.415 19.0817 16.6667 20 16.6667H23.3333C24.2517 16.6667 25 17.415 25 18.3333ZM36.6667 31.6667C37.585 31.6667 38.3333 32.415 38.3333 33.3333V36.6667C38.3333 37.585 37.585 38.3333 36.6667 38.3333H33.3333C32.415 38.3333 31.6667 37.585 31.6667 36.6667V33.3333C31.6667 32.415 32.415 31.6667 33.3333 31.6667H36.6667Z" fill="#9A2686" />
                </g>
                <defs>
                  <clipPath id="clip0_660_4270">
                    <rect width="40" height="40" fill="white" />
                  </clipPath>
                </defs>
              </svg>
            </div>
            <h3>Design e Criatividade</h3>
            <p>Portfólios e apresentações criativas com acabamentos profissionais que impressionam.</p>
          </div>
        </div>
      </div>

    </div>
  </section>

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
  'title' => 'Soluções que complementam a Encadernação e Personalização',
  'image' => get_template_directory_uri() . '/assets/img/img-produtos/impressora.png',
  'image_position' => 'right',
  'cta_text' => 'Peça um Orçamento Personalizado',
  'cta_color' => '#293992',
  'button_text' => 'Peça um Orçamento Personalizado',
  'services' => array(
    array(
      'title' => 'Impressoras e Multifunções',
      'description' => 'Impressão de documentos de alta qualidade para encadernação.',
      'url' => '/pagina-impressoras-e-multifuncoes/'
    ),
    array(
      'title' => 'Soluções Documentais e MPS',
      'description' => 'Otimização Inteligente de Processos Documentais',
      'url' => '/pagina-solucoes-documentais/'
    ),
    array(
      'title' => 'Design e Impressão Criativa',
      'description' => 'Transforme ideias em materiais impactantes.',
      'url' => '/pagina-design-e-imagem/'
    ),
  )
));
?>


<?php
get_template_part('template-parts/formulario-section', null, array(
  'title' => 'Peça já o seu orçamento personalizado',
  'paragraphs' => array(
    'Quer saber como as soluções de encadernação e personalização podem destacar a sua empresa?',
    'Preencha o formulário e receba uma proposta à sua medida.',
    '<em>Garantimos total privacidade e uma resposta no prazo máximo de 24 horas úteis.</em>'
  ),
  'fields_overrides' => array(
    'area' => array(
      'label' => 'Volume Médio de Encadernação',
      'placeholder' => '',
      'type' => 'number'
    )
  )
));
?>


<?php
get_template_part('template-parts/produtos-doubt-section', null, array(
  'title' => 'Esclareça todas as suas dúvidas sobre as soluções da Unibind Peleman',
  'title_centered' => false, 
  'image' => get_template_directory_uri() . '/assets/img/img-produtos/pessoa-com-telemovel.png',
  'faqs' => array(
    array(
      'question' => 'As soluções são fáceis de usar?',
      'answer' => 'Sim, são intuitivas e não requerem formação técnica.'
    ),
    array(
      'question' => 'É possível personalizar capas com o logótipo da empresa?',
      'answer' => 'Sim, com logótipos e designs exclusivos.'
    ),
    array(
      'question' => 'Quais são os tamanhos compatíveis com os equipamentos?',
      'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer ut euismod orci.'
    ),
    array(
      'question' => 'A Dualinfor disponibiliza suporte técnico?',
      'answer' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed non risus.'
    ),
  )
));
?>

</main>

<?php
get_footer();
?>