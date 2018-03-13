<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */
 
get_header();

$container   = get_theme_mod( 'understrap_container_fluid_type' );

?>

<div class="wrapper" id="home-wrapper">
	<section class="blog-home-style">
		<div class="container">
			<h1><?= __('Blog Posts'); ?></h1>
		</div>
	</section>
	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">
		<div class="main-style">
			<div class="container">
				<div class="row">
					<div class="article-style col-md-8">
						<div class="elements-gride">
							<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>		
							<article class="element-item">
								<a href="<?php echo get_permalink(); ?>" class="arrow-style"><i class="fa fa-share fa-3x" aria-hidden="true"></i></a>
								<a href="<?php echo get_permalink(); ?>"><?php the_post_thumbnail();?></a>
								<div class="article-block-style">
									<div class="article-text-style">
										<h2><a href="<?php echo get_permalink(); ?>">
											<?php the_title(); ?>
										</a></h2>
										<?php the_excerpt(); ?>
									</div>
									<div class="article-info">
										<span class="clock"><i class="fa fa-clock-o fa-2x" aria-hidden="true"></i></span>
										<span>
											<time class="datetime"><?php the_date('M, d, Y');?></time>
										</span>
									</div>
								</div>
							</article>
							
							<?php endwhile; ?>
							<?php endif; ?>
						</div>
						<?php if (function_exists('wp_corenavi')) wp_corenavi(); ?>
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

