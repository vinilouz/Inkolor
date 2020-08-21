<?php
/**
 * Footer Template.
 *
 * @package inkolor
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;?>

<footer id="footer" class="position-relative">
	<div class="logo-footer">
		<img src="<?php echo get_template_directory_uri()."/img/logo-footer.png";?>" alt="Logo">
	</div>
	<div class="container">
		<div class="row justify-content-center align-items-center flex-column flex-sm-row">
			<div class="col col-4 col-md-auto">
				<a href="tel:+0416750377">
					<span class="mr-2 icon-wpp"></span> 041 675 03 77
				</a>
			</div>
			<div class="col col-4 my-4 my-sm-0 col-md-auto mx-md-5 px-md-4">
				<a href="https://www.google.com/maps/place/Hofm%C3%A4tteliweg+1,+6055+Alpnach,+Su%C3%AD%C3%A7a/@46.9381702,8.2702034,17z/data=!3m1!4b1!4m5!3m4!1s0x478ff10bb0f66cb3:0x279fa2210582cf98!8m2!3d46.9381702!4d8.2723921">
					<span class="mr-2 icon-adress"></span> Hofmätteliweg 1 6055 Alpnach Dorf
				</a>
			</div>
			<div class="col col-4 col-md-auto">
				<a href="mailto:info@inkolor.ch">
					<span class="mr-2 icon-mail"></span> info@inkolor.ch
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<div class="spacer"></div>
				<p>
					<b class="d-block">© 2020 Inkolor.ch GmbH.</b>
					Alle Rechte vorbehalten Alle Handelsnamen und Marken sind Eigentum ihrer jeweiligen Inhaber und dienen nur der Beschreibung und Identifikation der Produkte.
				</p>
			</div>
		</div>
	</div>
</footer>

