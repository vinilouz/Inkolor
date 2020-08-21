<?php
/**
 * Header Template.
 *
 * @package inkolor
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;?>

<header id="header" class="position-relative mb-5 pb-4">
	<div class="container pt-3">
		<div class="row pt-4">
			<div class="col">
				<a href="<?php echo home_url();?>" class="logo">
					<?php the_custom_logo(); ?>
				</a>
			</div>
			<div class="col-auto">
				<?php
				wp_nav_menu(
					array(
						'theme_location'	=> 'primary',
						'container'			=> 'nav',
						'container_id'		=> 'main-menu',
						'container_class'	=> 'main-menu',
						'menu_id'			=> 'main-menu-ul',
						'menu_class'		=> 'main-menu-ul pl-0'
					)
				); ?>
			</div>
		</div>
	</div>
</header>
