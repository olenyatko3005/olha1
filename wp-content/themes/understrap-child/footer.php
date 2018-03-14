<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container   = get_theme_mod( 'understrap_container_fluid_type' );
?>

<?php get_sidebar( 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="understrap_container_fluid_type">
		<footer class="footer-style">
			<div class="footer-style-info">
				<div class="container">
					<div class="row">
						<div class="col-md-6 footer-style-left-sone">
							<div><?php dynamic_sidebar( 'footer-left-sone' ); ?></div>
							<ul>
								<li class="row">
									<a class="col-2" href="tel:<?php echo get_theme_mod( 'phone_number_first' ); ?>"><i class="fa fa-phone fa-2x contact-icon" aria-hidden="true"></i></a>
									<div class="col-10">
										<span>Phone:</span> 
										<a href="tel:<?php echo get_theme_mod( 'phone_number_first' ); ?>"><?php echo get_theme_mod( 'phone_number_first' ); ?></a>
									</div>
								</li>
								<li class="row">
									<a class="col-2" href="#"><i class="fa fa-map-marker fa-2x contact-icon" aria-hidden="true"></i></a>
									<div class="col-10">
										<address>Address: <?php echo get_theme_mod( 'address_text' ); ?></address>
									</div>
								</li>
							</ul>
							<iframe class="google-map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3313.7074132609728!2d151.0720135148289!3d-33.84565538066258!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12a4c8f54903eb%3A0x3fb7eecf327e4181!2zUGFya3ZpZXcgRHIsIFN5ZG5leSBPbHltcGljIFBhcmsgTlNXIDIxMjcsINCQ0LLRgdGC0YDQsNC70LjRjw!5e0!3m2!1sru!2sua!4v1520791124809" frameborder="0" style="border:0" allowfullscreen></iframe>

						</div>
						<div class="col-md-6 footer-style-right-sone">
							<?php dynamic_sidebar( 'footer-right-sone' ); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="info-about-site">
						<!-- Your site title as branding in the menu -->
				<?php if ( ! has_custom_logo() ) { ?>

					<?php if ( is_front_page() && is_home() ) : ?>

						<h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a></h1>
						
						<?php else : ?>

						<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
					
					<?php endif; ?>
					
				
				<?php } else {
					the_custom_logo();
				} ?><!-- end custom logo -->
			</div>	
			<div class="copyright">
				<span><?php echo get_theme_mod( 'copyright_text' ); ?></span>
			</div>

		</footer><!-- #colophon -->
	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>

</body>

</html>



