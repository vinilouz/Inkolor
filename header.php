<?php
/**
 * The header template file
 * @package Inkolor
 * @subpackage inkolor
 * @since Inkolor 1.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
	<!--[if IE]>
		<script type="text/javascript">
			document.createElement("header");
			document.createElement("section");
			document.createElement("article");
			document.createElement("aside");
			document.createElement("nav");
			document.createElement("figure");
			document.createElement("legend");
			document.createElement("footer");
		</script>
	<![endif] -->

	<!-- Facebook app id para compartilhamentos -->
	<!-- <meta property="fb:app_id" content="xxxx" /> -->
	<!-- <meta property="fb:admins" content="xxxx" /> -->

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<?php wp_head(); ?>

<body <?php body_class(); ?>>

	<div id="all">

	<?php // This is the style template of header
	get_template_part( 'templates/header', 'main' );?>

	<main id="main" class="position-relative">
