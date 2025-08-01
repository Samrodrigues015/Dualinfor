<?php
/* Template Name: Página Home */
get_header();
?>

<main>
    <!-- Hero Section -->
    <section class="hero" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/img-home/image1.png');">
        <div class="container">
            <div class="hero-content">
                <div class="hero-text">
                    <h1>A solução tecnológica de que o seu negócio precisa</h1>
                    <p>Desde 1998, oferecemos soluções personalizadas em impressão e gestão de numerário, cibersegurança e muito mais. Descubra como podemos ser a extensão tecnológica do seu sucesso.</p>
                    <div class="hero-buttons">
                        <a href="#formulario" class="btn-primary">Explorar Soluções</a>
                        <a href="#formulario" class="btn-secondary">Fale com um Especialista</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Section with Video -->
    <section class="solutions-intro">
        <div class="container">
            <div class="solutions-content">
                <h2>Soluções tecnológicas que simplificam e impulsionam o seu negócio</h2>
                <p>Facilitamos a gestão e impulsionamos o crescimento do seu negócio com soluções tecnológicas para todos, segurança, inovação e muito mais. Descubra como podemos ajudar.</p>
                <div class="solutions-buttons">
                    <a href="#formulario" class="btn-primary">Explorar Soluções</a>
                    <a href="#formulario" class="btn-secondary">Fale com um Especialista</a>
                </div>
            </div>

            <!-- Video Container -->
            <div class="video-container">
                <div class="video-placeholder">
                    <div class="play-button">
                        <svg width="60" height="60" viewBox="0 0 24 24" fill="white">
                            <polygon points="5,3 19,12 5,21"></polygon>
                        </svg>
                    </div>
                    <div class="video-overlay">DINAMISMO</div>
                </div>
            </div>
        </div>
    </section>

    <!-- Solutions Grid -->
    <section class="solutions-grid-section">
        <div class="container">
            <div class="section-header-home">
                <span class="section-tag">SOLUÇÕES</span>
                <h2>As soluções certas para superar os desafios do seu negócio</h2>
                <p>Na Dualinfor, criamos soluções tecnológicas integradas que geram inovação, eficiência e segurança. Descubra aqui os nossos principais produtos e serviços.</p>
            </div>

            <div class="solutions-grid">
                <div class="solution-card">
                    <div class="solution-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/card1.png" alt="Software e Faturação P.O.S">
                    </div>
                    <div class="solution-content">
                        <h3>Software e Faturação e P.O.S</h3>
                        <p>Gerencie vendas, relatórios e inventário numa plataforma intuitiva e fácil de usar.</p>
                        <a href="#" class="solution-link">Explorar Software POS</a>
                    </div>
                </div>

                <div class="solution-card">
                    <div class="solution-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/card2.png" alt="Gaveta Inteligente de Dinheiro">
                    </div>
                    <div class="solution-content">
                        <h3>Gaveta Inteligente de Dinheiro</h3>
                        <p>Automatize e proteja a gestão de numerário com eficiência e segurança.</p>
                        <a href="#" class="solution-link">Explorar Gaveta Inteligente de Dinheiro</a>
                    </div>
                </div>

                <div class="solution-card">
                    <div class="solution-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/card3.png" alt="Impressoras e Multifunções">
                    </div>
                    <div class="solution-content">
                        <h3>Impressoras e Multifunções</h3>
                        <p>Equipamentos fiáveis e modernos para impressão de alta qualidade, redução de custos e integração com os seus sistemas.</p>
                        <a href="#" class="solution-link">Explorar Soluções de Impressão</a>
                    </div>
                </div>

                <div class="solution-card">
                    <div class="solution-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/card4.png" alt="Redes Estruturadas & Computing">
                    </div>
                    <div class="solution-content">
                        <h3>Redes Estruturadas & Computing</h3>
                        <p>Infraestruturas de TI robustas que garantem conectividade segura e suportam o crescimento do seu negócio.</p>
                        <a href="#" class="solution-link">Explorar Redes Estruturadas</a>
                    </div>
                </div>

                <div class="solution-card">
                    <div class="solution-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/card5.png" alt="Cibersegurança">
                    </div>
                    <div class="solution-content">
                        <h3>Cibersegurança</h3>
                        <p>Proteja os seus sistemas e dados contra ciberameaças com soluções avançadas.</p>
                        <a href="#" class="solution-link">Explorar Soluções de Cibersegurança</a>
                    </div>
                </div>

                <div class="solution-card">
                    <div class="solution-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/card6.png" alt="Videovigilância">
                    </div>
                    <div class="solution-content">
                        <h3>Videovigilância</h3>
                        <p>Soluções avançadas de monitorização e segurança para proteger o seu negócio.</p>
                        <a href="#" class="solution-link">Explorar Videovigilância</a>
                    </div>
                </div>

                <div class="solution-card">
                    <div class="solution-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/card7.png" alt="Soluções Documentais">
                    </div>
                    <div class="solution-content">
                        <h3>Soluções Documentais</h3>
                        <p>Gestão otimizada de documentos e impressão, com foco na produtividade e sustentabilidade.</p>
                        <a href="#" class="solution-link">Explorar Soluções Documentais</a>
                    </div>
                </div>

                <div class="solution-card cta-card">
                    <div class="solution-image cta-image">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/card8.png" alt="Solicite um Orçamento Personalizado">
                    </div>
                    <div class="cta-content">
                        <h3>Solicite um Orçamento Personalizado</h3>
                        <div class="cta-arrow">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="7" y1="17" x2="17" y2="7"></line>
                                <polyline points="7,7 17,7 17,17"></polyline>
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php
    get_template_part('template-parts/testemunhos-section', null, array(
        'title' => 'Como as nossas soluções transformaram empresas em Portugal',
        'subtitle' => 'Descubra histórias reais de empresas que cresceram e modernizaram os seus processos com o apoio da Dualinfor.',
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
    <!-- Companies Section -->
    <section class="companies-section">
        <div class="container">
            <div class="companies-content">
                <div class="companies-left">
                    <h3>Empresas que já confiam na Dualinfor</h3>
                    <div class="company-logos">
                        <a href="#" class="company-logo-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/grupo.png" alt="GARLAND, thyssenkrupp, Ciências ULisboa">
                        </a>
                    </div>
                </div>
                <div class="companies-right">
                    <div class="companies-right">
                        <a href="#" class="handshake-link">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/maos.png" alt="Business handshake">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Partners Section -->
    <section class="partners-section">
        <div class="container">
            <div class="partners-content">
                <div class="partners-left">
                    <a href="#" class="building-link">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/predios.png" alt="Modern buildings">
                    </a>
                </div>
                <div class="partners-right">
                    <h3>Trabalhamos com os melhores para oferecer o melhor</h3>
                    <div class="partner-logos-grid">
                        <div class="partner-row">
                            <a href="#" class="partner-logo-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/epson.png" alt="Epson">
                            </a>
                            <a href="#" class="partner-logo-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/lexmark.png" alt="Lexmark">
                            </a>
                            <a href="#" class="partner-logo-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/papercut.png" alt="PaperCut">
                            </a>
                        </div>
                        <div class="partner-row">
                            <a href="#" class="partner-logo-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/philips.png" alt="Philips">
                            </a>
                            <a href="#" class="partner-logo-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/samsung.png" alt="Samsung">
                            </a>
                            <a href="#" class="partner-logo-link">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/traulux.png" alt="Traulux">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="stats-section">
        <div class="container">
            <a href="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-6Frnpeg4VmKVRIPUslEHh4QyoU6VAN.png" target="_blank" class="stats-image-link">
                <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/image-6Frnpeg4VmKVRIPUslEHh4QyoU6VAN.png" alt="Dualinfor Stats" class="stats-reference-image">
            </a>
            <div class="stats-content">
                <div class="stats-left">
                    <div class="stats-top-row">
                        <div class="stat-box blue">
                            <div class="stat-number">+12.000</div>
                            <div class="stat-label">equipamentos instalados</div>
                        </div>
                        <div class="stat-box purple">
                            <div class="stat-number">+25 anos</div>
                            <div class="stat-label">de experiência</div>
                        </div>
                    </div>
                    <div class="iso-certifications">
                        <div class="iso-badge">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/iso-9001-91aF9kuyd0Vmkia7F7325Fu8tm9Bqj.png" alt="ISO 9001" class="iso-logo">
                        </div>
                        <div class="iso-badge">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/iso-9001%20%281%29-2coPODjVQceEOajrC8pMcUNFOkWQqg.png" alt="ISO 14001" class="iso-logo">
                        </div>
                        <div class="iso-badge">
                            <img src="https://hebbkx1anhila5yf.public.blob.vercel-storage.com/20-XfQ9eWDIrm5uCbKXZweq3J8j7jeghJ.png" alt="ISO 27001" class="iso-logo">
                        </div>
                    </div>
                </div>
                <div class="stats-right">
                    <h3>Dualinfor: +25 anos de experiência e inovação</h3>
                    <p>Desde 1998, ajudamos empresas a superar desafios tecnológicos com soluções fiáveis e personalizadas. Com uma equipa experiente e parcerias estratégicas, garantimos resultados que fazem a diferença.</p>
                    <button href="/sobre-nos" class="btn-stats">Saiba Mais Sobre Nós</button>
                </div>
            </div>
        </div>
    </section>

    <?php
    get_template_part('template-parts/formulario-section', null, array(
        'title' => 'Pronto para transformar o seu negócio? Fale connosco!',
        'paragraphs' => array(
            'Na Dualinfor, estamos ao seu lado em cada etapa da transformação tecnológica. Preencha o formulário ou visite-nos nas nossas localizações.',
        ),
        'fields_overrides' => array(
            'area' => array(
                'label' => 'Áreas de Interesse',
                'placeholder' => '',
                'type' => 'text'
            )
        )
    ));
    ?>
    <!-- Blog Section -->
    <section class="blog-section">
        <div class="container">
            <div class="blog-header">
                <h2>Dicas e tendências em soluções tecnológicas</h2>
                <p>Mantenha-se atualizado com conteúdos que ajudam a sua empresa a crescer de forma inteligente e segura.</p>
            </div>
            <div class="blog-grid">
                <article class="blog-card">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/blog1.png" target="_blank" class="blog-image-link">
                        <div class="blog-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/blog1.png" alt="Cybersecurity - Padlock representing digital security">
                        </div>
                    </a>
                    <div class="blog-content">
                        <h3>5 Estratégias para melhorar a segurança digital da sua empresa</h3>
                        <a href="#" class="blog-link">
                            Saiba mais
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </a>
                    </div>
                </article>
                <article class="blog-card">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/blog2.png" target="_blank" class="blog-image-link">
                        <div class="blog-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/blog2.png" alt="Business efficiency - Hands typing on laptop">
                        </div>
                    </a>
                    <div class="blog-content">
                        <h3>Como otimizar a gestão de numerário com eficiência</h3>
                        <a href="#" class="blog-link">
                            Saiba mais
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </a>
                    </div>
                </article>
                <article class="blog-card">
                    <a href="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/blog3.png" target="_blank" class="blog-image-link">
                        <div class="blog-image">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-home/blog3.png" alt="Sustainability - Person with green sphere and buildings representing environmental solutions">
                        </div>
                    </a>
                    <div class="blog-content">
                        <h3>Sustentabilidade Empresarial: Soluções de impressão para reduzir o impacto ambiental</h3>
                        <a href="#" class="blog-link">
                            Saiba mais
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <polyline points="9,18 15,12 9,6"></polyline>
                            </svg>
                        </a>
                    </div>
                </article>
            </div>
            <div class="blog-cta">
                <button class="btn-primary">Ver Mais no Blog</button>
            </div>
        </div>
    </section>
</main>

<?php get_footer(); ?>