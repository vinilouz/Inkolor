<?php
/**
 * Inkolor functions and definitions
 * @package Inkolor
 * @subpackage inkolor
 * @since Inkolor 1.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$theme_includes = array(
	'/enqueue.php',                // Enqueue scripts and styles.
	'/helps.php',                  // Custom functions that act independently of the theme templates.
	'/admin.php',                  // Custom admin panel functions.
	'/setup.php',                  // Theme setup and custom theme supports.
);

// Calling files
foreach ( $theme_includes as $file ) {
	require_once get_template_directory() . '/includes' . $file;
}

// Disable WordPress Admin Bar for all users but admins.
show_admin_bar(false);
