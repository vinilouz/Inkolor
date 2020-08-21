<?php
/**
 * The main template file
 * @package Inkolor
 * @subpackage inkolor
 * @since Inkolor 1.0
 */

get_header();

// Is Home
if ( is_front_page() ) get_template_part( 'templates/page', 'home' );

get_footer();

?>