<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

get_header();
$container   = get_theme_mod( 'understrap_container_fluid_type' );
?>

<div class="wrapper" id="single-wrapper">
	<section class="blog-home-style">
		<div class="container">
			<h1><?= __('Best Phons Of all Time in the World'); ?></h1>
		</div>
	</section>
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<div class="main-style">
			<div class="container">
				<div class="row">
					<div class="col-md-8">
						<article class="post-style">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); 
							the_post_thumbnail(); ?>
							
							<div class="post-text">
								<h2><?php the_title(); ?></h2>
								<?php the_content(); ?>

							</div>					

							<?php endwhile; ?>
							<?php endif; ?>
						</article>
						<div class="next-prev-post d-flex justify-content-between">
							<?php previous_post_link('%link' , 'Previous'); ?> 
							<?php next_post_link('%link' , 'Next'); ?>
						</div>
					</div> <!-- col-md-8 end -->
					<div class="aside-style col-md-4">
						<?php dynamic_sidebar( 'sidebar-sone' ); ?>
						<?php dynamic_sidebar( 'sidebar-email' ); ?>
					</div>	

				</div><!-- .row -->
			</div>
		</div>
	</div><!-- Container end -->
</div><!-- Wrapper end -->

<?php get_footer(); ?>
