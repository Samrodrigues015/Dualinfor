<?php
get_header();
?>

<main id="primary" class="site-main">
    <section class="error-404 not-found">
        <div class="page-content">
            <div class="error-404-container">

                <!-- Título principal -->
                <h1 class="page-title">Esta página não foi encontrada.</h1>

                <!-- Subtítulo explicativo -->
                <p class="error-subtitle">
                    O conteúdo que procuras pode ter sido removido, alterado
                    ou estar temporariamente indisponível.
                </p>

                <!-- Texto de apoio -->
                <p class="error-support">
                    Mas não te preocupes — estamos aqui para te ajudar a
                    encontrar o que precisas.
                </p>

                <!-- Ilustração com a imagem fornecida -->
                <div class="error-illustration">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-404/404.png"
                        alt="Ilustração de documentos perdidos ou danificados"
                        class="error-image" />
                </div>

                <!-- Seção de ações -->
                <div class="error-actions">
                    <h3>O que podes fazer:</h3>
                    <ul class="action-list">
                        <li>
                            Voltar à <a href="<?php echo site_url(); ?>">
                                página inicial
                            </a>
                        </li>
                        <li>
                            Consultar as nossas
                            <a href="<?php echo esc_url(home_url('/pagina-servicos-e-solucoes/')); ?>">
                                soluções tecnológicas
                            </a>
                        </li>
                        <li>
                            Falar directamente com a nossa
                            <a href="<?php echo esc_url(home_url('/pagina-assistencia-tecnica/')); ?>">
                                equipa de suporte
                            </a>
                        </li>
                    </ul>
                </div>

                <!-- Texto final -->
                <p class="error-footer">
                    Na Dualinfor, acreditamos que cada desafio tem solução — e esta página perdida
                    não é excepção.
                    <br>Se precisares de ajuda, estamos sempre disponíveis.
                </p>

            </div>
        </div><!-- .page-content -->
    </section><!-- .error-404 -->
</main><!-- #primary -->

<?php get_footer(); ?>