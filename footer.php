<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dualinfor_Theme
 */
?>

<footer class="dualinfor-footer">
  <div class="container">
    <!-- Logo and Social Media -->
    <div class="logo-social">
      <div class="logo">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-header/logofooter.png" alt="Dualinfor Logo" width="200" height="50">
      </div>
      <div class="social-icons">
        <a href="#" aria-label="Instagram"><i class="fa-brands fa-instagram"></i></a>
        <a href="#" aria-label="LinkedIn"><i class="fa-brands fa-linkedin-in"></i></a>
        <a href="#" aria-label="YouTube"><i class="fa-brands fa-youtube"></i></a>
        <a href="#" aria-label="Facebook"><i class="fa-brands fa-facebook-f"></i></a>
      </div>
    </div>

    <!-- Locations -->
    <div class="locations-grid">
      <div class="location">
        <h3>Lisboa</h3>
        <p>Aziganha da Cidade, nº 60</p>
        <p class="mb-4">1750-065 Lisboa</p>
        <p>(+351) 218 161 360</p>
      </div>

      <div class="location">
        <h3>Porto</h3>
        <p>Rua das Doze Casas 331</p>
        <p class="mb-4">400-448 Porto</p>
        <p>(+351) 226 061 640</p>
      </div>

      <div class="location">
        <h3>Faro</h3>
        <p>Praça Alexandre Herculano</p>
        <p class="mb-4">nº7 8000-159 Faro</p>
        <p>(+351) 289 805 888</p>
        <p class="note">*Chamada para a rede fixa Nacional</p>
      </div>

      <div class="location">
        <h3>Mafra</h3>
        <p>Rua Quinta do Gervásio,</p>
        <p class="mb-4">nº1 2640-471 Mafra</p>
        <p>(+351) 261 813 830</p>
      </div>

      <div class="location">
        <h3>Horário</h3>
        <p>Segunda a Sexta</p>
        <p>9h – 13h / 14h – 18h</p>
      </div>
    </div>

    <!-- Navigation Sections -->
    <div class="nav-sections">
      <a href="<?php echo site_url('/pagina-produtos'); ?>" class="nav-section"><h3>Produtos</h3></a>
      <a href="<?php echo site_url('/pagina-servicos-e-solucoes'); ?>" class="nav-section"><h3>Serviços e Soluções</h3></a>
      <a href="<?php echo site_url('/pagina-sobre-nos'); ?>" class="nav-section"><h3>Sobre Nós</h3></a>
      <a href="<?php echo site_url('/pagina-noticias'); ?>" class="nav-section"><h3>Notícias</h3></a>
      <a href="<?php echo site_url('/pagina-assistencia-tecnica'); ?>" class="nav-section"><h3>Suporte Técnico</h3></a>
    </div>

    <!-- Divider (only visible on mobile) -->
    <div class="footer-divider"></div>

    <!-- Legal Links -->
    <div class="legal-links">
      <a href="#">Livro de Reclamações</a>
      <span class="separator">|</span>
      <a href="#">Política de Privacidade e Cookies</a>
      <span class="separator">|</span>
      <a href="#">Política Ambiental</a>
      <span class="separator">|</span>
      <a href="#">Legislação</a>
      <span class="separator">|</span>
      <a href="#">Direitos Dados Pessoais</a>
      <span class="separator">|</span>
      <a href="#">Canal da Denúncia</a>
    </div>

    <!-- Copyright -->
    <div class="copyright">
      Copyright © <?php echo date('Y'); ?> Dualinfor
    </div>
  </div>
</footer>

<?php wp_footer(); ?>
</div><!-- fecha #page -->
</body>
</html>
