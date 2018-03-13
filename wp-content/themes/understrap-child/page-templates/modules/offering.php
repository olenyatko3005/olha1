<section class="offering-style">
	<div class="container">
		<h2><?= get_sub_field('offering_title'); ?></h3>
		<p><?= get_sub_field('offering_description'); ?></p>
		<ul class="row">
			<?php  
			while ( have_rows('offering_section') ) : the_row();?>
				<li class="element-item-index col-md-4">
					<img class="work-image-style" src="<?php the_sub_field('offering_image');?>" />
					<h4><?= get_sub_field('offering_image_title'); ?></h4>
					<p><?= get_sub_field('offering_image_description'); ?></p>
				</li>

			<?php endwhile;	?>
		</ul>
	</div>
</section>