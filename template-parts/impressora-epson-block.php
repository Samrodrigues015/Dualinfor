<section class="features-impressora-section">
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    .features-impressora-section {
      max-width: 1200px;
      margin: 0 auto;
      padding: 40px 16px;
      font-family: 'Segoe UI', sans-serif;
      background-color: #f6f6f6;
      color: #1c1c1c;
      line-height: 1.6;
    }

    .features-impressora-title {
      margin-bottom: 40px;
      text-align: center;
    }

    .features-impressora-main-title {
      font-size: 2.5rem;
      font-weight: 700;
      color: #333;
      margin-bottom: 10px;
    }

    .features-impressora-scroll-table {
      display: flex;
      flex-direction: column;
      gap: 24px;
    }

    .features-impressora-scroll-wrapper {
      display: flex;
      gap: 24px;
      overflow-x: auto;
      padding-bottom: 12px;
      scroll-snap-type: x mandatory;
    }

    .features-impressora-scroll-wrapper::-webkit-scrollbar {
      height: 8px;
    }

    .features-impressora-scroll-wrapper::-webkit-scrollbar-thumb {
      background-color: #ccc;
      border-radius: 10px;
    }

    .features-impressora-column {
      flex: 0 0 80%;
      background-color: #fff;
      border-radius: 12px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
      scroll-snap-align: start;
    }

    .features-impressora-header {
      background-color: #f0e2ee;
      padding: 16px;
      font-weight: 600;
      text-align: center;
      border-radius: 12px 12px 0 0;
      font-size: 1.1rem;
    }

    .features-impressora-column.descricao .features-impressora-header {
      background-color: #d0d3e2;
    }

    .features-impressora-list {
      list-style: none;
      padding: 16px;
    }

    .features-impressora-list li {
      margin-bottom: 24px;
      font-size: 0.95rem;
      display: flex;
      align-items: flex-start;
      line-height: 1.4;
      color: #333;
      position: relative;
      padding-bottom: 12px;
      border-bottom: 1px solid #e0e0e0;
    }

    .features-impressora-list li:last-child {
      margin-bottom: 0;
      border-bottom: none;
    }

    .features-impressora-check-icon {
      display: inline-block;
      background-color: #9a2686;
      color: white;
      font-weight: bold;
      border-radius: 4px;
      padding: 2px 6px;
      font-size: 0.8rem;
      margin-right: 10px;
      min-width: 22px;
      text-align: center;
    }

    .features-impressora-description {
      font-size: 1.2rem;
      color: #444;
      max-width: 800px;
      margin: 40px auto;
      text-align: center;
    }

    .features-impressora-sector-cards {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
      gap: 20px;
      margin-top: 40px;
    }

    .features-impressora-sector-card {
      background: #f6f6f6;
      border: 2px solid #9a2686;
      border-radius: 12px;
      padding: 20px;
      box-shadow: 0 4px 8px rgba(154, 38, 134, 0.05);
      transition: 0.3s ease-in-out;
      min-height: 280px;
    }

    .features-impressora-sector-card:hover {
      transform: translateY(-4px);
      box-shadow: 0 8px 32px rgba(154, 38, 134, 0.3);
    }

    .features-impressora-sector-card h3 {
      font-size: 1.1rem;
      color: #1c1c1c;
      margin-bottom: 15px;
    }

    .features-impressora-sector-card ul {
      list-style: disc;
      padding-left: 20px;
      color: #444;
      font-size: 0.95rem;
    }

    @media (min-width: 768px) {
      .features-impressora-scroll-wrapper {
        overflow-x: hidden;
        flex-wrap: nowrap;
        justify-content: center;
      }

      .features-impressora-column {
        flex: 0 0 45%;
      }
    }
  </style>

  <div class="features-impressora-title">
    <h2 class="features-impressora-main-title">
      Como as impressoras Epson potenciam<br>a produtividade do seu negócio
    </h2>
  </div>

  <div class="features-impressora-scroll-table">
    <div class="features-impressora-scroll-wrapper">
      <div class="features-impressora-column">
        <div class="features-impressora-header">Funcionalidade</div>
        <ul class="features-impressora-list">
          <li><span class="features-impressora-check-icon">✓</span> Ecrã Tátil Intuitivo</li>
          <li><span class="features-impressora-check-icon">✓</span> Manuseamento de Papel Inteligente</li>
          <li><span class="features-impressora-check-icon">✓</span> Soluções na Cloud</li>
        </ul>
      </div>

      <div class="features-impressora-column descricao">
        <div class="features-impressora-header">Descrição</div>
        <ul class="features-impressora-list">
          <li>Interface moderna para facilitar a configuração e utilização diária.</li>
          <li>Evita erros de alimentação e reduz interrupções.</li>
          <li>Digitalize diretamente para plataformas como Google Drive, OneDrive e Dropbox.</li>
        </ul>
      </div>
    </div>
  </div>

  <p class="features-impressora-description">
    As impressoras e multifunções Epson oferecem funcionalidades avançadas, adaptadas às necessidades de setores exigentes, simplificando processos e maximizando resultados.
  </p>

  <div class="features-impressora-sector-cards">
    <div class="features-impressora-sector-card">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-impressoras/icone8.svg" alt="icone corporativo"> 
      <h3>Setor Corporativo</h3>
      <ul>
        <li>Impressões rápidas e seguras para grandes equipas.</li>
        <li>Gestão de fluxo documental centralizada.</li>
      </ul>
    </div>
    <div class="features-impressora-sector-card">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-impressoras/icone9.svg" alt="icone educacao"> 
      <h3>Educação</h3>
      <ul>
        <li>Produção de materiais didáticos e relatórios.</li>
        <li>Digitalização de documentos para partilha com alunos e professores.</li>
      </ul>
    </div>
    <div class="features-impressora-sector-card">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-impressoras/icone10.svg" alt="icone saude"> 
      <h3>Saúde</h3>
      <ul>
        <li>Impressão e digitalização de registos médicos com confidencialidade garantida.</li>
        <li>Conformidade com normas de proteção de dados.</li>
      </ul>
    </div>
    <div class="features-impressora-sector-card">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-impressoras/icone11.svg" alt="icone pequenas empresas"> 
      <h3>Pequenas Empresas e PME</h3>
      <ul>
        <li>Equipamentos compactos para espaços reduzidos.</li>
        <li>Impressões económicas com consumíveis de longa duração.</li>
      </ul>
    </div>
  </div>
</section>
