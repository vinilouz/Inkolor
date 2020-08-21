<?php
/**
 * Custom admin panel functions.
 *
 * @package Inkolor
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

/*
 * Usuários que poderão ver todos os "menus"
 */
$admins = array(
	'vinilouz'
);
$current_user = wp_get_current_user();

// Se usuario não esta na lista de usuarios "super"
if(!in_array($current_user->user_login, $admins)){

	/* Remover menus */
	function remove_menus(){
		remove_menu_page( 'edit-comments.php' );				 // Comments
		remove_menu_page( 'plugins.php' );						 // Plugins
		remove_menu_page( 'tools.php' );						 // Tools
		remove_menu_page( 'options-general.php' );				 // Settings
		remove_menu_page( 'edit.php?post_type=acf-field-group'); // ACF (Campos personalizados)
		remove_menu_page( 'edit.php');							 // Posts
		remove_menu_page( 'wpcf7');								 // Contact Form 7
		//remove_menu_page( 'itsec');								 // Itheme Security
	}
	add_action( 'admin_menu', 'remove_menus', 788 );

	/* Remover submenus */
	function remove_submenu_admin(){
		// Painel
		//remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=category' );				 // Categorias
		//remove_submenu_page( 'edit.php', 'edit-tags.php?taxonomy=post_tag' );				 // Categorias
		// Posts
		//remove_submenu_page( 'index.php', 'update-core.php' );								 // Updates
		// Aparencia
		remove_submenu_page( 'themes.php', 'themes.php' );									 // Temas
		// remove_submenu_page( 'themes.php', 'customize.php?return=%2Fwp-admin%2Findex.php' ); // Personalizar
		remove_submenu_page( 'themes.php', 'theme-editor.php' );							 // Editor de temas
		// Usuários
		remove_submenu_page( 'users.php', 'users.php' );									 // Todos usuários
		remove_submenu_page( 'users.php', 'user-new.php' );									 // Novo usuário
		// CFDB7
		remove_submenu_page( 'cfdb7-list.php', 'cfdb7-extensions' );						 // Todos usuários
	}
	add_action( 'admin_menu', 'remove_submenu_admin', 789 );

	/* Remove all dashboard widgets */
	function remove_default_widgets_dashboard(){
		remove_meta_box('dashboard_right_now', 'dashboard', 'normal');
		remove_meta_box('dashboard_activity', 'dashboard', 'normal');
		remove_meta_box('dashboard_site_health', 'dashboard', 'normal');
		remove_meta_box('dashboard_recent_comments', 'dashboard', 'normal');
		// remove_meta_box('dashboard_incoming_links', 'dashboard', 'normal');
		// remove_meta_box('dashboard_plugins', 'dashboard', 'normal');
		// remove_meta_box('dashboard_quick_press', 'dashboard', 'side');
		remove_meta_box('dashboard_recent_drafts', 'dashboard', 'side');
		// remove_meta_box('dashboard_primary', 'dashboard', 'side');
		// remove_meta_box('dashboard_secondary', 'dashboard', 'side');
		// remove_meta_box('wpseo-dashboard-overview', 'dashboard', 'side');
	}
	add_action('wp_dashboard_setup', 'remove_default_widgets_dashboard');

	/* Remove admin top bar widgets */
	function remove_admin_bar_links(){
		global $wp_admin_bar;
		$wp_admin_bar->remove_menu('wp-logo');				// Remove the WordPress logo
		$wp_admin_bar->remove_menu('updates');				// Remove the updates link
		$wp_admin_bar->remove_menu('comments');				// Remove the comments link
		$wp_admin_bar->remove_menu('new-content');			// Remove the content link
		$wp_admin_bar->remove_menu('wpseo-menu');			// Remove the WP Seo link
	}
	add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );

	/* Remove a aba opções de tela */
	add_filter('screen_options_show_screen', function(){
		return false;
	});

	/* Debug */
	function debug_admin_menu() {
		global $submenu;
		echo '<pre style="margin-left: 170px; margin-top: 10px;">' . print_r( $submenu, TRUE) . '</pre>';
		wp_die();
	}
	// add_action( 'admin_init', 'debug_admin_menu' );

} // End if

/**
 * Change post to Noticias
 */
// add_action( 'init', 'cp_change_post_object' );
// function cp_change_post_object() {
// 	$get_post_type = get_post_type_object('post');
// 	$labels = $get_post_type->labels;
// 	$labels->name = 'Notícias';
// 	$labels->singular_name = 'Notícia';
// 	$labels->add_new = 'Adicionar notícia';
// 	$labels->add_new_item = 'Adicionar notícia';
// 	$labels->edit_item = 'Editar notícia';
// 	$labels->new_item = 'Notícias';
// 	$labels->view_item = 'Ver Notícias';
// 	$labels->search_items = 'procurar Notícias';
// 	$labels->not_found = 'Nenhuma Notícias encontada';
// 	$labels->not_found_in_trash = 'Nenhuma Notícias encontada';
// 	$labels->all_items = 'Todas notícias';
// 	$labels->menu_name = 'Notícias';
// 	$labels->name_admin_bar = 'Notícias';
// }

/* Logo personalizada */
function cutom_login_logo() {
	echo "<style type=\"text/css\">
		body.login div#login h1 a {
			width: 174px;
			height: 54px;
			margin: 0 auto 20px;
			background: transparent url(".get_bloginfo('template_directory')."/img/logo-2020.png) no-repeat scroll center center / contain;
		}
	</style>";
}
add_action( 'login_enqueue_scripts', 'cutom_login_logo' );

/* Rodapé personalizado */
function wpmidia_change_footer_admin () {
	echo '
	<img src="data:image/png;base64,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"
	style="width: 20px;height: 20px;transform: translateY(25%);" alt="Logo VoltsDigital" />
	Desenvolvido por <a href="https://www.voltsdigital.com.br/" target="_blank">Volts Digital</a>
	';
}
add_filter('admin_footer_text', 'wpmidia_change_footer_admin');
