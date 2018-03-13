<section id="work" class="work-style">
	<div class="container">
		<h2><?= get_sub_field('work_title'); ?></h2>
		<p><?= get_sub_field('work_description'); ?></p>
		<div id="options">
			<ul id="filters" class="work-nav">
				<li class="work-item-button"><button class="button" data-filter="*">All</button></li>
				<?php								
					$terms = get_terms( 'work' );

					if( $terms && ! is_wp_error($terms) ){
						foreach( $terms as $term ){
							?> 
							<li class="work-item-button"><button class="button" data-filter="<?='.' . $term->slug; ?>"><?= $term->name; ?> </button></li>
							<?php
						}
					}
				?>
			</ul>
		</div>
		<ul class="row mx-auto isotope">
			<?php
			$query = new WP_Query( array('post_type' => array( 'work' )) );
			if ( $query->have_posts() ) {
				while ( $query->have_posts() ) {
					$query->the_post();
					?>
					<li class="col-md-4 work-item-img item <?php 
						$terms = get_the_terms(get_the_ID(), 'work');
							if( $terms && ! is_wp_error($terms) ){
								foreach( $terms as $term ){
									echo $term->slug . ' ';
								}
							}
					?>">
						<div class="work-img">
							<?php the_post_thumbnail(); ?>
							<div class="overlay">
								<a href="<?php echo get_the_permalink(); ?>">
								Design</a>
							</div>
						</div>
					</li>
					<?php
				}
			} else {
				// Постов не найдено
			}
			wp_reset_query();
			wp_reset_postdata();
			?>
		</ul>
	</div>
</section>