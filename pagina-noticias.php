<?php
/*
Template Name: Página Notícias
*/

get_header();
?>

<main>
  <!-- Hero Banner -->
  <section class="hero-banner">
    <div class="container">
      <div class="hero-slide active">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-noticias/image1.png" alt="Sistema de videovigilância">
        <div class="hero-content">
          <h1>Como a videovigilância reduz custos operacionais</h1>
        </div>
      </div>
      <div class="hero-dots">
        <span class="dot active"></span>
        <span class="dot"></span>
        <span class="dot"></span>
      </div>
    </div>
  </section>

  <!-- Artigos Recentes -->
  <section class="recent-articles">
    <div class="container">
      <h2>Artigos recentes</h2>
      <div class="articles-grid">
        <article class="article-card large">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-noticias/image2.png" alt="Infraestrutura de rede">
          <div class="article-content">
            <div class="article-meta">
              <span class="author">Maria Clara</span>
              <span class="date">1 jan 2023</span>
            </div>
            <h3>Redes estruturadas: a base para empresas mais eficientes</h3>
            <p>A conectividade é essencial para a produtividade. Como garantir uma infraestrutura de redes segura, escalável e preparada para o futuro?</p>
            <div class="article-tags">
              <span class="tag categoria-x">Categoria X</span>
              <span class="tag categoria-z">Categoria Z</span>
            </div>
            <button class="read-more">
              <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                <path d="M7 17L17 7M17 7H7M17 7V17" />
              </svg>
            </button>
          </div>
        </article>

        <div class="small-articles">
          <article class="article-card small">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-noticias/image3.png" alt="Escudo de cibersegurança">
            <div class="article-content">
              <div class="article-meta">
                <span class="author">Phoenix Baker</span>
                <span class="date">1 jan 2023</span>
              </div>
              <h3>Cibersegurança em 2024: como proteger os teus dados</h3>
              <p>Os ataques cibernéticos estão cada vez mais sofisticados. Que medidas podem as empresas adotar...</p>
              <div class="article-tags">
                <span class="tag categoria-x">Categoria X</span>
                <span class="tag categoria-z">Categoria Z</span>
              </div>
            </div>
          </article>

          <article class="article-card small">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-noticias/image4.png" alt="Interface digital">
            <div class="article-content">
              <div class="article-meta">
                <span class="author">Phoenix Baker</span>
                <span class="date">1 jan 2023</span>
              </div>
              <h3>Gestão de numerário: menos perdas, mais segurança</h3>
              <p>O manuseamento do dinheiro é um desafio no retalho e na restauração. Como as gavetas inteligentes...</p>
              <div class="article-tags">
                <span class="tag categoria-x">Categoria X</span>
                <span class="tag categoria-z">Categoria Z</span>
              </div>
            </div>
          </article>
        </div>
      </div>

      <article class="article-card featured">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-noticias/image5.png" alt="Impressão Sustentável">
        <div class="article-content">
          <div class="article-meta">
            <span class="author">Olivia Rhye</span>
            <span class="date">1 jan 2023</span>
          </div>
          <h3>Impressão sustentável: mais eficiência, menos custos</h3>
          <p>Reduzir desperdício e otimizar processos é possível com as soluções certas. Como as impressoras eficientes podem beneficiar as empresas?</p>
          <div class="article-tags">
            <span class="tag categoria-x">Categoria X</span>
            <span class="tag categoria-z">Categoria Z</span>
          </div>
          <a href="#" class="read-more" aria-label="Ler mais">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#9A2686" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <line x1="5" y1="12" x2="19" y2="12" />
              <polyline points="12 5 19 12 12 19" />
            </svg>
          </a>

        </div>
      </article>
    </div>
  </section>

  <!-- Todos os Artigos -->
  <section class="all-articles">
    <div class="container">
      <h2>Todos os artigos</h2>
      <div class="articles-grid-all">
        <?php for ($i = 1; $i <= 6; $i++): ?>
          <article class="article-card">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-noticias/image6.png" alt="Artigo <?php echo $i; ?>">
            <div class="article-content">
              <div class="article-meta">
                <span class="author">Alec Whitten</span>
                <span class="date">1 jan 2023</span>
              </div>
              <h3>
                <span>Título do artigo <?php echo $i; ?></span>
                <button class="read-more">
                  <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                    <path d="M7 17L17 7M17 7H7M17 7V17" />
                  </svg>
                </button>
              </h3>
              <p>Resumo do artigo em Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
            </div>
          </article>
        <?php endfor; ?>
      </div>

      <!-- Paginação -->
      <div class="pagination">
        <button class="pagination-btn prev">
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M15 18L9 12L15 6" />
          </svg>
          Anterior
        </button>
        <div class="pagination-numbers">
          <button class="pagination-number active">1</button>
          <button class="pagination-number">2</button>
          <button class="pagination-number">3</button>
          <span class="pagination-dots">...</span>
          <button class="pagination-number">8</button>
          <button class="pagination-number">9</button>
          <button class="pagination-number">10</button>
        </div>
        <button class="pagination-btn next">
          Seguinte
          <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M9 18L15 12L9 6" />
          </svg>
        </button>
      </div>
    </div>
  </section>
</main>


<?php get_footer(); ?>