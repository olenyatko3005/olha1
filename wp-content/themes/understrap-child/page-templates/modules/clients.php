<section class="client-style">
	<div class="container">
		<h2><?= get_sub_field('client_title'); ?></h2>
		<div class="">
			<?php  
			
			while ( have_rows('client_group') ) : the_row();?>
				<a href="<?php the_sub_field('url_client');?>">
					<img class="saturate" src="<?php the_sub_field('clients_images');?>" />
				</a>

			<?php endwhile;	?>
		</div>
	</div>
</section>