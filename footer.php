<?php
/**
 * The footer template file
 * @package Inkolor
 * @subpackage inkolor
 * @since Inkolor 1.0
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?php wp_footer(); ?>

		</main>

		<footer>
			<?php // This is the style template of footer
			get_template_part( 'templates/footer', 'main' );?>
		</footer>

	<!-- end #all -->
	</div>

</body>
</html>
