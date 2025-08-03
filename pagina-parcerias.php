<?php

/**
 * Template Name: Parceria Lexmark
 * Caminho das imagens: /assets/img/img-parcerias/
 */
get_header();
?>

<!-- Hero Section -->
<section class="parceria-hero">
  <div class="section-container-parcerias">
    <!-- Top office image -->
    <div class="section-top-image">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-parcerias/image1.png" alt="Ambiente de escritório moderno com profissionais trabalhando" />
    </div>

    <!-- Main content area -->
    <div class="section-content-wrapper">
      <div class="section-text-content">
        <h1 class="section-main-title">Lexmark e Dualinfor:</h1>
        <h2 class="section-subtitle-parcerias">Impressão empresarial eficiente e inovadora</h2>
        <p class="section-description">
          Soluções avançadas de impressão e multifunções para otimizar os fluxos de trabalho e reduzir os custos operacionais.
        </p>
        <a href="/pagina-servicos-e-solucoes/" class="section-cta-button">
          Explorar Soluções Lexmark com a Dualinfor
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-parcerias/iconeseta.svg" alt="">
        </a>
      </div>

      <div class="section-printer-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-parcerias/image2.png" alt="Impressora multifuncional profissional Lexmark" />
      </div>
    </div>
  </div>
</section>

<!-- Partnership Section -->
<section class="partnership-section">
  <div class="container">
    <div class="partnership-content">
      <div class="partnership-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-parcerias/image3.png">
      </div>
      <div class="partnership-text">
        <h2>Uma parceria para maximizar a eficiência e a qualidade de impressão</h2>
        <p>A Dualinfor é parceira oficial da Lexmark, uma marca de referência global em impressoras e soluções multifuncionais. Desde o primeiro ano da parceria, trabalhamos juntos para fornecer aos nossos clientes equipamentos inovadores que asseguram qualidade de impressão, integração otimizada em ambientes empresariais e máxima eficiência operacional.</p>
        <p>As soluções Lexmark são ideais para empresas que pretendem reduzir custos, otimizar fluxos de trabalho e garantir segurança na gestão documental. A Dualinfor não só distribui os equipamentos, como também disponibiliza suporte técnico especializado e soluções personalizadas para cada negócio.</p>
      </div>
    </div>
  </div>
</section>

<!-- Features Section -->
<section class="features-section">
  <div class="container">
    <div class="features-grid">
      <div class="feature-card">
        <div class="feature-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-parcerias/image4.png" alt="High performance printer">
        </div>
        <div class="feature-content">
          <a href="/pagina-impressoras-e-multifuncoes/">Impressoras e multifuncionais de alta performance</a>
        </div>
      </div>
      <div class="feature-card">
        <div class="feature-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-parcerias/image5.png" alt="Office productivity equipment">
        </div>
        <div class="feature-content">
          <a href="/pagina-gestao-fila-de-espera/">Redução de custos operacionais e aumento da produtividade</a>
        </div>
      </div>
      <div class="feature-card">
        <div class="feature-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-parcerias/image6.png" alt="Technical support team">
        </div>
        <div class="feature-content">
          <a href="/pagina-assistencia-tecnica/">Suporte técnico especializado e soluções empresariais personalizadas</a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Solutions Section -->
<section class="solutions-lexmark-section">
  <div class="container">
    <div class="solutions-content">
      <div class="solutions-text">
        <h2>Soluções Lexmark disponíveis na Dualinfor</h2>
        <p>A tecnologia Lexmark foi desenvolvida para oferecer impressão inteligente, segura e sustentável. A Dualinfor disponibiliza estas soluções para apoiar as empresas na redução de custos, no aumento da eficiência e na otimização da gestão documental.</p>

        <div class="solution-item">
          <h3>Impressoras e Multifuncionais Empresariais</h3>
          <p>Equipamentos de alto desempenho, robustos e eficientes.</p>
        </div>

        <div class="solution-item">
          <h3>Software de Gestão de Impressão</h3>
          <p>Ferramentas avançadas para monitorização, controlo de custos e segurança documental.</p>
        </div>

        <div class="solution-item">
          <h3>Soluções de Impressão Sustentável</h3>
          <p>Redução do consumo de papel e energia, sem comprometer a produtividade e eficiência.</p>
        </div>
      </div>
      <div class="solutions-image-container">
        <div class="solutions-image">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-parcerias/image7.png" alt="Mobile app controlling Lexmark printer">
          <div class="cta-box-overlay">
            <div class="cta-arrow">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <line x1="7" y1="17" x2="17" y2="7"></line>
                <polyline points="7,7 17,7 17,17"></polyline>
              </svg>
            </div>
            <p><strong>Explore as Soluções Lexmark Disponíveis!</strong></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_template_part('template-parts/testemunhos-section', null, array(
  'title' => 'Soluções de impressão fiáveis, resultados comprovados',
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
<!-- Statistics Section -->
<section class="statistics-lexmark-section">
  <div class="container">
   <div class="statistics-content">
    <div class="statistics-images-left">
      <div class="stat-image-top">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-parcerias/image8.png" alt="Person operating Lexmark printer with touchscreen">
      </div>
      <div class="stat-image-bottom">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-parcerias/image9.png" alt="Person using Lexmark multifunction printer with documents">
      </div>
    </div>

    <div class="stats-cards-right">
      <div class="stat-card purple">
        <div class="stat-number">+500</div>
        <div class="stat-text">equipamentos</div>
        <div class="stat-subtext">Lexmark instalados em<br>empresas de referência.</div>
      </div>

      <div class="stat-card purple">
        <div class="stat-number">Redução<br>de até 30%</div>
        <div class="stat-subtext">nos custos de impressão.</div>
      </div>

      <div class="stat-card purple">
        <div class="stat-number">Parceria sólida<br>há X anos</div>
        <div class="stat-subtext">garantindo suporte<br>especializado e inovação<br>constante.</div>
      </div>
    </div>
   </div>
  </div>
</section>

<!-- About Lexmark Section -->
<section class="about-lexmark-section">
  <div class="container">
    <div class="about-content">
      <div class="about-text">
        <h2>Sabe mais sobre a Lexmark</h2>
        <p>Como parceiro oficial da <strong>Lexmark</strong> em Portugal, a <strong>Dualinfor</strong> assegura o acesso às <strong>melhores soluções de impressão e gestão documental do mercado</strong>.</p>
        <p>Visite o site oficial da Lexmark para saber mais sobre a marca e os seus produtos inovadores.</p>
        <button class="btn-lexmark-secondary">Visitar o Site da Lexmark</button>
      </div>
      <div class="about-image">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-parcerias/image10.png" alt="Modern office workspace">
      </div>
    </div>
  </div>
</section>

<?php
get_template_part('template-parts/formulario-section', null, array(
  'title' => 'Quer melhorar a impressão do seu negócio?',
  'paragraphs' => array(
    'Entre em contacto connosco para saber mais sobre as soluções Lexmark e como a Dualinfor pode ajudar a sua empresa a reduzir custos, aumentar a eficiência e otimizar os fluxos de impressão.',
    '<em>Garantimos total privacidade e uma resposta no prazo máximo de 24 horas úteis.</em>'
  ),
  'fields_overrides' => array(
    'area' => array(
      'label' => 'Empresa',
      'placeholder' => '',
      'type' => 'text'
    )
  )
));
?>

<?php get_footer(); ?>