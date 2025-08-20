<?php
/**
 * Functions
 * @package WordPress
 * @subpackage panretinatheme
 *
*/

/*--------------------------------------------------------------
ESTILOS E SCRIPTS
--------------------------------------------------------------*/
function enqueue_scripts() {

	//VERSÃO DO TEMA
	$tema_version = time();
	
	// PRELINE
	wp_enqueue_script( 'preline', 'https://cdn.jsdelivr.net/npm/preline@3.2.3/dist/preline.min.js', array('jquery'), $tema_version, true );

	//SWIPER
	if(is_front_page() || is_archive()) :
	wp_enqueue_style('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css', array(), $tema_version, 'all');
	wp_enqueue_script('swiper', 'https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js', array('jquery'), $tema_version, true);
	endif;
	
	//ANIMATE CSS
	// wp_enqueue_script('animate', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css', array('jquery'), $tema_version, true );
	
	//STYLE THEME
	wp_enqueue_style('icon', get_template_directory_uri().'/assets/icon/style.css', array(), $tema_version, 'all');
	wp_enqueue_style('theme', get_template_directory_uri().'/assets/css/theme.min.css', array(), $tema_version, 'all');

	//CSS DEFAULT
	wp_enqueue_style('default-style', get_stylesheet_uri(), array(), $tema_version, 'all');

	//SCRIPT THEME JS
	wp_enqueue_script( 'theme-js', get_template_directory_uri().'/assets/js/theme.js', array('jquery'), $tema_version, true );

	//SCRIPT FORMS JS
	// wp_enqueue_script( 'forms-js', get_template_directory_uri().'/assets/js/forms.js', array('jquery'), $tema_version, true );

	//JQUERY MASK
	wp_enqueue_script('jqueryMask-js', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js', array('jquery'), $tema_version, true );

	// FANCYBOX
	// wp_enqueue_script('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js', array('jquery'), $tema_version, true );
	// wp_enqueue_style('fancybox', 'https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.css', array(), $tema_version, 'all');
}

add_action('wp_enqueue_scripts', 'enqueue_scripts');


/*--------------------------------------------------------------
CONFIGURACOES DO TEMA
--------------------------------------------------------------*/

function setup_theme() {

	// Adicionar title dinamicamente
	add_theme_support('title-tag');

	// // Esconder barra logada wordpress
	// add_filter('show_admin_bar', '__return_false');

	// Habilitar imagem destacada
	add_theme_support('post-thumbnails');

	// habilitar resumo em páginas
	add_post_type_support( 'page', 'excerpt' );

	// habilitar responsivo em todos os embeds (youtube)
	add_theme_support( 'responsive-embeds' );

	// Registrar menus
	register_nav_menus( array(
		'menu-principal' => 'Menu principal'
	) );
}

add_action( 'after_setup_theme', 'setup_theme' );


/*--------------------------------------------------------------
Default
--------------------------------------------------------------*/
include ('inc/default.php');

/*--------------------------------------------------------------
Pre get posts
--------------------------------------------------------------*/
//include('inc/pre_get_posts.php');

function is_language($en, $es, $pt) {
	if (pll_current_language() == 'en') :
		return $en;
	elseif (pll_current_language() == 'es') :
		return $es;
	else: 
		return $pt;
	endif;
}

function is_link_lang($en, $es, $pt) {
	if (pll_current_language() == 'en') :
		return get_the_permalink($en);
	elseif (pll_current_language() == 'es') :
		return get_the_permalink($es);
	else: 
		return get_the_permalink($pt);
	endif;
}