<?php

/**
 * Dualinfor Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Dualinfor_Theme
 */

if (! defined('_S_VERSION')) {
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 */
function dualinfor_theme_setup()
{
	load_theme_textdomain('dualinfor-theme', get_template_directory() . '/languages');

	add_theme_support('automatic-feed-links');
	add_theme_support('title-tag');
	add_theme_support('post-thumbnails');

	register_nav_menus(
		array(
			'menu-1' => esc_html__('Menu Principal', 'dualinfor-theme'),
		)
	);

	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	add_theme_support(
		'custom-background',
		apply_filters(
			'dualinfor_theme_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	add_theme_support('customize-selective-refresh-widgets');

	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'dualinfor_theme_setup');

/**
 * Set the content width in pixels.
 */
function dualinfor_theme_content_width()
{
	$GLOBALS['content_width'] = apply_filters('dualinfor_theme_content_width', 640);
}
add_action('after_setup_theme', 'dualinfor_theme_content_width', 0);

/**
 * Register widget area.
 */
function dualinfor_theme_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'dualinfor-theme'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Adiciona widgets aqui.', 'dualinfor-theme'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'dualinfor_theme_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function dualinfor_theme_scripts()
{
	wp_enqueue_style('dualinfor-theme-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('dualinfor-theme-style', 'rtl', 'replace');

	wp_enqueue_script('dualinfor-theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'dualinfor_theme_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}

function dualinfor_enqueue_assets()
{
	// Versão do tema
	$theme_version = wp_get_theme()->get('Version');

	// Font Awesome
	wp_enqueue_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css', array(), '6.4.0');

	// Estilos do tema
	wp_enqueue_style('dualinfor-header-style', get_template_directory_uri() . '/assets/css/header.css', array(), $theme_version);
	wp_enqueue_style('dualinfor-footer-style', get_template_directory_uri() . '/assets/css/footer.css', array(), $theme_version);
	// Estilos do card section
	wp_enqueue_style('dualinfor-card-style', get_template_directory_uri() . '/assets/css/card.css', array(), $theme_version);
	// Estilo da seção de benefícios
	wp_enqueue_style('dualinfor-benefits-style', get_template_directory_uri() . '/assets/css/benefits-section.css', array(), $theme_version);
	// Estilo da seção de features
	wp_enqueue_style('dualinfor-features-style', get_template_directory_uri() . '/assets/css/features-section.css', array(), $theme_version);
	// Estilo da seção de Testemunhos
	wp_enqueue_style('dualinfor-testemunhos-style', get_template_directory_uri() . '/assets/css/section-testemunhos.css', array(), $theme_version);
	// Estilo da seção de Soluções
	wp_enqueue_style('dualinfor-solutions-style', get_template_directory_uri() . '/assets/css/solutions-section.css', array(), $theme_version);
	// Estilo da seção de Complementar
	wp_enqueue_style('dualinfor-complementary-style', get_template_directory_uri() . '/assets/css/complementary-section.css', array(), $theme_version);
	// Estilo da seção de Soluçôes FAQ
	wp_enqueue_style('dualinfor-doubt-style', get_template_directory_uri() . '/assets/css/doubt-section.css', array(), $theme_version);

	// Estilo da seção de Hero Consultadoria
	wp_enqueue_style('dualinfor-consultoria-hero-style', get_template_directory_uri() . '/assets/css/consultadoria-section-hero.css', array(), $theme_version);

// Estilo da seção de Hero Consultadoria parte 2
wp_enqueue_style('dualinfor-hero-section-secundary-style', get_template_directory_uri() . '/assets/css/hero-section-secondary.css', array(), $theme_version);

// Estilo da seção de Consultadoria Soluções
wp_enqueue_style('dualinfor-consultadoria-solutions-section-style', get_template_directory_uri() . '/assets/css/consultadoria-solutions.css', array(), $theme_version);

// Estilo da seção de Consultadoria Carrosel
wp_enqueue_style('dualinfor-consultadoria-carousel-style', get_template_directory_uri() . '/assets/css/consultadoria-carousel.css', array(), $theme_version);

// Estilo da seção de Consultadoria Carrosel Empresas
wp_enqueue_style('dualinfor-carousel-empresas-style', get_template_directory_uri() . '/assets/css/carousel-empresas.css', array(), $theme_version);

// Estilo da seção de Consultadoria Carrosel Empresas
wp_enqueue_style('dualinfor-consultadoria-complementary-section-style', get_template_directory_uri() . '/assets/css/consultadoria-complementary-section.css', array(), $theme_version);


	// Estilo da seção de Formulário
	wp_enqueue_style('dualinfor-formulario-style', get_template_directory_uri() . '/assets/css/formulario.css', array(), $theme_version);

	// Estilo da página assistência técnica
	wp_enqueue_style('dualinfor-pagina-assistenciatecnica-style', get_template_directory_uri() . '/assets/css/assistencia-tecnica.css', array(), $theme_version);

	// Estilo da página produtos
	wp_enqueue_style('dualinfor-pagina-produtos-style', get_template_directory_uri() . '/assets/css/produtos.css', array(), $theme_version);

	// Estilo da página assistência técnica
	wp_enqueue_style('dualinfor-pagina-home-style', get_template_directory_uri() . '/assets/css/home.css', array(), $theme_version);

	// Estilo da página assistência técnica
	wp_enqueue_style('dualinfor-pagina-servicos-solucoes-style', get_template_directory_uri() . '/assets/css/servicos-solucoes.css', array(), $theme_version);

	// JavaScript
	wp_enqueue_script('dualinfor-main-js', get_template_directory_uri() . '/assets/js/script.js', array('jquery'), $theme_version, true);

	// Estilo exclusivo da página 404
	if (is_404()) {
		wp_enqueue_style('dualinfor-404-style', get_template_directory_uri() . '/assets/css/404.css', array(), $theme_version);
	}
}
add_action('wp_enqueue_scripts', 'dualinfor_enqueue_assets');
